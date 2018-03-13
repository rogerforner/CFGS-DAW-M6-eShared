@extends('layouts.app')

@section('content')

<div class="container my-5">
  <div class="row">
    <div class="col">
      <div class="card shadow-2">
        <div class="card-body">
          <h5 class="card-title">Editar un usuari</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $user->name }}</h6>

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
          <form action="{{ route('profile.update', ['id' => $user->id]) }}" method="post">
            {{ method_field('put') }}
            {{ csrf_field() }}
            {{-- Usuari --}}
            <div class="form-group">
              <label for="userName">Nom</label>
              <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" id="userName" aria-describedby="nameHelp" required>
              <small id="nameHelp" class="form-text text-muted">Nom complet.</small>
            </div>
            {{-- Email --}}
            <div class="form-group">
              <label for="userEmail">Correu electrònic</label>
              <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" id="userEmail" aria-describedby="emailHelp" required>
              <small id="emailHelp" class="form-text text-muted">Un correu electrònic únic (a la base de dades).</small>
            </div>
            {{-- Password --}}
            <div class="form-group">
              <label for="userPassword">Password</label>
              <input type="password" name="password" class="form-control" id="userPassword" aria-describedby="passwordHelp">
              <small id="passwordHelp" class="form-text text-muted">Una clau d'accés amb no menys de 6 caràcters.</small>
            </div>
            <div class="form-group">
              <label for="userPasswordConf">Password (confirmació)</label>
              <input type="password" name="password_confirmation" class="form-control" id="userPasswordConf" aria-describedby="passwordConfHelp">
              <small id="passwordConfHelp" class="form-text text-muted">Ha de ser igual a l'anterior (evitar errors).</small>
            </div>
            {{-- Rol --}}

            {{-- Crear --}}
            <button type="submit" class="btn btn-primary">Editar</button>
          </form>
          <br>
          {{-- Tornar enrere --}}
          <p class="text-right">
            <a href="{{ route('home') }}" class="card-link">
              <i class="far fa-arrow-alt-circle-left"></i> Tornar
            </a>
          </p>
        </div>
      </div> <!-- /.card -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
</div>
@endsection
