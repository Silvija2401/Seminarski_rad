@extends('layouts.app')

@section('content')

<div class="container">
<h1> Uredi knjigu</h1>

<form action="/books/{{$book->id}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
    <div class="form-group">
        <label for="name"> Naziv knjige</label>
        <input class="form-control" type="text" name="name">
      </div>
      <div class="form-group">
							<label for="book_text">Kratak opis knjige</label>

							<textarea name="book_text" class="form-control"></textarea>
						</div>

            {{csrf_field()}}
      <input class="btn btn-primary" type="submit" value="Spremi promjene">
</form>
</div>
@endsection
