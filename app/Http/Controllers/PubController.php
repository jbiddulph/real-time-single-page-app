<?php

namespace App\Http\Controllers;

use App\Model\Pub;
use Illuminate\Http\Request;
use vendor\symfony;
use App\Http\Resources\PubResource;
use Symfony\Component\HttpFoundation\Response;


class PubController extends Controller {
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
     * @return Response
     */
    public function index()
    {
        //
        return PubResource::collection(Pub::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
        Pub::create($request->all());
        return response('Created', Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Pub $pub)
    {
        //
        return new PubResource($pub);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Pub $pub)
    {
        //
        $pub->update($request->all());
        return response('updated',  Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Question $question)
    {
        //
        $pub->delete();
        return response('Deleted', Response::HTTP_NO_CONTENT);
    }

}
