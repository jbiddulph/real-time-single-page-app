<?php

namespace App\Http\Controllers;

use App\Model\Likepub;
use Illuminate\Http\Request;
use App\Model\Pub;

class LikePubController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }

    public function likePub(Pub $pub){
        $pub->likepub()->create([
             'user_id' => auth()->id()
            //'user_id' => '1'
        ]);
        broadcast(new LikePubEvent($reply->id, 1))->toOthers;
    }
    public function unLikePub(Pub $pub){
         $pub->likepub()->where('user_id', auth()->id())->first()->delete(); 
        //$pub->likepub()->where('user_id', '1')->first()->delete(); 
        broadcast(new LikePubEvent($reply->id, 0))->toOthers;
    }
}