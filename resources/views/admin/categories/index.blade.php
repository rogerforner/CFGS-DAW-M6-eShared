@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-2">
  </div>
  <div class="col-8 mb-5">
    @foreach ($categories as $category)
      <h5>{{$category->nom}}</h5>
      @foreach ($fills[$category->id] as $fill)
        <h6>--> {{$fill->nom}}</h6>
      @endforeach
    @endforeach
  </div>
  <div class="col-2">
  </div>
</div>
@endsection
