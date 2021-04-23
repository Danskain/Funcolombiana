@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-7">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                  <h6 class="h2 text-white d-inline-block mb-0">Solicitudes</h6>
                  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                      <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                      <li class="breadcrumb-item"><a href="#">Solicitudes</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Solicitudes</li>
                    </ol>
                  </nav>
                </div>
              </div>
            <!-- Card stats -->
            <!-- <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-6">
                    <a href="{{ route('inventario.index') }}">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Inventario</h5>
                                    <span class="h2 font-weight-bold mb-0">350</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <a href="#">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Ventas</h5>
                                    <span class="h2 font-weight-bold mb-0">924</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                                <span class="text-nowrap">Since yesterday</span>
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
            </div> -->
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
                        <h3 class="mb-0">Solicitudes</h3>
                    </div>
                    <div class="col text-right">
                        <a href="#!" class="btn btn-sm btn-primary" data-target="#exampleModal" data-toggle="modal">Nueva Solicitud</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Código de solicitud</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">fecha creada</th>
                            
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($solicitudes as $solicitud)
                            <tr>
                                <th scope="row">{{ $solicitud->id }}</th>
                                <td>{{ $solicitud->titulo }}</td>
                                <td>{{ $solicitud->descripcion }}</td>
                                <td>{{ $solicitud->created_at }}</td>
                
                                <td>
                                    <a href="#" data-toggle="modal" data-id="{{ $solicitud->id }}" data-target="#editModal" class="btn btn-warning editar">Editar</a>
                                    <a href="#" data-id="{{ $solicitud->id }}" class="btn btn-danger eliminar">Eliminar</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Nueva Solicitud</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="upload.php" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <input type="number" placeholder="Número de solicitud *" id="producto" class="form-control form-control-alternative" />
                        </div>
                      </div>
                </div>
                <div>
                      <span>Soportes:</span>
                      <input type="file" name="uploadedFile" />
                    </div>
                <!-- <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="Nombre*" id="marca" class="form-control form-control-alternative" />
                    </div>
                    </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" placeholder="Tipo *" id="cantidad" class="form-control form-control-alternative" />
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Marca *" id="marca" class="form-control form-control-alternative" />
                        </div>
                        </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select type="text" placeholder="Estado *" id="cantidad" class="form-control form-control-alternative" />
                            <option value="">Estado</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <input type="number" placeholder="Cantidad en Stock *" id="cantidad" class="form-control form-control-alternative" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="number" placeholder="Valor Compra *" id="cantidad" class="form-control form-control-alternative" />
                            </div>
                          </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <input type="number" placeholder="Valor Venta *" id="cantidad" class="form-control form-control-alternative" />
                            </div>
                          </div>
                    </div> -->
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
          <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
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
                          <input type="number" placeholder="Codigo Producto *" id="producto" class="form-control form-control-alternative" />
                        </div>
                      </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="Nombre*" id="marca" class="form-control form-control-alternative" />
                    </div>
                    </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" placeholder="Tipo *" id="cantidad" class="form-control form-control-alternative" />
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Marca *" id="marca" class="form-control form-control-alternative" />
                        </div>
                        </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select type="text" placeholder="Estado *" id="cantidad" class="form-control form-control-alternative" />
                            <option value="">Estado</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <input type="number" placeholder="Cantidad en Stock *" id="cantidad" class="form-control form-control-alternative" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="number" placeholder="Valor Compra *" id="cantidad" class="form-control form-control-alternative" />
                            </div>
                          </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <input type="number" placeholder="Valor Venta *" id="cantidad" class="form-control form-control-alternative" />
                            </div>
                          </div>
                    </div>

              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Actualizar</button>
        </div>
      </div>
    </div>
</div>
@endsection