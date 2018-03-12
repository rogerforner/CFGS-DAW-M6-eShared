@extends('layouts.login')

@section('content')
<div id="registrar-se" class="container-fluid m-0 p-0">
  <div class="row align-items-center justify-content-center">
    <div class="col-md-4">
      <div class="card shadow-3">
        <div class="card-body">
          <h5 class="card-title">Crear un compte</h5>
          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}
              {{-- Nom --}}
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="control-label">Nom</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>
              {{-- Email --}}
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label">Correu electrònic</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
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
              {{-- Password (confirmació) --}}
              <div class="form-group">
                <label for="password-confirm" class="control-label">Password (confirmació)</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
              {{-- Accions --}}
              <div class="form-group">
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-user-plus"></i> Som-hi!
                </button>
                <a class="btn btn-primary" href="{{ route('login') }}" role="button">
                  <i class="fas fa-sign-in-alt"></i> Ja tinc un compte
                </a>
              </div>
          </form>
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
