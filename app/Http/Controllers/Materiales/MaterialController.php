<?php

namespace App\Http\Controllers\Materiales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Material;


class MaterialController extends Controller
{

    private $code;
    private $state;
    private $input_type;
    private $unity;
    private $serie;
    private $average_value;
    private $minimum_inventory;
    private $iva;
    private $description;
    
    public function query(Request $request){

        $this->code=(String)$request->input("code");

        $materiales= DB::table('materiales')
        ->join('Unity', 'materiales.unity','=', 'Unity.idUnity')
        ->join('Type_input', 'materiales.input_type','=', 'Type_input.idType_input')
        ->where('materiales.code',  $this->code)
        ->select('materiales.*','Unity.name_unity','Type_input.name_Type')
        ->first();

        if(!$materiales){
            $response=false;
 
           }else{
            $response=true;
      
           }

        return response()->json(['status' => 'ok', 'data' => $response,'material'=>$materiales], 200);
       
    }

    public function create(Request $request){

        $this->code=(String)$request->input("code");
        $this->state=(Int)$request->input("state");
        $this->input_type=(Int)$request->input("input_type");
        $this->unity=(Int)$request->input("unity");
        $this->serie=(Int)$request->input("serie");
        $this->average_value=(float)$request->input("average_value");
        $this->minimum_inventory=(float)$request->input("minimum_inventory");
        $this->description=(String)$request->input("description");


        $Insert=DB::table('materiales')->insert(
            ['code' => $this->code, 'state' =>  $this->state,'input_type' => $this->input_type, 'unity' => $this->unity, 'serie' => $this->serie, 'average_value' => $this->average_value, 'minimum_inventory' => $this->minimum_inventory, 'iva' => $this->iva, 'description' => $this->description]
        );

        if(!$Insert){
            $response=false;
        
           }else{
            $response=true;
        
           }
        return response()->json(['status' => 'ok', 'data' => $response], 200);
    }

    public function AutoQueryCode(Request $request){

        $this->code=(String)$request->input("code");


        $materiales = DB::table('materiales')
        ->where('code', 'like', $this->code.'%')
        ->select('materiales.*')
        ->take(10)
        ->get();
        foreach ($materiales as $materiale) {

            $output[] = array(
                'value' => $materiale->description,

            );

        }
        return response()->json($output);
    }

    public function AutoQueryDescr(Request $request){
        
                $this->description=(String)$request->input("description");
        
        
                $materiales = DB::table('materiales')
                ->where('description', 'like', $this->description.'%')
                ->select('materiales.*')
                ->take(10)
                ->get();
                foreach ($materiales as $materiale) {
        
                    $output[] = array(
                        'value' => $materiale->description,
        
                    );
        
                }
                return response()->json($output);
            }
}
