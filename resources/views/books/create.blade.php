@extends('layouts.app')

@section('content')

<div class="container">
<h1> Kreiraj novu knjigu</h1>

<form action="\books" method="POST">
{{csrf_field()}}
    <div class="form-group">
        <label for="name"> Naziv knjige</label>
        <input class="form-control" type="text" name="name">
      </div>
      <div class="form-group">
							<label for="book_text">Kratak opis knjige</label>

							<textarea name="book_text" class="form-control"></textarea>
						</div>
      <input class="btn btn-primary" type="submit" value="Kreiraj">
</form>
</div>
@endsection
