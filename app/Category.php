<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public $timestamps = false;
   protected $primaryKey='catId';
   protected $table="category";


   protected $fillable=['catName','catPic'];
}
