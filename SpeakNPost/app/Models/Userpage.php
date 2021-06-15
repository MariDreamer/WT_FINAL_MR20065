<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Voicepost;

class Userpage extends Model
{
    use HasFactory;

    protected $table = 'userpage';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function voicepost()
    {
        return $this->hasMany(Voicepost::class);
    }
}
