@extends('dashboard')

@push('head')

@endpush

@section('main')
<div class="content-wrapper">
    <div class="container">
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 pt-4">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Carga de rubros</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('store_rubro')}}">
              <div class="card-body">
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                </div>
            </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cargar</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

         


        </div>
     

            


    
    
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
    </div>
</div>


@endsection