<?php

namespace App\Http\Controllers\Employee;

use App\employee;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Profile_menu;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $employeeU = employee::find($id);

        return $employeeU;
    }
   
        //return response()->json(['data' => $usuario], 200);
        //$employee = DB::select('select * from employees')->get()->toArray();

        
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
        $usuario = employee::find($id);

        return response()->json(['data' => $usuario], 200);
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
