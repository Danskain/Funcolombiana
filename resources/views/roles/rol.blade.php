@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-7">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                  <h6 class="h2 text-white d-inline-block mb-0">Roles</h6>
                  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                      <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                      <li class="breadcrumb-item"><a href="#">Roles</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Roles</li>
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
                        <h3 class="mb-0">Roles</h3>
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
                            <th scope="col">Código cliente</th>
                            <th scope="col">Nombre completo</th>
                            <th scope="col">N° Documento</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php
                         var_dump($roles);
                        ?> -->
                        @foreach ($roles as $rol)
                            <tr>
                                <th scope="row">{{ $rol->id }}</th>
                                <td>{{ $rol->nombre}}</td>
                                <td>{{ $rol->descripcion}}</td>
                               

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<!-- Modal Editar -->

@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            $('.crear').on('click',function(){
                let data = {
                   codigo : $('#codigo').val(), 
                   nombre : $('#nombre').val(), 
                   apellido : $('#apellido').val(), 
                   numeroDocumento : $('#numeroDocumento').val(), 
                   tipoDocumento : $('#tipoDocumento').val(), 
                   telefono : $('#telefono').val(), 
                   celular : $('#celular').val(), 
                   direccion : $('#direccion').val(), 
                   correo : $('#correo').val(), 
                   tipoCliente : $('#tipoCliente').val(), 
                }

                if(data.codigo == '' || data.nombre == '' || data.apellido == '' || data.numeroDocumento == '' || data.tipoDocumento == '' || data.telefono == '' || data.celular == '' || data.direccion == ''|| data.correo == ''){
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
                        if(data){
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
                            $('#nombre_editar').val(data.nombre);
                            $('#apellido_editar').val(data.apellido);
                            $('#numeroDocumento_editar').val(data.numeroDocumento);
                            $("#tipoDocumento_editar").val(data.tipoDocumento);
                            $("#telefono_editar").val(data.telefono);
                            $("#celular_editar").val(data.celular);
                            $("#direccion_editar").val(data.direccion);
                            $("#correo_editar").val(data.correo);
                            $("#tipoCliente_editar").val(data.tipoCliente);
                            $("#codigo_editar").val(data.codigo);
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
                        nombre:$('#nombre_editar').val(),
                        apellido:$('#apellido_editar').val(),
                        numeroDocumento:$('#numeroDocumento_editar').val(),
                        tipoDocumento:$('#tipoDocumento_editar').val(),
                        telefono:$('#telefono_editar').val(),
                        celular:$('#celular_editar').val(),
                        direccion:$('#direccion_editar').val(),
                        correo:$('#correo_editar').val(),
                        tipoCliente:$('#tipoCliente_editar').val(),
                        codigo:$('#codigo_editar').val(),
                    }

                if(data.name == '' || data.apellido == '' || data.numeroDocumento == '' || data.tipoDocumento == '' || data.telefono == '' || data.celular == '' || data.direccion == '' || data.correo == '' || data.tipoCliente == '' || data.codigo == ''){
                    Swal.fire({
                            title: 'Error complete los campos del formulario',
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
                    url: "{{url('cliente')}}/"+id,
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