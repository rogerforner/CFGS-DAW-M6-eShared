@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="card">
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
                Accedir
              </button>
              <p class="mt-3"><a href="{{ route('password.request') }}">
                <small>No recordes el password?</small>
              </a></p>
            </div>
          </form>
        </div>
      </div> <!-- /.card -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
</div>
@endsection
