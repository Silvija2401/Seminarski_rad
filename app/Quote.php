<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable=['content','book_id'];

    public function book()
    {
      return $this->belongsTo(Book::class);
    }
}
