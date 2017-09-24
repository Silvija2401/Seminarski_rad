@extends('layouts.app')

@section('content')



<div class="container">
<h1> Uredi citate</h1>

<form action="{{route('quotes.update',$quote->id)}}" method="POST">
  {{csrf_field()}}
  {{method_field('PUT')}}

      <div class="form-group">
							<label for="content">Uredi citat</label>

							<textarea name="content" class="form-control"></textarea>
						</div>

      <input class="btn btn-primary" type="submit" value="Spremi">
</form>
</div>
@endsection
