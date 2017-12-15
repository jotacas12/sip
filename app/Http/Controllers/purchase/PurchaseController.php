<?php

namespace App\Http\Controllers\purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Consecutive\Consecutive;


class PurchaseController extends Controller
{
    public function create(Request $request){
        $this->provider=(int)$request->input("provider");
        $this->id_company=(int)$request->input("id_company");
        $this->cellar=(int)$request->input("cellar");
        $this->state_purc=(int)$request->input("state_purc");
        $this->date=$request->input("date");
        $this->observations=(String)$request->input("observations");
        $this->deliver_date=$request->input("deliver_date");

       // var_dump( $this->provider);

       $Consecutive= Consecutive::cconsecutive('prueba','hola');
var_dump($Consecutive);
    }
}
