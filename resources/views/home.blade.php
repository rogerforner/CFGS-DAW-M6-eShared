@extends('layouts.app')

@section('content')

  <div class="container col-12">
      <div class="row">
        <div class="col-2 bg-white mr-5">

          <ul class="mt-4">
          @forelse ($categories as $category)
              <li><a href='{{route("ruta_show_categoria",['id' => $category->id])}}'>{{$category->nom}}</a></li>
          @empty

          @endforelse
        </ul>
        </div>
          <div class="col-md-8">
              <div class="panel panel-default">
                  <div class="panel-heading">Dashboard</div>

                  <div class="panel-body">
                      @if (session('status'))
                          <div class="alert alert-success">
                              {{ session('status') }}
                          </div>
                      @endif

                      You are logged in!
                  </div>
              </div>
          </div>
          <div class="col-md-2">

          </div>
      </div>
  </div>

@endsection
