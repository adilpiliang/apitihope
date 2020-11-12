<?php

namespace App\Http\Controllers\Matkul;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MatkulModel;

class MatkulController extends Controller
{
    public function matkul(){
        return response()->json(MatkulModel::get());
    }
    public function matkulByID($id){
        return response()->json(MatkulModel::find($id));
    }
}
