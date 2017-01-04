<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

public $timestamps = false;
	protected $primaryKey="tId";

	protected $table="type";
    
        protected $fillable=['tStatus','tPic'];



}
