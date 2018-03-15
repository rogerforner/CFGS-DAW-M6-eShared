@extends('layouts.login')

@section('content')
<div id="accedir" class="container-fluid m-0 p-0">
  <div class="row align-items-center justify-content-center">
    <div class="col-md-4">
      <div class="card shadow-3">
        <div class="card-body">
          <h5 class="card-title">Iniciar sessió</h5>
          {{-- Formulari --}}
          <form action="{{ route('login') }}" method="POST">
            {{ csrf_field() }}
            {{-- Email --}}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="control-label">Correu electrònic</label>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
            {{-- Password --}}
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="control-label">Password</label>
              <input id="password" type="password" class="form-control" name="password" required>
              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
            {{-- Checkbox --}}
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar-me
                </label>
              </div>
            </div>
            {{-- Accions --}}
            <div class="form-group">
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-sign-in-alt"></i> Accedir
              </button>
              <a class="btn btn-primary" href="{{ route('register') }}" role="button">
                <i class="fas fa-user-plus"></i> Crear un compte
              </a>
              <p class="mt-3"><a href="{{ route('password.request') }}">
                <small>No recordes el password?</small>
              </a></p>
            </div>
          </form>
          {{-- Usuaris d'exemple --}}
          <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">Usuaris d'exemple</h4>
            <ul>
              <li><strong>Administrador\ra</strong>: admin@example.com</li>
              <li><strong>Moderador\ra</strong>: moderator@example.com</li>
              <li><strong>Pro</strong>: pro@example.com</li>
              <li><strong>Free</strong>: free@example.com</li>
            </ul>
            <hr>
            <strong>Password</strong>: 123456
          </div>
          {{-- Tornar enrere --}}
          <p class="text-right">
            <a href="{{ url('/') }}" class="card-link">
              <i class="far fa-arrow-alt-circle-left"></i> Tornar
            </a>
          </p>
        </div>
      </div> <!-- /.card -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
</div>
@endsection
