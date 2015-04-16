<?php namespace App\Http\Controllers;

use App\CalonSiswa;
use App\Http\Controllers\Controller;
use App\Http\Requests\DataDiriRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class SiswaController extends Controller {

    public function __construct()
    {
        $this->middleware('calonsiswa');
    }

    public function getHome(){
    	$dataSiswa=CalonSiswa::findOrNew(Auth::user()->id);  
        return view('pendaftar.home',compact('dataSiswa'));
        //return view('pendaftar.home');
    }

    public function ubah(){    	
    	$dataSiswa=CalonSiswa::find(Auth::user()->id);
    	if ($dataSiswa == null){
            $dataSiswa = new CalonSiswa();
            $dataSiswa->id = Auth::user()->id;
            $dataSiswa->save();
        }
    	return view('pendaftar.ubahdatadiri',compact('dataSiswa'));
    	//return View::with('pendaftar.ubahdatadiri').withvar($dataSiswa);
    }

    public function ganti(DataDiriRequest $request){
		$input=$request->all();
		
		$calonsiswa = CalonSiswa::find(Auth::user()->id);
		$calonsiswa->alamat=$input['address'];
		$calonsiswa->tmpt_lahir=$input['placeofbirth'];
		$calonsiswa->tgl_lahir=$input['dateofbirth'];
		$calonsiswa->gender=$input['gender'];
		$calonsiswa->no_hp=$input['phoneNumber'];
		$calonsiswa->asal_sekolah=$input['school_before'];
		if ($calonsiswa->phase==1){
			$calonsiswa->phase=2;
		}
		$calonsiswa->save();			

		return redirect('/home');
	}

    public function store(DataDiriRequest $request){
		$input=$request->all();

		$calonsiswa=new CalonSiswa();
		$calonsiswa->id = Auth::user()->id;
		$calonsiswa->alamat=$input['address'];
		$calonsiswa->tmpt_lahir=$input['placeofbirth'];
		$calonsiswa->tgl_lahir=$input['dateofbirth'];
		$calonsiswa->gender=$input['gender'];
		$calonsiswa->no_hp=$input['phoneNumber'];
		$calonsiswa->asal_sekolah=$input['school_before'];
		if ($calonsiswa->phase==1){
			$calonsiswa->phase=2;
		}
		$calonsiswa->save();

		return redirect('/home');
	}

    public function postBuktiBayar(Request $request){
        if(! $request->hasFile('buktibayar')){
            $error = ['buktibayar' => 'Harus upload file'];
            return redirect('home')->withErrors($error);
        }
        $dokumen = $request->file('buktibayar');
        if( !$dokumen->isValid()){
            $error = ['buktibayar' => 'Upload file gagal'];
            return redirect('home')->withErrors($error);
        }
        if($dokumen->getClientOriginalExtension()!='jpg'){
            $error = ['buktibayar' => 'File harus berupa jpg'];
            return redirect('home')->withErrors($error);
        }
        $filename = 'bukti_'.Auth::user()->id.'.jpg';
        $dokumen->move('file', $filename);
        $usr = CalonSiswa::find(Auth::user()->id);
        if ($usr == null){
            $usr = new CalonSiswa();
            $usr->id = Auth::user()->id;
        }
        $usr->link_bukti = $filename;        
        $usr->save();
        return Redirect::to('home');
    }

    public function showDetail($id){
    	$dataSiswa = CalonSiswa::find($id);
    	return view('pendaftar.detilsiswa',compact('dataSiswa'));
    }

}
