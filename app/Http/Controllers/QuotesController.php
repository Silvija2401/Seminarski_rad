<?php

namespace App\Http\Controllers;

use App\Quote;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class QuotesController extends Controller
{

    public function createQuote($bookId)
    {

        return view('quotes.create')->with('id',$bookId);
    }


    public function store(Request $request)
    {
        $inputData= $request->all();

        Quote::create($inputData);

        $bookId= $request->book_id;

        return redirect()->route('books.show',compact('bookId'));
    }


    public function edit($id)
    {
        $quote= Quote::find($id);
        return view('quotes.edit',compact('quote',$quote));
    }


    public function update(Request $request,$id)
    {
        $inputData= $request->all();
        $quote= Quote::find($id);
        $quote->update($inputData);

        return redirect()->route('books.show',$quote->book_id);
    }

    public function destroy($id)
    {
        Quote::destroy($id);
        return back();
    }
  }
