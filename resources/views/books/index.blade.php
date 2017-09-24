@extends('layouts.app')

@section('content')

<div class="container text-left">


<div class="pull-xs-left">
    <a class="btn btn-primary" href="/books/create" role="button">
        Nova knjiga +
    </a>
</div>

@foreach($books as $book)

<div class="row">

		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="http://www.startupremarkable.com/wp-content/uploads/2015/02/a-book-a-week-image.jpg" alt="..." class="img-responsive">
        <a href="{{route('books.show',$book->id)}}">
          <div class="caption">
						<h3>{{ $book->name }}</h3>
          </a>
						<p class="description">{{ $book-> book_text }}</p>
						<div class="clearfix">
							<a href="{{route('books.edit',$book->id)}}" class="btn btn-success pull-left" role="button">Uredi knjigu</a>

              <form action='/books/{{$book->id}}' class="pull-xs-right5 card-link" method="POST" style="display:inline">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                <input class="btn btn-danger pull-right" type="submit" value="Delete">

            </form>


						</div>
					</div>
			</div>
		</div>

@endforeach

</div>
  @endsection
