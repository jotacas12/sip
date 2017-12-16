<?php

namespace App\ClassPhp;
use Illuminate\Support\Facades\DB;

class Consecutive 
{
    private $id_company;
    private $doc;

    public function query_consecutive($id_company,$doc)
    {
       
        $consecutive= DB::table('consecutive')
        ->where('id_company',  $id_company)
        ->where('doc', $doc) 
        ->select('consecutive','idconsecutive')
        ->first();

        return $consecutive;


    }

    public function Updateconsecutive($id_company,$doc,$consec){
        $update = DB::table('consecutive')
        ->where('id_company',$id_company)
        ->where('doc', $doc)
        ->update(['consecutive' =>$consec]);

        return $update;
     

    }
}