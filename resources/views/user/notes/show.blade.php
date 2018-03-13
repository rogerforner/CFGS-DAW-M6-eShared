@extends('layouts.app')

@section('content')

<div class="container my-5">
  <div class="row">
    <div class="col-md-12 offset-md-0" style="min-height: 100vh;">
      <div class="card shadow-2">
        <div class="card-body">
          <h5 class="card-title">{{$note->nom}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Puntuació:  <span class="star star-1 badge badge-primary" data-toggle="tooltip" data-placement="right" title="Puntuar">{{$note->averageRating}} / 5</span></h6>
          {{-- Estrelles --}}
          <div class="row">
            <div class="col">
              <div class="row">
                <form class="poststars" action="{{route('puntuar', $note->id)}}" id="addStar" method="POST">
                  <input id="mitja" type="hidden" name="mitja" value="{{$note->averageRating}}">
                  {{ csrf_field() }}

                  <input class="star star-5" value="5" id="star-5" type="radio" name="star" />
                  <label class="star star-5" for="star-5"></label>
                  <input class="star star-4" value="4" id="star-4" type="radio" name="star" />
                  <label class="star star-4" for="star-4"></label>
                  <input class="star star-3" value="3" id="star-3" type="radio" name="star" />
                  <label class="star star-3" for="star-3"></label>
                  <input class="star star-2" value="2" id="star-2" type="radio" name="star" />
                  <label class="star star-2" for="star-2"></label>
                  <input class="star star-1" value="1" id="star-1" type="radio" name="star" />
                  <label class="star star-1" for="star-1"></label>
                </form>
              </div>
              <div class="row">

              </div>

            </div>
          </div>

          <hr>

          {{-- Cos --}}
          <p>{!! $note->note !!}</p>

          {{-- Tornar enrere --}}
          <p class="text-right">
            <a href="{{ route('home') }}" class="card-link">
              <i class="far fa-arrow-alt-circle-left"></i> Tornar
            </a>
          </p>
        </div>
      </div> <!-- /.card -->
  </div><!-- /.row -->
</div><!-- /.container -->

<script type="text/javascript">
function puntuacio (){
  x= Math.round(document.getElementById('mitja').value);
  if (x==0) {
  }else if (x==1) {
    document.getElementById("star-1").checked=true;
  }else if (x==2) {
    document.getElementById("star-2").checked=true;
  }else if (x==3) {
    document.getElementById("star-3").checked=true;
  }else if (x==4) {
    document.getElementById("star-4").checked=true;
  }else if (x==5) {
    document.getElementById("star-5").checked=true;
  }
}
  puntuacio();
</script>
@endsection
