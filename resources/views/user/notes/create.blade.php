@extends('layouts.app')

@section('content')
  <script src="{{asset('js/tinymce/jquery.tinymce.min.js')}}"></script>
  <script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
<div class="row">
  <div class="col-2">
  </div>
  <div class="col-8 mb-5">
      <div class="container  my-5">
      <h2>Redactar apunts</h2>
      @include('user.notes._form', ['note'=>$note])
    </div>
  </div>
  <div class="col-2">
  </div>
</div>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

@endsection
