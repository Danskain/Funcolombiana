@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="container">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5 ">
                    <h1 class="text-center mt-3 pb-3">Registro de Pacientes </h1>
                    <div class="modal-body">
            <form>
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Nombres" id="nombre" class="form-control form-control-alternative" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Apellidos" id="apellido" class="form-control form-control-alternative" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-4">
                      <select class="form-control" placeholder="tipo" id="tipoDocumento" type="text">
                                        <option value="">Tipo de documento</option>
                                        <option value="">CC</option>
                                        <option value="">CE</option>
                                        <option value="">PA</option>
                                        <option value="">TI</option>
                                    </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" class="form-control form-control-alternative" id="numeroDocumento" placeholder="Número de Documento">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" class="form-control form-control-alternative" id="telefono" placeholder="Teléfono">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" class="form-control form-control-alternative" id="celular" placeholder="Celular">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-alternative" id="direccion" placeholder="Dirección">
                    </div>
                  </div>
                </div>
                <div class="row">
                   <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control form-control-alternative" id="name" placeholder="Nombre de usuario" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-4">
                      <select class="form-control" placeholder="tipo" id="ciudad" name="ciudad" type="text">
                                        <option value="">Ciudad/Municipio</option>
                                            <option value="Arauca">Arauca</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Barranquilla">Barranquilla</option>
                                            <option value="Bogotá">Bogotá</option>
                                            <option value="Bucaramanga">Bucaramanga</option>
                                            <option value="Cali">Cali</option>
                                            <option value="Cartagena">Cartagena</option>
                                            <option value="Cúcuta">Cúcuta</option>
                                            <option value="Florencia">Florencia</option>
                                            <option value="Ibagué">Ibagué</option>
                                            <option value="Leticia">Leticia</option>
                                            <option value="Manizales">Manizales</option>
                                            <option value="Medellín">Medellín</option>
                                            <option value="Mitú">Mitú</option>
                                            <option value="Mocoa">Mocoa</option>
                                            <option value="Montería">Montería</option>
                                            <option value="Neiva">Neiva</option>
                                            <option value="Pasto">Pasto</option>
                                            <option value="Pereira">Pereira</option>
                                            <option value="Popayán">Popayán</option>
                                            <option value="Puerto Carreño">Puerto Carreño</option>
                                            <option value="Puerto Inírida">Puerto Inírida</option>
                                            <option value="Quibdó">Quibdó</option>
                                            <option value="Riohacha">Riohacha</option>
                                            <option value="San Andrés">San Andrés</option>
                                            <option value="San José del Guaviare">San José del Guaviare</option>
                                            <option value="Santa Marta">Santa Marta</option>
                                            <option value="Sincelejo">Sincelejo</option>
                                            <option value="Tunja">Tunja</option>
                                            <option value="Valledupar">Valledupar</option>
                                            <option value="Villavicencio">Villavicencio</option>
                                            <option value="Yopal">Yopal</option>
                                    </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-4">
                      <select class="form-control" placeholder="tipo" id="eps" name="eps" type="text">
                                        <option value="">EPS</option>
                                            <option value="Arauca">Salud Colmena E.P.S. S.A.</option>
                                            <option value="Armenia">Salud Total S.A. E.P.S.</option>
                                            <option value="Barranquilla">Cafesalud E.P.S. S.A.</option>
                                            <option value="Bogotá">E.P.S.  Sanitas S.A.</option>
                                            <option value="Florencia">Colseguros E.P.S.	</option>
                                            <option value="Ibagué">Comfenalco Valle E.P.S.	</option>
                                            <option value="Leticia">E.P.S.  Saludcoop	</option>
                                            <option value="Mitú">Coomeva E.P.S.	</option>
                                            <option value="Mocoa">E.P.S. Famisanar LTDA.  CAFAM-COLSUBSIDIO	</option>
                                    </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-4">
                      <select class="form-control" placeholder="tipo" id="ips" name="ips" type="text">
                                        <option value="">IPS de Tratamiento Oncológico</option>
                                            <option value="Arauca">Instituto del Corazón - Unidad de Negocios de la Fundación Cardiovascular de Colombia</option>
                                            <option value="Armenia">Hospital Pablo Tobón Uribe</option>
                                            <option value="Barranquilla">Hospital General de Medellín - "Luz Castro de Gutiérrez" - ESE</option>
                                            <option value="Bogotá">Hospital Pablo VI Bosa ESE</option>
                                            <option value="Bucaramanga">C.P.O. S.A. - Centro Policlínico del Olaya	</option>
                                    </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control form-control-alternative" id="email" placeholder="Correo" type="email">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control form-control-alternative" id="password" placeholder="Contraseña" type="password">
                      </div>
                    </div>
                  </div>
                  

                  
                </div>
              </form>
        </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-primary crear">Guardar</button>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){

            $('.crear').on('click',function(){
                let data = {
                   nombre : $('#nombre').val(), 
                   apellido : $('#apellido').val(),
                   tipoDocumento : $('#tipoDocumento').val(),  
                   numeroDocumento : $('#numeroDocumento').val(), 
                   tipoDocumento : $('#tipoDocumento').val(), 
                   telefono : $('#telefono').val(), 
                   celular : $('#celular').val(), 
                   direccion : $('#direccion').val(), 
                   name : $('#name').val(),
                   ciudad : $('#ciudad').val(),  
                   eps : $('#eps').val(), 
                   ips : $('#ips').val(),
                   email : $('#email').val(),
                   password : $('#password').val(),
                }

                console.log(data);

                /* if(data.codigo == '' || data.nombre == '' || data.apellido == '' || data.numeroDocumento == '' || data.tipoDocumento == '' || data.telefono == '' || data.celular == '' || data.direccion == ''|| data.correo == ''){
                    Swal.fire({
                            title: 'Error complete los campos',
                            icon: 'error',
                            customClass: 'sweet-alert',
                    })
                } */

                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'Post',
                    url: '{{ route("empresa.store") }}',
                    dataType: "json",
                    data: data,
                            
                    success: function(data){
                        if(data){
                        Swal.fire({
                            title: 'Creado',
                            text: 'Paciente registrado correctamente',
                            icon: 'success',
                            customClass: 'sweet-alert'
                        })
                        setTimeout(function(){window.location.replace("{{ route('logout') }}")}, 1500);
                        }
                    },
                    error: function (data){

                    }
                });
            })



        })
    </script>
@endsection
