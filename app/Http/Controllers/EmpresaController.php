<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Cliente;
use App\Models\Ciudades;
use App\Models\Eps;
use App\Models\Ips;
use App\Models\Persona;
use App\Models\TipoCliente;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('empresas.empresa',['empresas'=>Empresa::all(),'clientes' => Cliente::all(),'documentos'=>TipoDocumento::all()]);

        $cliente =  Cliente::join('personas','clientes.idpersona', '=', 'personas.id')
        ->join('ciudades', 'clientes.ciudad', '=', 'ciudades.id')
        //->join('personas', 'users.idpersona', '=', 'personas.id')
        ->join('eps', 'clientes.eps', '=', 'eps.id')
        ->join('ips', 'clientes.ips', '=', 'ips.id')
        ->select('personas.id','personas.nombre','personas.apellido','personas.numeroDocumento','personas.telefono','personas.celular','personas.direccion','ciudades.ciudad','eps.eps','ips.ips')
        ->get();

        $cliente2 = User::all();
        $tipo_documento = TipoDocumento::all();

        $ciudad = Ciudades::all();
        $eps = Eps::all();
        $ips = Ips::all();
        
        $idper = [];
        $indice = [];

        for ($i=0; $i < count($cliente); $i++){ 
            
             $idper[$i]['id'] = $cliente[$i]['id'];
             $idper[$i]['nombre'] = $cliente[$i]['nombre'];
             $idper[$i]['apellido'] = $cliente[$i]['apellido'];
             $idper[$i]['numeroDocumento'] = $cliente[$i]['numeroDocumento'];
             $idper[$i]['telefono'] = $cliente[$i]['telefono'];
             $idper[$i]['celular'] = $cliente[$i]['celular'];
             $idper[$i]['direccion'] = $cliente[$i]['direccion'];
             $idper[$i]['ciudad'] = $cliente[$i]['ciudad'];
             $idper[$i]['eps'] = $cliente[$i]['eps'];
             $idper[$i]['ips'] = $cliente[$i]['ips'];

        }
        $contar = count($idper); 

        $resultado = [];

        for ($i=0; $i < count($idper); $i++){ 

            for ($y=0; $y < count($cliente2); $y++) { 

                if ($idper[$i]['id'] == $cliente2[$y]['idpersona']) {
                
                    $idper[$i]['name'] = $cliente2[$y]['name'];
                    $idper[$i]['email'] = $cliente2[$y]['email'];   
                }

            }

            
        }

        return view('empresas.empresa',['pacientes' => $idper, 'documentos' => $tipo_documento, 'ciudades' => $ciudad, 'eps' => $eps, 'ips' => $ips]);
        //return ['clientes' =>  $idper];

    }
    public function registro(){

        $tipo_documento = TipoDocumento::all();

        $ciudad = Ciudades::all();
        $eps = Eps::all();
        $ips = Ips::all();

        return view('views.auth.register',['documentos' => $tipo_documento, 'ciudades' => $ciudad, 'eps' => $eps, 'ips' => $ips]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            $user->idrol = 3;
            $user->remember_token = $request->remember_token;           
            $user->save();

            $paciente = new Cliente();
            $paciente->idpersona = $persona->id;
            $paciente->ciudad = $request->ciudad;
            $paciente->eps = $request->eps;
            $paciente->ips = $request->ips;
            $paciente->save();

            DB::commit();

            return response()->json('creado');
        }catch(Exception $e){
            DB::rollBack();
        }
        /* $datos = request()->except('_token');
        Empresa::insert($datos);
        return response()->json('creado'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return response()->json($empresa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        $empresa->update($request->all());
        return response()->json('actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return response()->json('eliminado');
    }
}
