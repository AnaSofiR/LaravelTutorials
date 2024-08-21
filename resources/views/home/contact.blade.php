@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto">
      <p class="lead">Email: {{ $email }}</p>
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead">Address: {{ $address }}</p>
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead">Cellphone: {{ $cellphone }}</p>
    </div>
  </div>
</div>
@endsection