<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Cliente;
use App\Models\Persona;
use App\Models\Rol;
use App\Models\Producto;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('clientes.cliente',['clientes' => Cliente::all(),'documentos'=>TipoDocumento::all()]);

        $usuario =  User::join('personas','users.id', '=', 'personas.id')
        ->join('roles', 'users.id', '=', 'roles.id')
        ->select('personas.id','personas.codigo','personas.nombre  as pernombre','personas.apellido','personas.numeroDocumento','personas.telefono','personas.celular','personas.direccion','users.name', 'users.email', 'users.password', 'roles.nombre')
        ->get();

        $tipo_documento = TipoDocumento::all();

        $rol = Rol::all();

        /* $usuario = Persona::all(); */

        $todos = User::all();

        return view('clientes.cliente',['usuarios' => $usuario, 'documentos' => $tipo_documento,'roles' => $rol]);

       // return ['usuarios' => $usuario];
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function dashboard(){
           // return view('dashboard');
            $cantidad = count(Producto::all());
        return view('dashboard',['solicitudes'=>Producto::all(), 'cantidad' => $cantidad]);
    }
    public function store(Request $request)
    {
        try{
            
            DB::beginTransaction();
            $persona = new Persona();
            $persona->codigo = 1;
            $persona->nombre = $request->nombre;
            $persona->apellido = $request->apellido;
            $persona->tipoDocumento = $request->tipoDocumento;
            $persona->numeroDocumento = $request->numeroDocumento;
            $persona->telefono = $request->telefono;
            $persona->celular = $request->celular;
            $persona->direccion = $request->direccion;
            $persona->save();
            
            $user = new User();
            $user->idpersona = $persona->id;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->email_verified_at = null;
            $user->password = bcrypt( $request->password);
            $user->condicion = '1';
            $user->idrol = $request->idrol;
            $user->remember_token = $request->remember_token;           
            $user->save();

            DB::commit();

            return response()->json('creado');
        }catch(Exception $e){
            DB::rollBack();
        }
        /* $datos = request()->except('_token');
        Cliente::insert($datos);
        return response()->json($datos); */
    }
    public function edit($dato)
    {   
        $user = User::findOrFail($dato);
        $persona = Persona::findOrFail($user->id);
       
        return response()->json([$persona, $user]);
        /* public function edit(User $cliente)
    {
        return response()->json($cliente);
    } */
    }
        
    public function update(Request $request, $dato)
    {
        //var_dump($dato);
        
        try{
        
                DB::beginTransaction();
                $user = User::findOrFail($dato);
                $persona = Persona::findOrFail($user->id);
                $persona->codigo = 1;
                $persona->nombre = $request->nombre;
                $persona->apellido = $request->apellido;
                $persona->tipoDocumento = $request->tipoDocumento;
                $persona->numeroDocumento = $request->numeroDocumento;
                $persona->telefono = $request->telefono;
                $persona->celular = $request->celular;
                $persona->direccion = $request->direccion;
                 $persona->save();
        
        
                $user->name = $request->name;
                $user->email = $request->email;
                $user->email_verified_at = null;
                $user->password = bcrypt( $request->password);
                $user->condicion = '1';
                $user->idrol = $request->idrol;
                $user->remember_token = $request->remember_token;           
                $user->save();

                DB::commit();

             return response()->json('actualizado');
    } catch (Exception $e){
        DB::rollBack();
    }

    
}
/* public function update(Request $request, Persona $cliente){
    $cliente->update($request->all());
    return response()->json('actualizado');
}
 */
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return response()->json('eliminado');
    }
}
