<?php

namespace App\Http\Controllers\Matkul;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MatkulModel;

class MatkulController extends Controller
{
    public function matkul(){
        return response()->json(MatkulModel::all());
    }
    public function matkulByID($id_matkul){
        return response()->json(MatkulModel::find($id_matkul));
    }

    public function cari($cari){
        return MatkulModel::where("nama_matkul",$nama_matkul)->get();
    }
}
