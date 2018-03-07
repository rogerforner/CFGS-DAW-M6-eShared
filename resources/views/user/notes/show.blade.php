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
        <h3>{{$note->nom}}</h3>
        <div class="col-2">
          <h5>{!! $note->note !!}</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col-2">
  </div>
</div>
@endsection
