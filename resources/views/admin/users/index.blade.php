@extends('layouts.app')

@section('content')

<div class="container my-5">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Llistat d'usuaris</h5>

          {{-- Taula d'usuaris --}}
          <table class="table table-hover mt-4">
            <thead class="bg-cream text-white">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Correu electrònic</th>
                <th scope="col">Creat</th>
                <th scope="col">Modificat</th>
                <th scope="col">Accions</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($users as $user)
                <tr>
                  <td class="align-middle">{{ $user->id }}</td>
                  <td class="align-middle">{{ $user->name }}</td>
                  <td class="align-middle">{{ $user->email }}</td>
                  <td class="align-middle">{{ $user->created_at }}</td>
                  <td class="align-middle">{{ $user->updated_at }}</td>
                  <td class="align-middle"></td>
                </tr>
              @empty
                <tr>
                  <td colspan="4">Encara no hi ha usuaris. <a href="{{ action('UserController@create') }}">Crear usuari</a>.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
          {{-- Paginació --}}
          {{ $users->links() }}
        </div>
      </div> <!-- /.card -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
</div>
@endsection
