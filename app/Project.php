<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{public $timestamps = false;

	protected $primaryKey="pId";

       protected $fillable=['pName','pPic','pRegion'];
}
