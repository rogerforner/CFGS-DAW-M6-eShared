@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-2">
  </div>
  <div class="col-8">
    <div class="mt-4 row">
      <h1>Apunts {{$category->nom}}</h1>
    </div>
    <div class="row">
      <div class="col-12 my-5 img-thumbnail">
            @foreach ($notes as $note)
              <div class="col-0">
                <h5><a href="{{route('notes.show',['id'=>$note->id,'category'=>$category])}}">{{$note->nom}}</a></h5>
              </div>
            @endforeach

      </div>
    </div>
  </div>
  <div class="col-2">
  </div>
</div>
@endsection
