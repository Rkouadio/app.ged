<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statuts extends Model
{
    protected $fillable = [
        'intitule', 'description'
    ];

}
