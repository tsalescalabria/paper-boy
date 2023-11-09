<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    public function bots()
    {
        return $this->hasMany(Bot::class);
    }

    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
