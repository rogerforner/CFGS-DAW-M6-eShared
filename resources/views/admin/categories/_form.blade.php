@if ($category->exists)
  <form action="{{route('ruta_actualitzar_category',['category'=>$category->id])}}" method="post" enctype="multipart/form-data">
    {{method_field('put')}}
@else
    <form action="{{route('ruta_guardar_category')}}" method="post" enctype="multipart/form-data">
@endif
  {{csrf_field()}}
  <div class="form-group">
    <label for="nom">Nom de la categoria:</label>
    <input type="text" name="nom" class="form-control"value="{{$category->nom or old('nom')}}">
  </div>
  <div class="form-group " style="    display: -webkit-box;">
    <select class="form-control" name="pare">
      <option value="">--------</option>
      @forelse ($categories as $category1)
          <option type="checkbox" name="pare" value="{{$category1->id}}"
          @if($category1 == $category)
            selected
          @endif
          >{{$category1->nom}}</option>
      @empty

      @endforelse
    </select>
    <span class="col-1"data-toggle="tooltip" data-placement="right" title="Si esculls una opció t'estas referint a que es una categoria filla" ><i class="fas fa-question " ></i></span>
  </div>
    <button type="submit" class="btn btn-primary">
      Guardar producte
    </button>
</form>
