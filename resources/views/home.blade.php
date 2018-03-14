@extends('layouts.app')

@section('content')

  <div class="pl-0 container col-12 " >

        <div class=" pl-0 mr-5 d-flex align-items-stretch">
          <div class="sidebar bg-dark">
            <h3 class="ml-4 mt-3 text-info">Categories</h3>



            @forelse ($categories as $category)
              <ul class="list-unstyled mt-4 list">
                <li class="text-white ml-5"><a href='{{route("ruta_show_categoria",['id' => $category->id])}}'>{{$category->nom}}</a></li>
              </ul>
            @empty

            @endforelse

          </div>


          <div class=" content p-4 " >
            <div class="row">
              <div class="col-12 card shadow-2 pr-5">
                <div class="row">
                  <div class="col-10">
                    <div class="display-5 mb-4 pt-4 card-title"><h1>Els teus apunts</h1></div>
                  </div>
                  <div class="col-2">
                    <a href="{{route('notes.create')}}" class="mt-4 btn btn-primary btn-lg" role="button" aria-pressed="true">Afegir apunts</a>
                  </div>
                </div>




                @php
                {{$in=1;}}
                @endphp
            @forelse ($notes as $note)
            <div class="row card-body">
              <div class="col-9">
                <h3>{{$note->nom}}</h3>
                <p>{{$note->descripcio}}</p>
              </div>
              <div class="col-3">
                <div class="row">
                  <div class="col-10 pr-5">

                <form class="poststars" action="{{route('puntuar', $note->id)}}" id="addStar" method="POST">
                    <input id="mitja" class="mitja" type="hidden" name="mitja" value="{{$note->averageRating}}">
                    {{ csrf_field() }}
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
                    </div>
                    <div class="col-2">


                    <span class="star star-1 badge badge-primary">{{$note->averageRating}} / 5</span>
                    </div>
                    </div>
                    <div class="row">
                      <div class="btn-group btn-group-sm col-10 offset-2" role="group" aria-label="Basic example">
                        <form class="btn-group btn-group-sm"action="{{route('notes.show',['id'=>$note->id])}}"><button type="submit" class="btn text-white btn-warning">Mostrar</button></form>
                        <form class="btn-group btn-group-sm"action="{{route('notes.edit',['id'=>$note->id])}}"><button type="submit" class="btn btn-primary">Editar</button></form>
                        <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#eliminarnota">Eliminar</button>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="modal fade" id="eliminarnota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content border border-danger">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar apunts</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <strong>Estàs segur de que vols eliminar els apunts?</strong><br>Si els elimines ja no els podràs recuperar.
                      </div>
                      <div class="modal-footer">
                        <form method="post" class="btn"action="{{route('notes.destroy',['id'=>$note->id])}}">{{method_field('DELETE')}}{{csrf_field()}}<button type="submit" class="btn btn-danger">Eliminar</button></form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @php
              {{$in++;}}
              @endphp
              <hr>
            @empty

            @endforelse
            <div class="row mt-4">
              <div class="mx-auto">
                  {{$notes->render("pagination::bootstrap-4")}}
              </div>
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
