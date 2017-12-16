<?php

namespace App\Http\Controllers\purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Facades\ {
    App\ClassPhp\Consecutive
};


class PurchaseController extends Controller
{
    private $provider;
    public function create(Request $request){

        $this->provider=(int)$request->input("provider");
        $this->id_company=(int)$request->input("id_company");
        $this->cellar=(int)$request->input("cellar");
        $this->state_purc=(int)$request->input("state_purc");
        $this->date=$request->input("date");
        $this->observations=(String)$request->input("observations");
        $this->deliver_date=$request->input("deliver_date");

       

        $Consecutive= Consecutive::query_consecutive('1','1');
        
        $Insert=DB::table('purchases')->insert(
            ['consecutive_purc' =>  $Consecutive->consecutive, 'provider' => $this->provider, 'id_company' =>  $this->id_company, 'cellar' => $this->cellar, 'state_purc' =>  $this->state_purc, 'date' =>  $this->date, 'observations' =>  $this->observations, 'deliver_date' =>  $this->deliver_date]
        );


        if(!$Insert){
            $response=false;
        
           }else{
            $response=true;
            $ConseAtual= $Consecutive->consecutive+1;
        
           }
           
           $update= Consecutive::Updateconsecutive('1','1', $ConseAtual);
           return response()->json(['status' => 'ok', 'data' => $response], 200);

    }
}
