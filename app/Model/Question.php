<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{

    protected static function boot() {
        parent::boot();
        static::creating(function($question) {
            $question->slug = str_slug($question->title);
        });

    }
    public function getRouteKeyName() {
        return 'slug';
    }

    protected $fillable = ['title','slug','body','category_id','user_id','pub_id'];
    //protected $guarded = [];

    protected $with = ['replies'];

    // Pub
    public function pub() {
        return $this->belongsTo(Pub::class);
    }
    // Pubs
    public function pubs() {
        return $this->hasMany(Pub::class);
    }
    // User
    public function user() {
        return $this->belongsTo(User::class);
    }
    // Replies
    public function replies() {
        return $this->hasMany(Reply::class)->latest();
    }
    // Category
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function getPathAttribute() {
        return "question/$this->slug";
    }
}
