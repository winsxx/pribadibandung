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
        return view('pendaftar.home');
    }

    public function ubah(){
    	$dataSiswa=CalonSiswa::find(Auth::user()->id);
    	return view('pendaftar.ubahdatadiri',compact('dataSiswa'));
    }

    public function store(DataDiriRequest $request){
		$input=$request->all();

		$calonsiswa=new CalonSiswa();
		$calonsiswa->id = Auth::user()->id;
		$calonsiswa->alamat=$input['address'];
		$calonsiswa->tmpt_lahir=$input['dateofbirth'];
		$calonsiswa->tgl_lahir=$input['placeofbirth'];
		$calonsiswa->gender=$input['gender'];
		$calonsiswa->no_hp=$input['phoneNumber'];
		$calonsiswa->asal_sekolah=$input['school_before'];
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

}
