<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Userpage;
use App\Models\Replypost;
use App\Models\Topic;
use App\Models\Subtopic;

class Voicepost extends Model
{
    use HasFactory;

    public function userpage()
    {
        return $this->belongsTo(Userpage::class);
    }
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
    public function subtopic()
    {
        return $this->belongsTo(Subtopic::class);
    }
    public function replypost() 
    {
        return $this->hasMany(Replypost::class);
    }

    public function like()
    {
        return $this->hasMany(Like::class);
    }
}
