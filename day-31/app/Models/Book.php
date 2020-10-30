<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rating;
use App\Models\Order;
use App\Models\Genre;
class Book extends Model
{
    use HasFactory;

    public function ratings ()
    {
        return $this->hasMany(Rating::class);
    }

    public function orders ()
    {
        return $this->belongsToMany(Order::class);
    }

    public function genres ()
    {
        return $this->belongsToMany(Genre::class);
    }
}
