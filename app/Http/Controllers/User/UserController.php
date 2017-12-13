<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
    }

    public function create(Request $request){
        
       
        $user = $request->input("user"); 
        $pass = $request->input("pass"); 
        $mail = $request->input("mail"); 
        $state = $request->input("state"); 


        DB::table('users')->insert(
            ['id_identification' => $user, 'password' =>  $pass,'mail' => $mail, 'state' => $state]
        );
    }

    public function readJson(Request $request)
    {

        $user = $request->input("user"); 
        $pass = $request->input("pass"); 
        
      
        $var1= DB::table('users')
        ->join('profile_company', 'users.id_identification','=', 'profile_company.identification')
        ->where('users.id_identification',  $user)
        ->where('users.password', $pass) 
        ->select('users.*')
        ->first();


       if(!$var1){

        $response=false;
        $identification=false;
       }else{
        $response=true;
        $identification=$var1->id_identification;
       }
        return response()->json(['status' => 'ok', 'data' => $response,'identification'=>$identification], 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
