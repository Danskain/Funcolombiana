@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-7">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                  <h6 class="h2 text-white d-inline-block mb-0">Tipos de Solicitudes</h6>
                  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                      <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                      <li class="breadcrumb-item"><a href="#">Tipos de Solicitudes</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Tipos de Solicitudes</li>
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
                        <h3 class="mb-0">Tipos de Solicitudes</h3>
                    </div>
                    <div class="col text-right">
                        <a href="#!" class="btn btn-sm btn-primary " data-toggle="modal" data-target="#exampleModal">Nuevo Tipo de Solicitud</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Tipo</th>
                            <th scope="col">Metodo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pagos as $pago)
                            <tr>
                                <th scope="row">{{ $pago->tipo }}</th>
                                <td>{{ $pago->metodo }}</td>
                                <td>
                                    <a href="#" class="btn btn-warning editar" data-id="{{ $pago->id }}"  data-toggle="modal" data-target="#editModal">Editar</a>
                                    <a href="#" class="btn btn-danger eliminar" data-id="{{ $pago->id }}">Eliminar</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Crear forma de pago</h5>
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
                      <select type="text" class="form-control form-control-alternative" id="tipo" placeholder="Forma de Pago *">
                          <option value="">Seleccione un opcion</option>
                          <option value="virtual">Virtual</option>
                          <option value="fisico">Fisico</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="string" placeholder="Metodo *" id="metodo" class="form-control form-control-alternative" />
                    </div>
                  </div>
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
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar forma de pago</h5>
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
                        <select type="text" class="form-control form-control-alternative" id="tipo_editar" placeholder="Forma de Pago *">
                            <option value="">Seleccione un opcion</option>
                            <option value="Virtual">Virtual</option>
                            <option value="Fisico">Fisico</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="string" placeholder="Metodo *" id="metodo_editar" class="form-control form-control-alternative" />
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
            $('.crear').on('click',function(){

                var data = {   
                        tipo:$('#tipo').val(),
                        metodo:$('#metodo').val()
                    }

                if(data.tipo == '' || data.metodo == ''){
                    Swal.fire({
                            title: 'Error complete los campos',
                            icon: 'error',
                            customClass: 'sweet-alert',
                    })
                }


                console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{route('pago.store')}}",
                    type: "post",
                    dataType: "json",
                    data : data,
                            
                    success: function(data){
                        if(data == 'creado'){
                            Swal.fire({
                                title: 'Creado',
                                text: 'Cliente registrado correctamente',
                                icon: 'success',
                                customClass: 'sweet-alert'
                            })
                            setTimeout(function(){window.location.replace("{{ route('pago.index') }}")}, 1500); 
                        }
                    },
                    error: function (data){

                    }
                });
            });

            $('.editar').on('click',function(){
                var id = $(this).attr('data-id');
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "pago/"+id,
                    type: "get",
                    dataType: "json",
                            
                    success: function(data){
                        if(data){
                            $('#tipo_editar').val(data.tipo);
                            $('#metodo_editar').val(data.metodo);
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
                        tipo:$('#tipo_editar').val(),
                        metodo:$('#metodo_editar').val()
                    }

                if(data.tipo == '' || data.metodo == ''){
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
                    url: "pago/"+id,
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
                            setTimeout(function(){window.location.replace("{{ route('pago.index') }}")}, 1500); 
                        }
                    },
                    error: function (data){

                    }
                });
            });

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
                            url: "pago/destroy/"+id,
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
    </script>
@endsection
