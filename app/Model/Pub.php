<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Pub extends Model
{

    // public function getRouteKeyName() {
    //     return 'slug';
    // }
    // questions
    public function questions() {
        return $this->hasMany(Question::class);
    }
    // protected $fillable = ['title','slug','body','category_id','user_id'];
    protected $guarded = [];
    // Question
    public function question() {
        return $this->belongsTo(Question::class);
    }
    public function pub() {
        return $this->belongsTo(Pub::class);
    }
    // User
    public function user() {
        return $this->belongsTo(User::class);
    }
    // // Replies
    // public function replies() {
    //     return $this->hasMany(Reply::class);
    // }
    
    // // Category
    // public function category() {
    //     return $this->belongsTo(Category::class);
    // }

    public function getPathAttribute() {
        return asset("api/pub/$this->slug");
    }
}
