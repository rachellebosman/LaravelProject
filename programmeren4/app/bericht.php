<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bericht extends Model
{
      //table name
      public $table = 'berichts';
      // Primary key
      public $primaryKey = 'id';

      public function user(){
            return $this->belongsTo('App\user');
      }
     
}
