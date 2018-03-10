@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="card">
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
                  Som-hi!
                </button>
              </div>
          </form>
        </div>
      </div> <!-- /.card -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
</div>
@endsection
