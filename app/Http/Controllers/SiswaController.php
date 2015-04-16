<?php namespace App\Http\Controllers;

use App\CalonSiswa;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\DataDiriRequest;
use Illuminate\Support\Facades\Auth;

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

}
