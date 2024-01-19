<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = "grupos";

    public function channels()
    {
        return $this->belongsTo(Channel::class);
    }

    public function checkIfMessageGotSended()
    {
        
    }
}
