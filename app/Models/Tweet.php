<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    public function user()
    {
        // ツイートは常に一人の投稿者に属する。
        return $this->belongsTo(User::class);
    }
}
