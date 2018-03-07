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
        @forelse ($categories as $category)
          <h3>{{$category->nom}}</h3>
            @foreach ($notes[$category->id] as $note)
              <div class="col-0">
                <h5>{{$note->nom}}</h5>
              </div>
            @endforeach

        @empty

        @endforelse
      </div>
    </div>
  </div>
  <div class="col-2">
  </div>
</div>
@endsection
