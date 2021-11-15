@extends('dashboard')

@push('head')

@endpush

@section('main')
<div class="content-wrapper pt-4" >
    <div class="container">
      <form  action="{{ route('store_producto')}}">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Producto</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->           
                      <div class="card-body">
                        <div class="form-group">
                          <label for="nombre">Nombre</label>
                          <input type="text" class="form-control"  name="nombre" id="nombre" placeholder="Nombre Producto">
                        </div>
                        <div class="form-group">
                          <label for="nombre">Identificador</label>
                          <input type="text" class="form-control" id="identificador" name="identificador" placeholder="Identificador">
                        </div>
                        <div class="form-group">
                          <label for="nombre">Categoria</label>
                          <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria">
                        </div>
                        <div class="form-group">
                          <label for="nombre">Marca</label>
                          <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca">
                        </div>
                        <div class="form-group">
                          <label>Descripción</label>
                          <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripción ..."></textarea>
                        </div>
                        <div class="form-group">
                          <label for="nombre">Stock</label>
                          <input type="number" class="form-control" id="stock" name="stock" >
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Foto</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" name="foto" value="img/prod-4.jpg" class="custom-file-input" id="foto">
                              <label class="custom-file-label" for="foto">Seleccionar foto</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
      

                  </div>
                  <!-- /.card -->
      
                  <!-- general form elements -->
                  <div class="card card-secondary">
                    <div class="card-header">
                      <h3 class="card-title">Rubro</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="form-group">
                        <label for="rubro">Seleccionar Rubro</label>
                        <select name="rubro" class="custom-select rounded-0" id="rubro">
                          @foreach ($rubros as $rubro)
                          <option value="{{$rubro->id}}">{{$rubro->nombre}}</option>
                          @endforeach
                         
                        </select>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                   <!-- general form elements -->
                   <div class="card card-secondary">
                    <div class="card-header">
                      <h3 class="card-title">Sub Rubro</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="form-group">
                        <label for="subrubro">Seleccionar Sub Rubro</label>
                        <select name="subrubro" class="custom-select rounded-0" id="subrubro">
                          <!--@foreach ($subrubros as $subrubro)
                          <option>{{$subrubro->nombre}}</option>
                          @endforeach-->
                          <option value="1">hola</option>
                        </select>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">
                  <!-- Form Element sizes -->
                  
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Caracteristicas</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <input type="text" class="form-control" name="peso" id="peso" placeholder="Peso (KG)">
                        </div>
                        <div class="col-6">
                          <input type="text" class="form-control" name="alto" id="alto" placeholder="Alto (CM)">
                        </div>
                        <div class="col-6 pt-3">
                          <input type="text" class="form-control" name="profundidad" id="profundidad" placeholder="Profundidad (CM)">
                        </div>
                        <div class="col-6 pt-3">
                          <input type="text" class="form-control" name="ancho" id="ancho" placeholder="Ancho (CM)">
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <div class="card card-success">
                 
                    <section class="content">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card  card-info">
                            <div class="card-header">
                              <h3 class="card-title card-success">
                                Variantes
                              </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <textarea name="variante" id="summernote">
                                Variantes
                              </textarea>
                            </div>
                           
                          </div>
                        </div>
                        <!-- /.col-->
                      </div>
                      <!-- ./row -->
                  
                      <!-- ./row -->
                    </section>
                    <!-- /.card-body -->
       
                  <!-- /.card -->
                  </div>
      
                  <!-- /.card -->
      
                  <!-- general form elements disabled -->
                  <div class="card card-warning">
                    <div class="card-header">
                      <h3 class="card-title">Precio</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Precio</label>
                              <input type="number" name="precio" id="precio" class="form-control" placeholder="$">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Precio Promocional</label>
                              <input type="number" name="precio_promocional" id="precio_promocional" class="form-control" placeholder="$">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <!-- textarea -->
                            <div class="form-group">
                              <label>Codigo de barra</label>
                              <textarea class="form-control" name="codigo_barra" id="codigo_barra" rows="3" placeholder="Codigo barra"></textarea>
                            </div>
                          </div>
                        </div>
           
                        
      
                      
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                  <!-- general form elements disabled -->
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Persona</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- checkbox -->
                            <div class="form-group">
                              <label for="">Sexo</label>
                              <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio1" name="sexo" value="femenino">
                                <label for="customRadio1" class="custom-control-label">Femenino</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio2" name="sexo" value="masculino">
                                <label for="customRadio2" class="custom-control-label">Masculino</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio3" name="sexo" value="unisex">
                                <label for="customRadio3" class="custom-control-label">Unisex</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <!-- radio -->
                            <label for="">Rango Edad</label>
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="customRadio4" name="rango_edad" value="Adulto">
                              <label for="customRadio4" class="custom-control-label">Adulto</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="customRadio5" name="rango_edad" value="joven">
                              <label for="customRadio5" class="custom-control-label">Joven</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="customRadio6" name="rango_edad" value="nino">
                              <label for="customRadio6" class="custom-control-label">Niño</label>
                            </div>
                          </div>
                        </div>
    
          
               
                      
                    
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Envio</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- checkbox -->
                            <div class="form-group">
                              <label for="">Envio</label>
                              <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio7" name="envio" value="si">
                                <label for="customRadio7" class="custom-control-label">Si</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio8" name="envio" value="no">
                                <label for="customRadio8" class="custom-control-label">No</label>
                              </div>
                            </div>
                          </div>
                         
                        </div>
    
          
               
                      
                    
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                  <button type="submit" class="btn btn-secondary btn-lg btn-block mt-4">Guardar</button>
                </div>
                <!--/.col (right) -->
              </div>
           
          </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>
        </form>
    </div>
    
</div>
@endsection
@push('bottom')
  
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="plugins/codemirror/codemirror.js"></script>
<script src="plugins/codemirror/mode/css/css.js"></script>
<script src="plugins/codemirror/mode/xml/xml.js"></script>
<script src="plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>

<script>
    $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>


@endpush
