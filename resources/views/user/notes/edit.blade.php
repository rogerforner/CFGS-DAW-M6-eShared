@extends('layouts.app')

@section('content')
  <script src="{{asset('js/tinymce/jquery.tinymce.min.js')}}"></script>
  <script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
<div class="row">
  <div class="col-2">
  </div>
  <div class="col-8 mb-5">
      <div class="container  my-5">
      <h2>Editar apunts</h2>
      <br>
      @include('user.notes._form', ['note'=>$note])
    </div>
  </div>
  <div class="col-2">
  </div>
</div>
@endsection
