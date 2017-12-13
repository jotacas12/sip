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

<<<<<<< HEAD
        $employeeU = employee::find($id);

        return $employeeU;
    }
    /**$menu
    ={inventario{
    compras{
    update,
    delete,
    },
    materiales{
    update,
    delete,
    }

    },
    administracion{
    usuarios{
    update,
    delete,

    }
    }

    }  /**
=======
        //return response()->json(['data' => $usuario], 200);
        //$employee = DB::select('select * from employees')->get()->toArray();

        $employee = employee::where("idemployees", "=", 1)->first();

        $id = $employee->idUser;

        $P_menu = Profile_menu::where("id_profile", "=", $id)->get();

        $arraymenu    = array();
        $arraysubmenu = array();
        foreach ($P_menu as $producto) {

            $menu = menu::where("idmenu", "=", $producto->idmenu)->get()->first();

            array_push($arraymenu, $menu->idmenu, $menu->namemenu);

        }

        foreach ($arraymenu as $menus) {
            // echo $menus->idmenu;
            //$submenu = Submenu::where("idmenu", "=", $menus->idmenu)->get();
            //return $submenu;
            //array_push($arraysubmenu, $submenu->idsubmenu, $submenu->namesumenu);

        }

>>>>>>> e5b8aaffdd4ada777449d5248f52f82799e3188e
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
