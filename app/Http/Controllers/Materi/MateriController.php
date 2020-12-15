<?php

namespace App\Http\Controllers\Materi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MateriModel;

class MateriController extends Controller
{
    public function materi(){
        return response()->json(MateriModel::all(), 200);
}
}