<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['name','book_text'];

    public function quotes()
    {
      return $this->hasMany(Quote::class);


    }


}
