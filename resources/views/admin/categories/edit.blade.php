@extends('layouts.app')

@section('content')
  <div class="container my-5">
    <div class="row">
      <div class="col">
        <div class="card shadow-2">
          <div class="card-body">
            <h5 class="card-title">Editar categoria</h5>
            @include('admin.categories._form', ['category'=>$category, 'accio' => 'Editar'])
            <br>
            {{-- Tornar enrere --}}
            <p class="text-right">
              <a href="{{route('ruta_categories')}}" class="card-link">
                <i class="far fa-arrow-alt-circle-left"></i> Tornar
              </a>
            </p>
          </div>
        </div> <!-- /.card -->
      </div> <!-- /.col -->
    </div> <!-- /.row -->
  </div>
@endsection
