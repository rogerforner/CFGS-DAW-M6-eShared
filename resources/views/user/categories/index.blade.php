@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-2">
  </div>
  <div class="card shadow-2 col-8 my-5">
    <div class="card-body">
      <h5 class="card-title mb-5">Apunts de {{$category->nom}}</h5>
      {{-- Errors --}}
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      @forelse ($notes as $note)
        <div class="col-0">
          <div class="row">
            <div class="col-10">
              <h5><a href="{{route('notes.show',['id'=>$note->id,'category'=>$category])}}">{{$note->nom}}</a></h5>
            </div>
            <div class="col-2">
              Penjat {{$note->created_at->diffForHumans()}}
            </div>
          </div>
        </div>
        <hr>
      @empty
        <p>No hi han apunts <a href="{{action('NotesController@create')}}">crea'n un!</a></p>
      @endforelse
      <br>
      {{-- Tornar enrere --}}
      <p class="text-right">
        <a href="{{ route('home') }}" class="card-link">
          <i class="far fa-arrow-alt-circle-left"></i> Tornar
        </a>
      </p>
    </div>
  </div> <!-- /.card -->

  <div class="col-2">
  </div>
</div>
@endsection
