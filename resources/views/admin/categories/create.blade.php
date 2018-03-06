@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-2">
  </div>
  <div class="col-8 mb-5">
      <div class="container  my-5">
      <h2>Crear categoria</h2>
      <br>
      @include('admin.categories._form', ['category'=>$category])
    </div>
  </div>
  <div class="col-2">
  </div>
</div>
@endsection
