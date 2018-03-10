@extends('layouts.app')

@section('content')

<div class="container my-5">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Crear un usuari</h5>

          {{-- Errors --}}
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          {{-- Formulari --}}
          <form action="{{ action('UserController@index') }}" method="post">
            {{ csrf_field() }}
            {{-- Usuari --}}
            <div class="form-group">
              <label for="userName">Nom</label>
              <input type="text" name="name" class="form-control" id="userName" aria-describedby="nameHelp" required>
              <small id="nameHelp" class="form-text text-muted">Nom complet.</small>
            </div>
            {{-- Email --}}
            <div class="form-group">
              <label for="userEmail">Correu electrònic</label>
              <input type="email" name="email" class="form-control" id="userEmail" aria-describedby="emailHelp" required>
              <small id="emailHelp" class="form-text text-muted">Un correu electrònic únic (a la base de dades).</small>
            </div>
            {{-- Password --}}
            <div class="form-group">
              <label for="userPassword">Password</label>
              <input type="password" name="password" class="form-control" id="userPassword" aria-describedby="passwordHelp" required>
              <small id="passwordHelp" class="form-text text-muted">Una clau d'accés amb no menys de 6 caràcters.</small>
            </div>
            <div class="form-group">
              <label for="userPasswordConf">Password (confirmació)</label>
              <input type="password" name="password_confirmation" class="form-control" id="userPasswordConf" aria-describedby="passwordConfHelp" required>
              <small id="passwordConfHelp" class="form-text text-muted">Ha de ser igual a l'anterior (evitar errors).</small>
            </div>
            {{-- Rol --}}
            <div class="form-group">
              <label for="userRole">Rol</label>
              <select class="form-control" id="userRole" aria-describedby="roleHelp">
                <option>---</option>
              </select>
              <small id="roleHelp" class="form-text text-muted">El rol determinarà les accions que es podran dur a terme.</small>
            </div>
            {{-- Crear --}}
            <button type="submit" class="btn btn-primary">Crear</button>
          </form>
        </div>
      </div> <!-- /.card -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
</div>
@endsection
