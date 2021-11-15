@extends('dashboard')

@push('head')
<link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('main')
<div class="content-wrapper">
<section class="content">
    <div class="container-fluid pt-4">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Productos</h3>
          <a style="float: right" class="btn btn-success" href="/excel">Excel</a>
        </div>
        <!-- ./card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
              <tr>
                <th>SKU</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Marca</th>
                <th>Stock</th>
                <th>Foto</th>
              </tr>
            </thead>
            @foreach ($productos as $producto )
            <tbody>
              <tr data-widget="expandable-table" aria-expanded="false">
                <td>{{$producto->sku}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->categoria}}</td>
                <td>{{$producto->marca}}</td>      
                <td>{{$producto->stock}}</td>
                <td><img style="width: 20%;float: right;" src="{{$producto->foto}}" alt=""></td>
              </tr>
              <tr class="expandable-body">
                <td colspan="5">
                    <section class="content">

                        <!-- Default box -->
                        <div class="card card-solid">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-12 col-sm-6">
                                <div class="col-12">
                                  <img src="{{$producto->foto}}" class="product-image" alt="Product Image">
                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <h3 class="my-3">{{$producto->nombre}}</h3>
                                <p>{{$producto->descripcion}}</p>
                  
                                <hr>
                                <h4>Caracteristicas</h4>
                              <!--  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-default text-center active">
                                    <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
                                    Green
                                    <br>
                                    <i class="fas fa-circle fa-2x text-green"></i>
                                  </label>
                                  <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_a2" autocomplete="off">
                                    Blue
                                    <br>
                                    <i class="fas fa-circle fa-2x text-blue"></i>
                                  </label>
                                  <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
                                    Purple
                                    <br>
                                    <i class="fas fa-circle fa-2x text-purple"></i>
                                  </label>
                                  <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
                                    Red
                                    <br>
                                    <i class="fas fa-circle fa-2x text-red"></i>
                                  </label>
                                  <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_a5" autocomplete="off">
                                    Orange
                                    <br>
                                    <i class="fas fa-circle fa-2x text-orange"></i>
                                  </label>
                                </div>-->
                  
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                                    <span class="text-xl">{{$producto->alto}}cm</span>
                                    <br>
                                    <p>Alto</p>
                                  </label>
                                  <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                                    <span class="text-xl">{{$producto->ancho}}cm</span>
                                    <br>
                                    <p>Ancho</p>
                                  </label>
                                  <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                                    <span class="text-xl">{{$producto->peso}}kg</span>
                                    <br>
                                    <p>Peso</p>
                                  </label>
                                  <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                                    <span class="text-xl">{{$producto->profundidad}}cm</span>
                                    <br>
                                    <p>Prof</p>
                                  </label>
                                </div>
                  
                                <div class="bg-gray py-2 px-3 mt-4">
                                  <h2 class="mb-0">
                                    ${{$producto->precio}}
                                  </h2>
                                  <h4 class="mt-0">
                                    <small>Precio Promocional: ${{$producto->precio_promocional}} </small>
                                  </h4>
                                </div>
                              </div>
                            </div>
                            <div class="row mt-4">
                              <nav class="w-100">
                                <div class="nav nav-tabs" id="product-tab" role="tablist">
                                  <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Detalles</a>
                                  <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Variantes</a>
                                </div>
                              </nav>
                              <div class="tab-content p-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 
                                    <p class="text-muted text-sm"><b>Marca: </b>{{$producto->marca}}</p>
                                    <p class="text-muted text-sm"><b>Indentificador: </b>{{$producto->identificador}}</p>
                                    <p class="text-muted text-sm"><b>Rubro: </b>{{$producto->marca}}</p>
                                    <p class="text-muted text-sm"><b>Subrubro: </b>{{$producto->marca}}</p>
                                    <p class="text-muted text-sm"><b>Categoria: </b>{{$producto->categoria}}</p>
                                    <p class="text-muted text-sm"><b>Codigo de barra: </b>{{$producto->codigo_barra}}</p>
                                    <p class="text-muted text-sm"><b>Envio: </b>{{$producto->envio}}</p>
                      </div>
                                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                                    <p class="text-muted text-sm"><b></b>{!!$producto->variante!!}</p>
                                    <p class="text-muted text-sm"><b>Sexo: </b>{{$producto->sexo}}</p>
                                    <p class="text-muted text-sm"><b>Rango Edad: </b>{{$producto->rango_edad}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                  
                      </section>
                </td>
            </tr>
            </tbody>
            @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
</section>
</div>
 
@endsection
@push('bottom')
    

<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

@endpush