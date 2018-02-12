@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
      <div class="col-md-8">
        <div class="card shadow-3">
          <form class="card-body">
            <div class="form-group">
              <label for="inputTitol">Títol</label>
              <input type="text" class="form-control a" name="titol"onkeyup="enricup();"onblur="nocoloret1()"onfocus="coloret1();" id="inputTitol">
            </div>

            <div class="form-group">
              <label for="inputSubtitol">Subtítol</label>
<<<<<<< HEAD
              <input type="text" class="form-control a" name="subtitol" onblur="nocoloret()" onfocus="coloret();" id="inputSubtitol">
=======
              <input type="text" class="form-control a" name="subtitol" onkeydown="enricdown();" onblur="nocoloret()"onfocus="coloret();"id="inputSubtitol">
>>>>>>> 94b625e4436fef58f1d8363f81b7f2ad7133b433
            </div>

            <div class="form-group">
              <label for="inputCos">Cos</label>
              <textarea id="summernote" class="form-control" name="cos"></textarea>
            </div>

            <div class="form-group">
              <label for="inputEmail">Correu electrònic</label>
              <input type="text" class="form-control" name="email" id="inputEmail">
            </div>

            <button type="button" class="btn btn-primary" onclick="return validaFormulari()">Publicar</button>
          </form>
        </div><!-- /.card -->
      </div><!-- /.col -->

      <div class="col-md-4">
        <div class="card shadow-3">
          <div class="card-body">
            <h5 class="card-title">Sinonimator</h5>
            <h6 class="card-subtitle mb-2 text-muted">No et repeteixis</h6>

            <p class="card-text"><strong>Repeteixes constantment alguna paraula?</strong><br>
              <em>Escriu aquella paraula que sols repetir molt i, si hi és al text, la <mark>marcarem</mark> per tal de que les puguis trobar fàcilment i substituir-la per un sinònim.</em></p>

            <form class="my-2">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="numParaules">0</span>
                </div>
                <input type="text" class="form-control" oninput="buscarParaula()" id="buscaParaula">
              </div>
            </form>

            <a href="https://www.softcatala.org/diccionari-de-sinonims/" target="_blank" class="card-link">Buscar sinònims</a>
          </div>
        </div><!-- /.card -->
      </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container -->

<script type="text/javascript">
function validaFormulari() {
  // Obtenir valors dels camps.
  var titol = $('#inputTitol').val();
  var cos   = $('textarea#summernote').val().replace(/<[^>]*>/g, '');
  var email = $('#inputEmail').val();

  // Si el títol està buit o està format per menys de 70 caràcters, no permetem
  // que es dugui a terme el sumbmit i, a més a més, avisem que s'ha d'emplenar.
  if (titol == null || titol.length <= 70 || /^\s+$/.test(titol)) {
    alert('[ERROR] El camp títol és obligatori i no pot tenir menys de 70 caràcters.');
    return false;
  }

  // Si el títol està buit, no permetem que es dugui a terme el sumbmit i, a més
  // a més, avisem que s'ha d'emplenar.
  if (cos == null || cos.length == 0 || /^\s+$/.test(cos)) {
    alert('[ERROR] El cos és obligatori i no pot estar buit.');
    return false;
  }

  // Validar el correu electrònic.
  var esEmail = validaEmail(email);
  if (esEmail == false) {
    alert('[ERROR] No has inserit un correu electrònic.');
    return false;
  }
}

/*
## Validar eMail
----------------------------------------------------------------------------- */
function validaEmail(email) {
  var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return regex.test(email);
}
</script>
@endsection
