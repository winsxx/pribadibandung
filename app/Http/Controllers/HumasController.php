<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HumasController extends Controller {

    public function __construct()
    {
        $this->middleware('humas');
    }

	public function getHome(){
        return view('pengurus.humas');
    }

}
