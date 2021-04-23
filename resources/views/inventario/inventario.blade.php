@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-7">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                  <h6 class="h2 text-white d-inline-block mb-0">Inventario</h6>
                  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                      <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                      <li class="breadcrumb-item"><a href="{{ route('producto.index') }}">Productos</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Inventario</li>
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
                        <h3 class="mb-0">Inventario</h3>
                    </div>
                    <div class="col text-right">
                        <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo Inventario</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Producto</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Fecha de entrega</th>
                            <th scope="col">Unidades por caja</th>
                            <th scope="col">Cantidad de cajas</th>
                            <th scope="col">Total unidades recibidas</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">PC</th>
                            <td>Lenovo</td>
                            <td>17/11/2020</td>
                            <td>15</td>
                            <td>6</td>
                            <td>90</td>
                            <td>
                                <a href="#" data-toggle="modal" data-id="" data-target="#editModal" class="btn btn-warning editar">Editar</a>
                                <a href="#" class="btn btn-danger eliminar" data-id="">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Celular</th>
                            <td>Huawei</td>
                            <td>20/11/2020</td>
                            <td>10</td>
                            <td>5</td>
                            <td>50</td>
                            <td>
                                <a href="#" data-toggle="modal" data-id="" data-target="#editModal" class="btn btn-warning editar">Editar</a>
                                <a href="#" class="btn btn-danger eliminar" data-id="">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Audifonos</th>
                            <td>Logitech</td>
                            <td>17/11/2020</td>
                            <td>10</td>
                            <td>2</td>
                            <td>20</td>
                            <td>
                                <a href="#" data-toggle="modal" data-id="" data-target="#editModal" class="btn btn-warning editar">Editar</a>
                                <a href="#" class="btn btn-danger eliminar" data-id="">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="mb-4">
                    <form>
                        <label for="">Observaciones</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escriba aquí..."></textarea>
                      </form>
                </div>
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Estado</h3>
                    </div>
                    <div class="col text-right">
                        <label class="custom-toggle">
                            <input type="checkbox" checked>
                            <span class="custom-toggle-slider rounded-circle"></span>
                          </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Inventario</h5>
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
                          <input type="text" placeholder="Producto *" id="producto" class="form-control form-control-alternative" />
                        </div>
                      </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Marca *" id="marca" class="form-control form-control-alternative" />
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-alternative" id="unidades" placeholder="Unidades por caja *">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" placeholder="Cantidad de cajas *" id="cantidad" class="form-control form-control-alternative" />
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="number" class="form-control form-control-alternative" id="unidades_recibidas" placeholder="Unidades Recibidas *">
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
          <h5 class="modal-title" id="exampleModalLabel">Editar Inventario</h5>
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
                          <input type="text" placeholder="Producto *" id="producto" class="form-control form-control-alternative" />
                        </div>
                      </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Marca *" id="marca" class="form-control form-control-alternative" />
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-alternative" id="unidades" placeholder="Unidades por caja *">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" placeholder="Cantidad de cajas *" id="cantidad" class="form-control form-control-alternative" />
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="number" class="form-control form-control-alternative" id="unidades_recibidas" placeholder="Unidades Recibidas *">
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
{{-- @section('scripts')
    <script>
        $(document).ready(function(){
            $('.crear').on('click',function(){

                var data = {   
                        razonSocial : $('#razonSocial').val(),
                        telefono : $('#telefono').val(),
                        ciudad : $('#ciudad').val()
                    }

                if(data.razonSocial == '' || data.telefono == '' || data.ciudad == '' ){
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
                    url: "{{route('empresa.store')}}",
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
                            setTimeout(function(){window.location.replace("{{ route('empresa.index') }}")}, 1500); 
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
                    url: "{{url('empresa/')}}/"+id,
                    type: "get",
                    dataType: "json",
                            
                    success: function(data){
                        if(data){
                            $('#razonSocial_editar').val(data.razonSocial);
                            $('#telefono_editar').val(data.telefono);
                            $('#ciudad_editar').val(data.ciudad);
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
                        razonSocial:$('#razonSocial_editar').val(),
                        telefono:$('#telefono_editar').val(),
                        ciudad:$('#ciudad_editar').val()
                    }

                if(data.razonSocial == '' || data.telefono == '' || data.ciudad == ''){
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
                    url: "{{url('empresa')}}/"+id,
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
                            setTimeout(function(){window.location.replace("{{ route('empresa.index') }}")}, 1500); 
                        }
                    },
                    error: function (data){

                    }
                });
            });

            $('.eliminar').on('click',function(){

                Swal.fire({
                title: '¿Esta seguro de eliminar esta Empresa?',
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
                            url: "{{url('empresa/destroy')}}/"+id,
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

        })
    </script>
@endsection --}}