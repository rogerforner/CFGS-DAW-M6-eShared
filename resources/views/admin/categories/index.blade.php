@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-2">
  </div>
  <div class="col-8">
    <div class="mt-4 row">
      <h2>Categories</h2>
    </div>
    <div class="row">
  <div class="col-12 my-5 img-thumbnail">
    @foreach ($categories as $category)
      <div class="col-0">
        <h5>{{$category->nom}}</h5>
      </div>
      @foreach ($fills[$category->id] as $fill)
        <h6 class="col-8 ">--> {{$fill->nom}}</h6>
      @endforeach
    @endforeach
  </div>
  </div>
  </div>
  <div class="col-2">
  </div>
</div>
@endsection
