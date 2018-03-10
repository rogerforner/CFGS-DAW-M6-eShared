@extends('layouts.app')

@section('content')
  <script src="{{asset('js/tinymce/jquery.tinymce.min.js')}}"></script>
  <script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
  <div class="container my-5">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5>Crear categoria</h5>
            @include('admin.categories._form', ['category'=>$category])
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
