<?php

namespace App\Http\Controllers\P_profile;

use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\P_profiles;
use Illuminate\Http\Request;

class P_profilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$empleado = P_profiles::where('idP_profiles', '=', Employee::get('idUser'))->get()->first();

    
    }

    public function Profiles(Request $request){

    
        $identificaction = $request->input("user");

        $users = DB::table('employees')
        ->join('P_profiles', 'employees.idUser', '=', 'P_profiles.idP_profiles')
        ->join('profile_submenu', 'P_profiles.idP_profiles', '=', 'profile_submenu.id_profile')
        ->join('permisos', 'profile_submenu.id','=', 'permisos.profile_submenu_idsubmenu')
        ->where('employees.Users_id_identification',  $identificaction)
        ->where('profile_submenu.idsubmenu', 1)
        ->select('P_profiles.name','permisos.*')
        ->get();

        return response()->json(['status' => 'ok', 'data' => $users], 200);
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
