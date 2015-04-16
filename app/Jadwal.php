<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model {

	public static function getLastString(){
        $jdw = Jadwal::orderby('created_at', 'desc')->first();
        if($jdw != null) return $jdw->tanggal;
        return null;
    }

}
