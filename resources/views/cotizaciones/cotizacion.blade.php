@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-7">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                  <h6 class="h2 text-white d-inline-block mb-0">Trazabilidad de Solicitudes</h6>
                  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                      <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                      <li class="breadcrumb-item"><a href="#">Trazabilidad de Solicitudes</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Trazabilidad de Solicitudes</li>
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
                            <h3 class="mb-0">Trazabilidad de Solicitudes</h3>
                        </div>
                        <div class="col text-right">
                            <a href="#!" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-primary">Nueva Trazabilidad</a>
                            <a href="#!" data-toggle="modal" data-target="#editModal" class="btn btn-sm btn-warning">Editar Trazabilidad</a>
                        </div>
                    </div>
                    <div class="card card-body printableArea m-3">
                        <h2><b>Trazabilidad de Solicitudes</b> <span class="float-right">#000001</span></h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <address>
                                        <h3> &nbsp;<b class="text-danger">Ana María Garzón</b></h3>
                                        <p class="text-muted m-l-5">Carrera 5 # 26 sur,
                                            <br/> Colombia,
                                            <br/> Bogota,
                                            <br/> Localidad - 364002</p>
                                    </address>
                                </div>
                                <div class="pull-right text-right">
                                    <address>
                                        <p class="m-t-30"><b>Fecha Cotización :</b> <i class="fa fa-calendar"></i> 13 Nov 2020</p>
                                        <p><b>Fecha de vencimiento :</b> <i class="fa fa-calendar"></i> 25 Ene 2021</p>
                                    </address>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive m-t-40" style="clear: both;">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Descripcion</th>
                                                <th class="text-right">Cantidad</th>
                                                <th class="text-right">Costo Unida</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>PC LG</td>
                                                <td class="text-right">2 </td>
                                                <td class="text-right"> $24.000 </td>
                                                <td class="text-right"> $48.000 </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Aire Acondicionado</td>
                                                <td class="text-right"> 3 </td>
                                                <td class="text-right"> $500.000 </td>
                                                <td class="text-right"> $1'500.000 </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Memoria USB</td>
                                                <td class="text-right"> 20 </td>
                                                <td class="text-right"> $600 </td>
                                                <td class="text-right"> $12.000 </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td>Audifonos</td>
                                                <td class="text-right"> 60 </td>
                                                <td class="text-right">$5.000 </td>
                                                <td class="text-right"> $300.000 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="pull-right m-t-30 text-right">
                                    <p>Sub - Total cantidad: $2'003,848</p>
                                    <p>iva (19%) : $13.800 </p>
                                    <hr>
                                    <h3><b>Total :</b> $2'013,986</h3>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="text-right">
                                    <a href="{{ route('facturaciones.index') }}" class="btn btn-danger text-white" type="submit"> Proceder a pagar </a>
                                    <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Imprimir</span> </button>
                                </div>
                            </div>
                        </div>
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
          <h5 class="modal-title" id="exampleModalLabel">Crear Cotización</h5>
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
                          <input type="number" placeholder="Numero Factura *" id="producto" class="form-control form-control-alternative" />
                        </div>
                      </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="Nombre Cliente *" id="marca" class="form-control form-control-alternative" />
                    </div>
                    </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" placeholder="Dirección *" id="cantidad" class="form-control form-control-alternative" />
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Departamento *" id="marca" class="form-control form-control-alternative" />
                        </div>
                        </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="Ciudad *" id="cantidad" class="form-control form-control-alternative" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <input type="date" placeholder="Fecha Facturación *" id="cantidad" class="form-control form-control-alternative" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="date" placeholder="Fecha Vencimiento *" id="cantidad" class="form-control form-control-alternative" />
                            </div>
                          </div>
                    </div>
                    <div class="row">
                        <div class="col">
                <table class="table table-responsive align-items-center table-flush">
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
                                <a href="#" class="btn btn-danger eliminar" data-id="">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
<!-- Modal Editar-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Cotización</h5>
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
                          <input type="number" placeholder="Numero Factura *" id="producto" class="form-control form-control-alternative" />
                        </div>
                      </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" placeholder="Nombre Cliente *" id="marca" class="form-control form-control-alternative" />
                    </div>
                    </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" placeholder="Dirección *" id="cantidad" class="form-control form-control-alternative" />
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Departamento *" id="marca" class="form-control form-control-alternative" />
                        </div>
                        </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="Ciudad *" id="cantidad" class="form-control form-control-alternative" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <input type="date" placeholder="Fecha Facturación *" id="cantidad" class="form-control form-control-alternative" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="date" placeholder="Fecha Vencimiento *" id="cantidad" class="form-control form-control-alternative" />
                            </div>
                          </div>
                    </div>
                    <div class="row">
                        <div class="col">
                <table class="table table-responsive align-items-center table-flush">
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
                                <a href="#" class="btn btn-danger eliminar" data-id="">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                        </div>
                    </div>

              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary crear">Actualizar</button>
        </div>
      </div>
    </div>
</div>
@endsection