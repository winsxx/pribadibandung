<?php namespace App\Http\Controllers;

use App\CalonSiswa;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BendaharaController extends Controller {

    public function __construct()
    {
        $this->middleware('bendahara');
    }

    public function getHome(){
        $cs = CalonSiswa::where('phase','=','2')->whereNotNull('link_bukti')->join('users', 'calon_siswa.id', '=', 'users.id')->get();
        return view('pengurus.bendahara')->with('cs',$cs);
    }

    public function getSahkan($id){
        $cs = CalonSiswa::find($id);
        if($cs->phase == 2)
            $cs->phase = 3;
        $cs->save();
        return Redirect::to('bendahara');
    }
}
