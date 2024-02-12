<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    use HasFactory;

    protected $fillable = 

    [
    'name',
    'producer',
    'type',
    'description',
    'ImageUrl',
    ];

    public function pubs()
    {
        return $this->belongsToMany(Pubs::class, 'beer_pubs', 'idb', 'idp');
    }

}

