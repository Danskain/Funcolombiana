@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-7">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                  <h6 class="h2 text-white d-inline-block mb-0">Usuarios</h6>
                  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                      <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                      <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                    </ol>
                  </nav>
                </div>
              </div>
        </div>
    </div>
</div>
<div class="container-fluid">
<div class="row mt--6">
    <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Usuarios</h3>
                    </div>
                    <div class="col text-right">
                        <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo Usuario</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Código paciente</th>
                            <th scope="col">Nombre completo</th>
                            <th scope="col">N° Documento</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Nombre usuario</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // var_dump($usuarios[2]["name"]);
                        ?>
                        @foreach ($usuarios as $usuarios)
                            <tr>
                                <th scope="row">{{ $usuarios->id }}</th>
                                <td>{{ $usuarios->pernombre }} {{ $usuarios->apellido }}</td>
                                <td>{{ $usuarios->numeroDocumento }}</td>
                                <td>{{ $usuarios->telefono }}</>
                                <td>{{ $usuarios->celular }}</td>
                                <td>{{ $usuarios->direccion }}</td>
                                <td>{{ $usuarios->name }}</td>
                                <td>{{ $usuarios->email }}</td>
                                <td>{{ $usuarios->nombre }}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-id="{{ $usuarios->id }}" data-target="#editModal" class="btn btn-warning editar">Editar</a>
                                    <a href="#" data-id="{{ $usuarios->id }}" class="btn btn-danger eliminar">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
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
                            <option value="">Tipo de Documento</option>
                            @foreach ($documentos as $documento)
                                <option value="{{ $documento->tipo }}">{{ $documento->tipo }}</option>
                            @endforeach
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
                        <select class="form-control" placeholder="tipo" id="rol" type="text">
                            <option value="">Rol</option>
                            @foreach ($roles as $rol)
                                <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                            @endforeach
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
                  

                  <!-- <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control form-control-alternative" id="numeroDocumento" placeholder="Número documento *" type="number">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-4">
                        <select class="form-control" placeholder="tipo" id="tipoDocumento" type="text">
                            <option value="">Tipo documento</option>
                            @foreach ($documentos as $documento)
                                <option value="{{ $documento->id }}">{{ $documento->tipo }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" placeholder="Télefono" id="telefono" class="form-control form-control-alternative" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" placeholder="Celular" id="celular" class="form-control form-control-alternative" />
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Dirección *" id="direccion" class="form-control form-control-alternative" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="email" placeholder="Correo *" id="correo" class="form-control form-control-alternative" />
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <select type="text" id="tipoCliente" class="form-control form-control-alternative" />
                            <option value="">Tipo Cliente</option>
                            <option value="1">Distribuidor </option>
                            <option value="2">Cliente Final</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <input type="number" placeholder="Código" id="codigo" class="form-control form-control-alternative" />
                        </div>
                      </div> -->
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary crear">Guardar</button>
        </div>
      </div>
    </div>
</div>
<!-- Modal Editar -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-alternative" id="nombre_editar" placeholder="Nombre *">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Apellido *" id="apellido_editar" class="form-control form-control-alternative" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-4">
                        <select class="form-control" placeholder="tipo" id="tipoDocumento_editar" type="text">
                            <option value="">Tipo de Documento</option>
                            @foreach ($documentos as $documento)
                                <option value="{{ $documento->tipo }}">{{ $documento->tipo }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-4">
                        <input class="form-control form-control-alternative" id="numeroDocumento_editar" placeholder="Número documento *" type="number">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" placeholder="Télefono" id="telefono_editar" class="form-control form-control-alternative" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" placeholder="Celular" id="celular_editar" class="form-control form-control-alternative" />
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Dirección *" id="direccion_editar" class="form-control form-control-alternative" />
                      </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Nonmbre de usuario *" id="name_editar" class="form-control form-control-alternative" />
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-4">
                        <select class="form-control" placeholder="tipo" id="rol_editar" type="text">
                            <option value="">Rol</option>
                            @foreach ($roles as $rol)
                                <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="email" placeholder="Contraseña *" id="email_editar" class="form-control form-control-alternative" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="password" placeholder="Contraseña *" id="password_editar" class="form-control form-control-alternative" />
                      </div>
                    </div>
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary actualizar">Actualizar</button>
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
                   telefono : $('#telefono').val(), 
                   celular : $('#celular').val(), 
                   direccion : $('#direccion').val(),
                   name: $('#name').val(),
                   email: $('#email').val(),
                   password : $('#password').val(),
                   idrol : $('#rol').val(),

                }

                

                if(data.nombre == '' || data.apellido == '' || data.tipoDocumento == '' || data.numeroDocumento == '' || data.tipoDocumento == '' || data.telefono == '' || data.celular == '' || data.direccion == ''|| data.name == ''|| data.email == ''|| data.password == ''|| data.idrol == ''){
                    Swal.fire({
                            title: 'Error complete los campos',
                            icon: 'error',
                            customClass: 'sweet-alert',
                    })
                }

                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'Post',
                    url: '{{ route("cliente.store") }}',
                    dataType: "json",
                    data: data,
                            
                    success: function(data){
                        if(data == 'creado'){
                          console.log(data);
                        Swal.fire({
                            title: 'Creado',
                            text: 'Cliente registrado correctamente',
                            icon: 'success',
                            customClass: 'sweet-alert'
                        })
                        setTimeout(function(){window.location.replace("{{ route('cliente.index') }}")}, 1500);
                        }
                    },
                    error: function (data){

                    }
                });
            })

            $('.eliminar').on('click',function(){

                    Swal.fire({
                    title: '¿Esta seguro de eliminar este cliente?',
                    text: "¡No podrá revertir los cambios!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí',
                    cancelButtonText: 'No',
                    customClass: 'sweet-alert'
                    }).then((result) => {
                        if (result.value) {
                            var id = $(this).attr('data-id')
                            console.log(id);
                            var data = {
                                id:id,
                            }
                    console.log(data);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{url('cliente/destroy')}}/"+id,
                        type: "delete",
                        dataType: "json",
                        data:data,
                                
                        success: function(data){

                            if(data == 'eliminado'){
                                Swal.fire({
                                    title: 'Eliminado',
                                    text: 'Eliminado correctamente',
                                    icon: 'success',
                                    customClass: 'sweet-alert'
                                })
                                setTimeout("window.location.reload(true)", 1500); 
                            }
                        },
                        error: function (data){

                        }
                    });
                }
                })
            });

            $('.editar').on('click',function(){
                var id = $(this).attr('data-id');
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{url('cliente/')}}/"+id,
                    type: "get",
                    dataType: "json",    
                    success: function(data){
                        
                        if(data){
                          //console.log(data);
                            $('#nombre_editar').val(data[0]['nombre']);
                            $('#apellido_editar').val(data[0]['apellido']);
                            $('#tipoDocumento_editar').val(data[0]['tipoDocumento']);
                            $('#numeroDocumento_editar').val(data[0]['numeroDocumento']);
                            $("#telefono_editar").val(data[0]['telefono']);
                            $("#celular_editar").val(data[0]['celular']);
                            $("#direccion_editar").val(data[0]['direccion']);
                            $("#name_editar").val(data[1]['name']);
                            $("#rol_editar").val(data[1]['rol']);
                            $("#email_editar").val(data[1]['email']);
                            $("#password_editar").val(data[1]['password']);
                            $('.actualizar').val(id);
                        }
                    },
                    error: function (data){

                    }
                });
            });

            $('.actualizar').on('click',function(){
                var id = $(this).val();

                var data = {
                  nombre : $('#nombre_editar').val(), 
                   apellido : $('#apellido_editar').val(),
                   tipoDocumento : $('#tipoDocumento_editar').val(), 
                   numeroDocumento : $('#numeroDocumento_editar').val(), 
                   telefono : $('#telefono_editar').val(), 
                   celular : $('#celular_editar').val(), 
                   direccion : $('#direccion_editar').val(),
                   name: $('#name_editar').val(),
                   email: $('#email_editar').val(),
                   password : $('#password_editar').val(),
                   idrol : $('#rol_editar').val(),
                


                    }

                    console.log(id);
                    console.log(data);

                /*  if(data.nombre == '' || data.apellido == '' || data.tipoDocumento == '' || data.numeroDocumento == '' || data.tipoDocumento == '' || data.telefono == '' || data.celular == '' || data.direccion == ''|| data.name == ''|| data.email == ''|| data.password == ''|| data.idrol == ''){
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
                    url: "{{url('cliente/')}}/"+id,
                    type: "put",
                    dataType: "json",
                    data : data,
                            
                    success: function(data){
                      
                        if(data == 'actualizado'){
                            Swal.fire({
                                title: 'Actualizado',
                                text: 'Cliente actualizado correctamente',
                                icon: 'success',
                                customClass: 'sweet-alert'
                            })
                            setTimeout(function(){window.location.replace("{{ route('cliente.index') }}")}, 1500); 
                        }
                    },
                    error: function (data){

                    }
                });
            });
        })
        
    </script>
@endsection