<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rating;

class Book extends Model
{
    use HasFactory;

    public function ratings ()
    {
        return $this->hasMany(Rating::class);
    }
}
