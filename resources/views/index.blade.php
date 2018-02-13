@extends('layouts.app')

@section('content')
  <style>
    header {
      background-image: url("img/capçalera.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      object-position: 50%, 50%;
      height: 300px;
    }
  </style>
  <!-- ENCAPÇALAMENT DE LA PÀGINA WEB -->
  <header class="mt-0 parallax shadow-all-3i" id="splash">
  </header>

<div class="row">
  <div class="col-2">
  </div>
  <div class="col-8">
    <div id="card" onclick="free()"style="height:150px;width:100%;"class="mb-5 mt-5">
      <div class="front btn btn-info " >
        <div class="row">
          <h2 style="margin-left: auto;margin-right:auto;">FREE!</h2>
        </div>
        <div class="row ">
          <p class="text-truncate"style="margin-left: auto;margin-right:auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
        </div>
      </div>
      <div class="back">
        <table class="table table-striped bg-warning" id="tblGrid">
          <thead id="tblHead" class="bg-danger text-light">
            <tr>
              <th>FREE</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>GRATIS</td>
              <td><i class="fas fa-check"></i></td>
            </tr>
            <tr><td>Pujada de fitxers</td>
              <td><i class="fas fa-check"></i></td>
            </tr>
            <tr><td>Puntuació d'usuaris</td>
              <td><i class="fas fa-check"></i></td>
            </tr>
            <tr><td>Consulta de fitxers</td>
              <td><i class="fas fa-times"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <br>
    <div id="card2" onclick="pro()"style="height:150px"class="mt-5">
      <div class="front btn btn-info ">
        <div class="row">
          <h2 style="margin-left: auto;margin-right:auto;">PRO!</h2>
        </div>
        <div class="row ">
          <p class="text-truncate"style="margin-left: auto;margin-right:auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
        </div>
      </div>
      <div class="back">
        <table class="table table-striped bg-warning" id="tblGrid">
          <thead id="tblHead" class="bg-danger text-light">
            <tr>
              <th>PRO</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>GRATIS</td>
              <td><i class="fas fa-times"></i></td>
            </tr>
            <tr><td>Pujada de fitxers</td>
              <td><i class="fas fa-check"></i></td>
            </tr>
            <tr><td>Puntuació d'usuaris</td>
              <td><i class="fas fa-check"></i></td>
            </tr>
            <tr><td>Consulta de fitxers</td>
              <td><i class="fas fa-check"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-2">
  </div>
</div>
@endsection
