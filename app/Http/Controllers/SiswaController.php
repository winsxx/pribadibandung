<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SiswaController extends Controller {

    public function __construct()
    {
        $this->middleware('calonsiswa');
    }

    public function getHome(){
        return view('pengurus.humas');
    }

}
