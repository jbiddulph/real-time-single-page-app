<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    // User
    public function user() {
        return $this->belongsTo(User::class);
    }
    // Replies
    public function replies() {
        return $this->hasMany(Reply::class);
    }
    // Category
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
