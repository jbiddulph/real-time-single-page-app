<?php

namespace App\Http\Controllers;

use App\Model\Pub;
use App\Model\Question;
use Illuminate\Http\Request;
use vendor\symfony;
use App\Http\Resources\QuestionResource;
// use App\Http\Resources\PubResource;
use Symfony\Component\HttpFoundation\Response;

class QuestionController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index','show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pub $pub)
    {
        //
        return QuestionResource::collection($pub->questions);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Pub $pub, Request $request)
    {
        //
        // auth()->user->question($request->all());
        $question = $pub->questions()->create($request->all());
        //Question::create($request->all());
        return response(['created' => new QuestionResource($question)], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Pub $pub, Question $question)
    {
        //
        return new QuestionResource($question);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Pub $pub, Request $request, Question $question)
    {
        //
        $question->update($request->all());
        return response('updated',  Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pub $pub, Question $question)
    {
        //
        $question->delete();
        return response('Deleted', Response::HTTP_NO_CONTENT);
    }
}
