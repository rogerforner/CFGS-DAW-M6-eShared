@extends('layouts.app')

@section('content')

  <div class="pl-0 container col-12">

        <div class=" pl-0 mr-5 d-flex align-items-stretch">
          <div class="sidebar bg-dark">
            <h3 class="ml-4 mt-3 text-info">Categories</h3>

            <ul class="list-unstyled mt-4 list">

            @forelse ($categories as $category)
                <li class="text-white ml-5"><a href='{{route("ruta_show_categoria",['id' => $category->id])}}'>{{$category->nom}}</a></li>
            @empty

            @endforelse
            </ul>
          </div>


          <div class=" content p-4" >
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <div class="col-10">
                    <div class="display-5 mb-4"><h1>Els teus apunts</h1></div>
                  </div>
                  <div class="col-2">
                    <a href="{{route('notes.create')}}" class="btn btn-outline-success btn-lg" role="button" aria-pressed="true">Crear apunt</a>
                  </div>
                </div>


            <div class="row">



            @forelse ($notes as $note)
              <div class="col-9">
                <h3>{{$note->nom}}</h3>
                <p>{!!$note->note!!}</p>
              </div>
              <div class="col-3">
                <div class="row">
                  <div class="col-10">

                <form class="poststars" action="{{route('puntuar', $note->id)}}" id="addStar" method="POST">
                    <input id="mitja" class="mitja" type="hidden" name="mitja" value="{{$note->averageRating}}">
                    {{ csrf_field() }}
                    <input class="star star-5" value="5" id="star-5" type="radio" name="star" disabled/>
                    <label class="star star-5" for="star-5"></label>
                    <input class="star star-4" value="4" id="star-4" type="radio" name="star" disabled/>
                    <label class="star star-4" for="star-4"></label>
                    <input class="star star-3" value="3" id="star-3" type="radio" name="star" disabled/>
                    <label class="star star-3" for="star-3"></label>
                    <input class="star star-2" value="2" id="star-2" type="radio" name="star" disabled/>
                    <label class="star star-2" for="star-2"></label>
                    <input class="star star-1" value="1" id="star-1" type="radio" name="star" disabled/>
                    <label class="star star-1" for="star-1"></label>
                    </div>
                    <div class="col-2">


                    <span class="star star-1 badge badge-primary">{{$note->averageRating}} / 5</span>
                    </div>
                    </div>
                    <div class="row">
                      <div class="btn-group btn-group-sm col-10 offset-2" role="group" aria-label="Basic example">
                        <form class="btn-group btn-group-sm"action="{{route('notes.show',['id'=>$note->id])}}"><button type="submit" class="btn text-white btn-warning">Mostrar</button></form>
                        <form class="btn-group btn-group-sm"action="{{route('notes.edit',['id'=>$note->id])}}"><button type="submit" class="btn btn-primary">Editar</button></form>
                        <form method="post" class="btn-group btn-group-sm"action="{{route('notes.destroy',['id'=>$note->id])}}">{{method_field('DELETE')}}{{csrf_field()}}<button type="submit" class="btn btn-danger">Eliminar</button></form>
                      </div>
                    </div>
                  </div>
                </form>
            @empty

            @endforelse

          </div>
        </div>
          </div>
        </div>
          </div>
        </div>

    </div>
    <script type="text/javascript">
    function puntuacio (){

      var x=document.getElementsByClassName('mitja');


      for (var i = 0; i < x.length; i++) {
        x1= Math.round(x[i].value);

          if (x1==0) {

          }else if (x1==1) {
            document.getElementById("star-1").checked=true;
          }else if (x1==2) {
            document.getElementById("star-2").checked=true;
          }else if (x1==3) {
            document.getElementById("star-3").checked=true;
          }else if (x1==4) {
            document.getElementById("star-4").checked=true;
          }else if (x1==5) {
            document.getElementById("star-5").checked=true;
          }
            console.log(x.length);
      }

    }

      puntuacio();

    </script>

@endsection
