@extends('layouts.app')

@section('content')
<header id="index" style="background-image:url('{{ url('img/capcalera.jpg') }}');">
  <div class="row h-100">
    <div class="col-10 col-sm-10 mx-auto my-auto">
      <h1 class="text-center">eShared</h1>
    </div>
  </div>
</header>

<div class="container">
  <div class="row my-4">
    <div class="col">
      <div class="card shadow-2">
        <div class="card-body">
          <h5 class="card-title eshared">eShared</h5>
          <p>Per a els/les estudiants i el professorat, eShared és un entorn virtual on es recullen apunts dels diferents àmbits educatius per tal de facilitar l’estudi dels/les estudiants i proporcionar una guia, o millor dit, una eina, sempre actualitzada, per als/les professionals d’un sector educatiu que es renova de forma constant.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.col -->
  </div><!-- /.row -->
  <div id="preus" class="row my-4">
    <div class="col-md-6">
      <div class="card border-primary mb-4">
        <div class="card-body">
          <div class="card-body">
            <h5 class="card-title eshared">Free</h5>
            <p class="card-text">Penja apunts de qualitat de forma gratuïta i quan rebis una puntuació satisfactoria podràs consumir els apunts dels/les altres usuaris/ries</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fas fa-check"></i> GRATUÏT</li>
            <li class="list-group-item"><i class="fas fa-check"></i> Pujar apunts</li>
            <li class="list-group-item"><i class="fas fa-check"></i> Consultar Apunts <span data-toggle="tooltip" data-placement="top" title="Només quan s'aconsegueixi la nota recomanada dels apunts pujats."><i class="fas fa-question-circle"></i></span></li>
            <li class="list-group-item"><i class="fas fa-check"></i> Puntacions</li>
          </ul>
          <div class="card-body">
            <a href="{{ route('login') }}" class="card-link">Registrar-se</a>
          </div>
        </div>
      </div><!-- /.card -->
    </div><!-- /.col -->
    <div class="col-md-6">
      <div class="card border-primary">
        <div class="card-body">
          <div class="card-body">
            <h5 class="card-title eshared">Pro</h5>
            <p class="card-text">Penja apunts de qualitat de forma gratuïta i consumei-los directament sense la necessitat d'esperar a que siguin puntuats.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fas fa-times"></i> GRATUÏT</li>
            <li class="list-group-item"><i class="fas fa-check"></i> Pujar apunts</li>
            <li class="list-group-item"><i class="fas fa-check"></i> Consultar Apunts</li>
            <li class="list-group-item"><i class="fas fa-check"></i> Puntacions</li>
          </ul>
          <div class="card-body">
            <a href="{{ route('login') }}" class="card-link">Registrar-se</a>
          </div>
        </div>
      </div><!-- /.card -->
    </div><!-- /.col -->
  </div><!-- /.row -->
<hr>
  <div class="row my-4 align-items-center">
    <div class="col-md-6">
      <div class="card shadow-2 mb-4">
        <div class="card-body">
          <h5 class="card-title">Webs al punt .cat <small>(WAP.cat)</small></h5>
          <p>Concurs que té l'objectiu de promoure el coneixement de competències digitals en la comunitat escolar a través de la creació de llocs web i apps. WAP.cat està destinat a alumnes de Primària, ESO, Batxillerat i Graus Formatius. El concurs també vol estimular la creació de continguts digitals en català.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.col -->
    <div class="col-md-6">
      <div class="card shadow-2">
        <div class="card-body">
          <h5 class="card-title">Logotips dels col·laboradors i del concurs</h5>
          <div class="row align-items-center">
            <div class="col-md-6">
              <a href="https://ca.dinahosting.com" target="_blank" data-toggle="tooltip" data-placement="top" title="Dinahosting">
                <img src="{{ asset('img/dinahosting.jpg') }}" class="img-fluid" alt="Dinahosting">
              </a>
            </div>
            <div class="col-md-6">
              <a href="http://websalpunt.cat" target="_blank" data-toggle="tooltip" data-placement="top" title="Webs al punt .cat">
                <img src="{{ asset('img/puntcat.png') }}" class="img-fluid" alt="WAP.cat" width="216">
              </a>
            </div>
          </div>
        </div>
      </div><!-- /.card -->
    </div><!-- /.col -->
  </div><!-- /.row -->
<hr>
  <div class="row my-4">
    <div class="col">
      <div class="card shadow-2">
        <div class="card-body">
          <h5 class="card-title eshared">GSPD <small>(Equip)</small></h5>
          <p>El nom del nostre equip s’esdevé arran de la coneixença del significat de les sigles GNU, on la lletra G representa les tres sigles (fent-ne una reiteració de les tres sigles) i on la resta de lletres representen Not Unix.</p>
          <img src="{{ asset('img/gnu.png') }}" alt="GNU" class="img-thumbnail">

          <p class="mt-4">Explicat això podem desglossar el nom del nostre grup GSPD, definint cadascuna de les seves sigles.</p>
          <img src="{{ asset('img/gspd.png') }}" alt="GSPD" class="img-thumbnail">

          <p class="mt-4">G[SPD] Smart Programming Developers (GSPD) està format per:</p>
          <ul>
            <li>Enric Beltran Cano</li>
            <li>Adrià Montoro Cintas</li>
            <li>Roger Forner Fabre</li>
          </ul>

          <p class="mt-4">Tots tres membres de l'equip som estudiants de <em>Desenvolupament d'Aplicacions Web</em> (2n) de l'<a href="http://agora.xtec.cat/insmontsia/" target="_blank">Institut Montsià</a>, Amposta (Terres de l'Ebre).</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.col -->
  </div><!-- /.row -->
  <hr>
    <div class="row my-4">
      <div class="col">
        <div class="card shadow-2">
          <div class="card-body">
            <h5 class="card-title eshared">El vols provar en local?</h5>
            <p>Pots descarregar el codi del nostre projecte en el sgüent enllaç:</p>
            <ul>
              <li><i class="fab fa-github"></i> <a href="https://github.com/rogerforner/WebsAlPunt_eShared" target="_blank" data-toggle="tooltip" data-placement="top" title="Seràs redirigit/da al GitHub">Visitar el repositori d'eShared</a></li>
            </ul>
          </div>
        </div><!-- /.card -->
      </div><!-- /.col -->
    </div><!-- /.row -->
</div>
@endsection
