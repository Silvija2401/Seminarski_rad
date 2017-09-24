
@extends('layouts.app')

@section('content')

<div class="container">
<h1> Upišite svoje najdraže citate</h1>

<form action="{{route('quotes.store')}}" method="POST">
{{csrf_field()}}

      <div class="form-group">
							<label for="content">Upiši citat</label>
              <textarea name="content" class="form-control"></textarea>
							
						</div>

      <input type="hidden" name="book_id" value="{{$id}}">
      <input class="btn btn-primary" type="submit" value="Spremi">
</form>
</div>
@endsection
