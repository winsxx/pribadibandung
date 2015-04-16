<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\database\2015_04_12_214840_create_calon_siswa_table
use Request;

class DataDiriController extends Controller {

	//
	public function store(){
		$input=Request::all();				
		//$input['']=Carbon::now();
		
		//$article=new Article;
		//$article->title=$input['title'];
		//$article->save();
		//Article::create($request->all());		

		//return redirect('/create');

		$calonsiswa=new CreateCalonSiswaTable;
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
