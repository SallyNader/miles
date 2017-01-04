<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public $timestamps = false;

    protected $primaryKey="rId";

    protected $table="region";
        protected $fillable=['rName','rPic','rCity'];
}
