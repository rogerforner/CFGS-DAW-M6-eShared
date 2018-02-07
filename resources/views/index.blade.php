@extends('layouts.app')

@section('content')
  <style>
    header {
      background-image: url("img/capçalera.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 300px;
    }
  </style>
  <!-- ENCAPÇALAMENT DE LA PÀGINA WEB -->
  <header class="parallax shadow-all-3i" id="splash">

  </header>
    <div class="container">


      <div id="card" onclick="free()"style="height:150px"class="mb-5 mt-5">
        <div class="front container btn btn-info ">
          <h2 style="margin-left: auto;margin-right:auto;">Freeee!</h2>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br> in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="back">
          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead" class="thead-dark">
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
        <div class="front container btn btn-info ">
          <h2 style="margin-left: auto;margin-right:auto;">PRO!</h2>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br> in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="back">
          <h2 style="margin-left: auto;margin-right:auto;">Avantatges</h2>
          <br>
          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead" class="thead-dark">
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
@endsection
