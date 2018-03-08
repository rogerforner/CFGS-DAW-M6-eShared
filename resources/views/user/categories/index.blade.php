@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-2">
  </div>
  <div class="col-8">
    <div class="mt-4 row">
      <h2>Apunts</h2>
    </div>
    <div class="row">
      <div class="col-12 my-5 img-thumbnail">

          <h3>{{$category->nom}}</h3>
            @foreach ($notes as $note)
              <div class="col-0">
                <h5>{{$note->nom}}</h5>
              </div>
            @endforeach

      </div>
    </div>
  </div>
  <div class="col-2">
  </div>
</div>
@endsection
