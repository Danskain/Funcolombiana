<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
//use App\Rol;

class RolController extends Controller
{
    //return view('roles.rol',['roles' => Rol::all()]);
    //return view('roles.rol',['roles' => Rol::all(),]);

    public function index(){

        return view('roles.rol',['roles' => Rol::all()]);
        /* $rol =  Rol::all();
        return ['roles' => $rol];
 */

    }

    public function selectRole(){

        $roles = Rol::where('condicion', '=', '1')
        ->select('id', 'nombre')
        ->orderBy('nombre', 'asc')
        ->get();

        return ['roles' => $roles];
    }
   

    
}
