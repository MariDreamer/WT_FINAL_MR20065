<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function voicepost()
    {
        return $this->belongsToMany(Voicepost::class);
    }
}
