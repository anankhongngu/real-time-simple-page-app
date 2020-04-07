<?php
namespace App\Http\Controllers;

use App\Model\Question;
use Illuminate\Http\Request;
use App\Http\Resources\QuestionResource;

class QuestionController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  QuestionResource::collection(Question::latest()->get());
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // Question::create($request->all());
        $question = new Question;
        $question->title= $request->title;
        $question->slug = str_slug($request->title);
        $question->body = $request->body;
        $question->category_id = $request->category_id;
        $question->user_id = $request->user_id;
        $question->save();

        return response('Created success', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
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
    public function update(Request $request, Question $question)
    {
        //
        // $question->update($request->all());

        $question->update([
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'body' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
        ]);

        return response('Update success', 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
        $question->delete();
        return response(null, 204);
    }
}
