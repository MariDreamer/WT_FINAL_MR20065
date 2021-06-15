<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subtopic;
use App\Models\Voicepost;

class Topic extends Model
{
    use HasFactory;


    public function subtopic() 
    {
        return $this->hasMany(Subtopic::class);
    }

    public function voicepost() 
    {
        return $this->hasMany(Voicepost::class);
    }
}
