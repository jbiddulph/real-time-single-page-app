<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{

    public function getRouteKeyName() {
        return 'slug';
    }

    // protected $fillable = ['title','slug','body','category_id','user_id'];
    protected $guarded = [];
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
        return $this->hasMany(Reply::class);
    }
    // Category
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function getPathAttribute() {
        return asset("api/question/$this->slug");
    }
}
