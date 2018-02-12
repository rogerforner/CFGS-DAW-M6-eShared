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

<div class="container my-5">
  <div class="row">
    <div class="col-2">
    </div>
    <div class="col-8 mb-5">
      <div id="card" onclick="free()"style="height:150px;width:100%;"class="mb-5 mt-5">
        <div class="front btn btn-info " >
          <div class="row">
            <h2 style="margin-left: auto;margin-right:auto;">FREE!</h2>
          </div>
          <div class="row ">
            <p style="margin-left: auto;margin-right:auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
          </div>
        </div>
        <div class="row ">
          <p class="text-truncate"style="margin-left: auto;margin-right:auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
        </div>
      </div>
      <br>
      <div id="card2" onclick="pro()"style="height:150px"class="my-5">
        <div class="front btn btn-info ">
          <div class="row">
            <h2 style="margin-left: auto;margin-right:auto;">PRO!</h2>
          </div>
          <div class="row ">
            <p style="margin-left: auto;margin-right:auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
          </div>
        </div>
        <div class="row ">
          <p class="text-truncate"style="margin-left: auto;margin-right:auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
