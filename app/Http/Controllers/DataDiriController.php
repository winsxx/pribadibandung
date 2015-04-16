<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DataDiriController extends Controller {

	//
	public function store(){
		$input=Request::all();				
		$input['published_at']=Carbon::now();
		
		//$article=new Article;
		//$article->title=$input['title'];
		//$article->save();
		//Article::create($request->all());		

		//return redirect('/create');

		/*$calonsiswa=new CreateCalonSiswaTable;
		$calonsiswa->nama=;
		$calonsiswa->alamat=;
		$calonsiswa->asal_sekolah=;
		$calonsiswa->t=;
		$calonsiswa->nama=;
		$calonsiswa->nama=;*/
	}

}
