<?php namespace App\Http\Controllers;

use App\CalonSiswa;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HumasController extends Controller {

    public function __construct()
    {
        $this->middleware('humas');
    }

	public function getHome(){
		$cs = CalonSiswa::join('users', 'calon_siswa.id', '=', 'users.id')->get();
        return view('pengurus.humas')->with('cs',$cs);
    }

    public function getLuluskan($id){
        $cs = CalonSiswa::find($id);
        $cs->status_kelulusan=1;
        $cs->save();
        return Redirect::to('humas');
    }

    public function getGagalkan($id){
        $cs = CalonSiswa::find($id);
        $cs->status_kelulusan=2;
        $cs->save();
        return Redirect::to('humas');
    }

}
