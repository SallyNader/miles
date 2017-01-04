<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
   public $timestamps = false; 

    protected $primaryKey="cId";

   protected $table="country";

   protected $fillable=['cName','cPic'];
}
