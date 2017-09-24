<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;


class BooksController extends Controller
{


 public function index()
  {
     $user= Auth::user();
     $books= $user->books;

    return view('books.index',compact('books'));
  }

  public function create(){

    return view('books.create');
  }

 public function show($id)
  {
    $book= Book::findOrFail($id);

    $quotes= $book->quotes;
    return view('quotes.index',compact('quotes','book'));
  }

  public function store(Request $request)
{
    $dataInput= $request->all();
    $user= Auth::user();
    $user->books()->create($dataInput);
  //Book::create($dataInput);
  return redirect('/books');

}
    public function edit($id)
    {

        $user= Auth::user();
        $book= $user->books()->find($id);
      //$book=Book::where('id',$id)->first();
      return view ('books.edit')->with('book',$book);
    }

    public function update(Request $request,$id)
    {

        $user= Auth::user();
        $book= $user->books()->find($id);
      //$book=Book::where('id',$id)->first();
      $book->update($request->all());

      return redirect('/books');
    }

    public function destroy($id)
    {
        $user= Auth::user();
        $book= $user->books()->find($id);
      //$book=Book::where('id', $id)->first();
      $book->delete();
      return redirect('/books');
    }
}
