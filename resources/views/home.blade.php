@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="jumbotron">
        <h1 class="display-3">Dobrodošli!</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <p class="lead">Uspješno ste se prijavili na stranicu s vašim najdražim citatima iz pročitanih knjiga!</p>

        <p class="lead">
          <a class="btn btn-primary btn-lg" href="{{route('books.index')}}" role="button">Najdraže knjige i citati</a>
        </p>
        </div>
      </div>
        @endsection
