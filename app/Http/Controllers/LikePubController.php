<?php

namespace App\Http\Controllers;

use App\Model\LikePub;
use Illuminate\Http\Request;
use App\Model\Pub;

class LikePubController extends Controller
{
    public function likePub(Pub $pub){
        $pub->likepub()->create([
            // 'user_id' => auth()->id();
            'user_id' => '1'

        ]);
    }
    public function unLikePub(Pub $pub){
        // $reply->like()->where([user_id,auth()->id()])->first()->delete(); 
        $pub->likepub()->where('user_id', '1')->first()->delete(); 
    }
}