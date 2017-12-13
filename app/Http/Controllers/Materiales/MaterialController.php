<?php

namespace App\Http\Controllers\Materiales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Material;


class MaterialController extends Controller
{
    public function query(Request $request){

     $material = $request->input("material"); 

        var_dump($material);
    }
}
