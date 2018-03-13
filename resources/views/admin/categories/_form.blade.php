@if ($category->exists)

  <form action="{{route('ruta_actualitzar_category',['category'=>$category->id])}}" method="post" enctype="multipart/form-data">
    {{method_field('put')}}
@else
    <form action="{{route('ruta_guardar_category')}}" method="post" enctype="multipart/form-data">
@endif
  {{csrf_field()}}
  <div class="form-group">
    <label for="nom">Nom de la categoria:</label>
    <input type="text" name="nom" class="form-control " required value="{{$category->nom or old('nom')}}">
    <small id="nomeHelp" class="form-text text-muted">Nom que s'assignara a la categoria.</small>
  </div>

    <button type="submit" class="btn btn-primary">
      {{ $accio }}
    </button>
</form>
