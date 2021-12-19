<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;

  protected $fillable = [
      'ItemNumber',
      'Weight',
      'Dimension',
       'Insurance_Amount',
        'Destination',
        'delivery_date',


  ];
}
