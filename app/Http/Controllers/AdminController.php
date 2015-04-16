<?php namespace App\Http\Controllers;

use App\CalonSiswa;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller {

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function getHome(){
        return view('pengurus.admin');
    }

    public function postGantiJadwal(Request $request){
        $jadwal = new Jadwal();
        $jadwal->tanggal = $request->jadwal_baru;
        $jadwal->save();
        return Redirect::to('admin');
    }

    public function getMenuUmumkan(){
        return view('pengurus.adminumumkan');
    }

    public function umumkan(){
        $cs = CalonSiswa::all();
        foreach($cs as $c){
            if($c->status_kelulusan != 1)
                $c->status_kelulusan = 2;
            $c->phase = 4;
            $c->save();
        }
        return Redirect::to('admin-umumkan');
    }
}
