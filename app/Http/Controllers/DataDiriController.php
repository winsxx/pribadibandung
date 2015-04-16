<?php namespace App\Http\Controllers;

use App\CalonSiswa;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class DataDiriController extends Controller {

	//
	public function store(){
		$input=Request::all();				

		$calonsiswa=new CalonSiswa();
		$calonsiswa->nama=$input['name'];
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
