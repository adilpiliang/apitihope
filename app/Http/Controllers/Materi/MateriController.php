<?php

namespace App\Http\Controllers\Materi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MateriModel;

class MateriController extends Controller
{
    public function materi(){
        return response()->json(MateriModel::get(), 200);
    }
    public function show($id_materi){
            return response()->json(MateriModel::find($id_materi));
    }

    public function materiupdate(Request $request, MateriModel $materi){
        $materi->update($request -> all());
        return response()->json($country, 200);
    }
}