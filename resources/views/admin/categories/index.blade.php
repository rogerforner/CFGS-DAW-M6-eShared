@extends('layouts.app')

@section('content')
  <div class="container my-5">
    <div class="row">
      <div class="col">
        <div class="card shadow-2">
          <div class="card-body">
            <h5 class="card-title">Llistat de categories</h5>

            {{-- Taula d'usuaris --}}
            <div class="table-responsive">
              <table class="table table-hover mt-4">
                <thead class="bg-cream text-white">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Creat</th>
                    <th scope="col">Modificat</th>
                    <th scope="col">Acció</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($categories as $category)
                    <tr>
                      <td class="align-middle">{{ $category->id }}</td>
                      <td class="align-middle">{{ $category->nom }}</td>
                      <td class="align-middle">{{ $category->created_at }}</td>
                      <td class="align-middle">{{ $category->updated_at }}</td>
                      <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Accions">
                          {{-- Editar --}}
                          <a class="btn btn-primary btn-sm" href="{{route('ruta_editar_category',['category'=>$category->id])}}" role="button"
                             data-toggle="tooltip" data-placement="top" title="Editar">
                            <i class="fas fa-edit"></i>
                          </a>
                          {{-- Eliminar --}}
                          <a class="btn btn-danger btn-sm rounded-right" href="" role="button"
                             data-toggle="modal" data-target="#eliminarcategoria{{$category->id}}" data-toggle="tooltip" data-placement="top" title="Eliminar">
                            <i class="fas fa-trash-alt"></i>
                          </a>
                          <div class="modal fade" id="eliminarcategoria{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content border border-danger">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Eliminar categoria</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  Estàs segur de que vols eliminar aquesta categoria?<br>Ja no podràs recuperar-la i també s'eliminaran tots els apunts associats.
                                </div>
                                <div class="modal-footer">
                                  <form method="post" class="btn"action="{{route('ruta_eliminar_category',['category'=>$category->id])}}">{{method_field('DELETE')}}{{csrf_field()}}<button type="submit" class="btn btn-danger">Eliminar</button></form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><!-- /.btn-group -->
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="4">Encara no hi ha categories. <a href="{{ action('CategoriesController@create') }}">Crear categoria</a>.</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
            {{-- Paginació --}}
            {{ $categories->links() }}
          </div>
        </div> <!-- /.card -->
      </div> <!-- /.col -->
    </div> <!-- /.row -->
  </div>
@endsection
