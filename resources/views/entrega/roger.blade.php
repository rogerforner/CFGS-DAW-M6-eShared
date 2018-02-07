@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <form class="card-body">
            <div class="form-group">
              <label for="inputTitol">Títol</label>
              <input type="text" class="form-control" name="titol" id="inputTitol">
            </div>

            <div class="form-group">
              <label for="inputSubtitol">Subtítol</label>
              <input type="text" class="form-control" name="subtitol" id="inputSubtitol">
            </div>

            <div class="form-group">
              <label for="inputCos">Cos</label>
              <textarea id="summernote" class="form-control" name="cos" id="inputCos"></textarea>
            </div>

            <button type="button" class="btn btn-primary" onclick="return validaFormulari()">Publicar</button>
          </form>
        </div><!-- /.card -->
      </div><!-- /.col -->

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Sinonimator</h5>
            <h6 class="card-subtitle mb-2 text-muted">No et repeteixis</h6>

            <p class="card-text text-justify"><strong>Repeteixes constantment una paraula?</strong><br>
              <em>Escriu una paraula que sols repetir molt i si hi és al text la <mark>marcarem</mark> per tal de que puguis veure quants cops l'has repetit.</em></p>

            <form class="my-2">
              <input type="text" class="form-control" name="buscaParaula">
            </form>

            <a href="https://www.softcatala.org/diccionari-de-sinonims/" target="_blank" class="card-link">Buscar sinònims</a>
          </div>
        </div><!-- /.card -->
      </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container -->
@endsection
