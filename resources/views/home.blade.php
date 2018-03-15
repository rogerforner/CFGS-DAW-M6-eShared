@extends('layouts.app')

@section('content')

<div id="home" class="container-fluid">
  <div class="row">
    {{-- SIDEBAR --}}
    <div id="aside" class="col-md-2 bg-dark">
      <div class="llistaCat my-5 pl-3">
        <h3 class="text-info"><i class="far fa-list-alt"></i> Categories</h3>
        @forelse ($categories as $category)
          <ul class="list-unstyled mt-4 list">
            <li class="ml-5">
              <a class="text-white" href='{{ route("ruta_show_categoria",['id' => $category->id]) }}'>{{ $category->nom }}</a>
            </li>
          </ul>
        @empty
          <p class="text-white">Encara no hi ha categories. <a class="text-white" href="{{ action('CategoriesController@create') }}">Crear categoria</a>.</p>
        @endforelse
      </div>
      <div class="veureApunts d-md-none pl-3">
        <h3 class="text-info"><i class="fas fa-chevron-down"></i> <a href="#section">Veure apunts</a></h3>
      </div>
    </div><!-- /.col -->

    {{-- ARTICLE --}}
    <div id="section" class="col-md-10">
      <div class="card shadow-2 my-5 mx-3">
        <div class="card-body">
          {{-- Títol i Botó afegir --}}
          <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1">
              <h5 class="card-title">Els teus apunts</h5>
            </div><!-- /.col -->
            <div class="col-md-6 order-1 order-md-2">
              <a class="btn btn-primary float-md-right mb-3" href="{{ route('notes.create') }}" role="button">
                <i class="fas fa-plus-circle"></i> Afegir apunts
              </a>
            </div><!-- /.col -->
          </div><!-- /.row -->
          {{-- Llista d'apunts --}}
          <hr>
          @php
            {{ $in=1; }}
          @endphp
          @forelse ($notes as $note)
            <div class="row align-items-center">
              {{-- Informació apunts --}}
              <div class="col-md-4">
                <h3>{{$note->nom}}</h3>
                <p>{{$note->descripcio}}</p>
              </div><!-- /.col -->
              {{-- Puntuació i Accions --}}
              <div class="col-md-8">
                <form class="poststars" action="{{route('puntuar', $note->id)}}" id="addStar" method="POST">
                  {{ csrf_field() }}
                  <div class="row align-items-center">
                    {{-- ***** --}}
                    <div class="col-md-6">
                      <input id="mitja" class="mitja" type="hidden" name="mitja" value="{{$note->averageRating}}">
                      <input class="star star-5 " value="5" id="{{$in}}-5" type="radio" name="star" disabled/>
                      <label class="star star-5" for="star-5"></label>
                      <input class="star star-4 " value="4" id="{{$in}}-4" type="radio" name="star" disabled/>
                      <label class="star star-4" for="star-4"></label>
                      <input class="star star-3 " value="3" id="{{$in}}-3" type="radio" name="star" disabled/>
                      <label class="star star-3" for="star-3"></label>
                      <input class="star star-2 " value="2" id="{{$in}}-2" type="radio" name="star" disabled/>
                      <label class="star star-2" for="star-2"></label>
                      <input class="star star-1 " value="1" id="{{$in}}-1" type="radio" name="star" disabled/>
                      <label class="star star-1" for="star-1"></label>
                      <br>
                      <span class="pstar badge badge-primary" data-toggle="tooltip" data-placement="bottom" title="Puntuació">{{$note->averageRating}} / 5</span>
                    </div><!-- /.col -->
                    {{-- Accions --}}
                    <div class="col-md-6">
                      <div class="btn-group btn-group mt-sm-3 mt-md-0" role="group" aria-label="Basic example">
                        {{-- Veure --}}
                        <form class="btn-group btn-group-sm" action="{{route('notes.show',['id'=>$note->id])}}"><button type="submit" class="btn text-white btn-primary" data-toggle="tooltip" data-placement="top" title="Veure"><i class="fas fa-eye"></i></button></form>
                        {{-- Editar --}}
                        <form class="btn-group btn-group-sm" action="{{route('notes.edit',['id'=>$note->id])}}"><button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></button></form>
                        {{-- Eliminar --}}
                        <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#deleteNote-{{$note->id}}" data-tooltip="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash"></i></button>
                        @include('partials.modal', [
                          'id'      => $note->id,
                          'title'   => $note->nom,
                          'updated' => $note->updated_at
                        ])
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </form>
              </div><!-- /.col -->
            </div><!-- /.row -->
            <hr>
            @php
              {{ $in++; }}
            @endphp
          @empty
            <p>Encara no has afegit apunts. <a href="{{ route('notes.create') }}">Afegir apunts</a>.</p>
          @endforelse
          {{-- Paginació --}}
          <div class="row">
            <div class="col">
              {{ $notes->render("pagination::bootstrap-4") }}
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div>
      </div> <!-- /.card -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</div>

{{-- Script Puntuació --}}
<script type="text/javascript">
function puntuacio (){
  var x=document.getElementsByClassName('mitja');
  // la x ens serveix per a saber tots els apunts que tenim
  var j=1;
  for (var i = 0; i < x.length; i++) {
    x1= Math.round(x[i].value);
      if (x1==0) {

      }else if (x1==1) {
        document.getElementById(j+"-1").checked=true;
      }else if (x1==2) {
        document.getElementById(j+"-2").checked=true;
      }else if (x1==3) {
        document.getElementById(j+"-3").checked=true;
      }else if (x1==4) {
        document.getElementById(j+"-4").checked=true;
      }else if (x1==5) {
        document.getElementById(j+"-5").checked=true;
      }
      j++;
        console.log(x.length);
  }
}
puntuacio();
</script>
@endsection
