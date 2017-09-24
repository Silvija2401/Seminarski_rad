@extends('layouts.app')

@section('content')

<div class="container text-left">

<div class="pull-xs-left">
    <a class="btn btn-primary pull-right" href="{{route('createQuote',$book->id)}}" role="button">
        Dodaj novi citat +
    </a>
    <a class="btn btn-primary" href="{{route('books.index')}}" role="button">
        Vrati se na knjige
    </a>
</div>





@foreach($quotes as $quote)

<div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">

            <blockquote class="blockquote text-center">
                <p class="mb-0">{{$quote->content}}</p>
                              </blockquote>
              <a class="btn btn-primary btn-sm" href="{{route('quotes.edit',$quote->id)}}">Uredi citat</a>
              <div class="pull-right">
                <form action='{{route('quotes.destroy',$quote->id)}}' class="pull-xs-right5 card-link" method="POST" style="display:inline">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  <input class="btn btn-sm btn-danger" type="submit" value="Delete">

              </form>
              </div>
          </div>
        </div>
      </div>
</div>

@endforeach




</div>
  @endsection
