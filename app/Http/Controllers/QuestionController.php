<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use App\Models\Question;
use App\Models\Answer;

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
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $question = new Question;
       $text = Arr::get($request["items"],"question");
       $question->text = $text;
       $question->save();
       $answers = Arr::get($request["items"],"answers");
       
       foreach($answers as $answer){
        Log::info($answer);
            $newAnswerArray = [];
            $newAnswerArray['text'] = $answer['text'];
            $answer['correct'] !== false ? $newAnswerArray['correct'] = true : $newAnswerArray['correct'] = false;
            $newAnswerArray['question_id'] = $question->id;
            $question->answers()->create($newAnswerArray);
            
       }
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = \App\Models\Question::findOrFail($id);
        $answers = $question->answers;
        return response()->json([
            'question' => $question,
            'answers' => $answers,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
