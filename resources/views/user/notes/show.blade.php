@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-2">
  </div>
  <div class="col-8">
    <div class="mt-4 row">
      <h1>Apunts {{$note->nom}}</h1>
    </div>
    <div class="row">
      <form class="poststars" action="{{route('puntuar', $note->id)}}" id="addStar" method="POST">
        <div class="row">


        <div class="col-10">
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
        </div>
        <div class="col-2">
          <span class="star star-1 badge badge-primary">{{$note->averageRating}} / 5</span>
        </div>
        </div>
      </form>
      <div class="col-12 mb-5 img-thumbnail">

        <div class="stars mt-20 mb-20">


        </div>

        <div class="col-12">
          <h5>{!! $note->note !!}</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col-2">
  </div>
</div>
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
