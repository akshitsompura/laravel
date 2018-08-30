@extends('layouts.app')

@section('style')

@endsection

@section('content')

<div class="content-wrapper">
  <div class="row page-tilte align-items-center">
    <div class="col-md-auto">
      <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
      <h1 class="weight-300 h3 title">Dashboard</h1>
      <p class="text-muted m-0 desc">Let's get a quick overview</p>
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif

      You are logged in!
    </div>
  </div>

@endsection

@section('script')

@endsection
