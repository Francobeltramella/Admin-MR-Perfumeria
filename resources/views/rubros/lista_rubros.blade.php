@extends('dashboard')

@push('head')

@endpush

@section('main')

<style>
  .fa-trash-alt{
    color: red;
    padding-left: 3px;
  }
</style>

<div class="content-wrapper">
<div class="container">
<section class="content" style="padding-top: 25px;">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Rubros</h3>
             <a href=" {{route('create_rubro')}}"><button class="btn btn-success" style="float: right"> Crear</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th style="width: 40px">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($rubros as $rubro)
                  <tr>
                    <td>{{$rubro->nombre}}</td>
                    <td><a href="{{route('edit_rubro',$rubro->id)}}"><i class="fas fa-pencil-alt"></i></a>
                        <a href="{{route('delete_rubro',$rubro->id)}}"><i  class="fas fa-trash-alt"></i></a>
                    </td>
                 
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
        </div>
        </div>
    
      </div>
  
  </section>
</div>
</div>


@endsection