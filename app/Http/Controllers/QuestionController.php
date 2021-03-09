<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question ;
class QuestionController extends Controller
{
    public function store(Request $request , $id)
    {
        $question = new Question();
        $question->ordre = $request->ordre;
        $question->type = $request->type;
        $question->reponse = $request->reponse;
        $question->question = $request->question;
        $question->text = $request->text;
        $question->choix_unique = $request->choix_unique;
        $question->choix_multiple= $request->choix_multiple;
        $question->date = $request->date;
        $question->numerique= $request->numerique;
        $question->section_id = $id;
        $question->save();
      return response()->json(['status' => 'success', 'data' => $question]);
    }

    public function update(Request $request, $id)
    {
        $question = Enquete::findOrFail($id);
        $question->ordre = $request->ordre;
        $question->type = $request->type;
        $question->reponse = $request->reponse;
        $question->question = $request->question;
        $question->text = $request->text;
        $question->choix_unique = $request->choix_unique;
        $question->choix_multiple= $request->choix_multiple;
        $question->date = $request->date;
        $question->numerique= $request->numerique;
        $question->section_id = $id;
        $question->save();
        return response()->json(['status' => 'success', 'data' => $question]);
    }


    public function get( $id)
    { 
       
        $question= Question::where('section_id ', $id)->get();
      
        return $question;
    }

    public function delete($id)
    {
        return Question::where('id', $id)->delete();
    }
}
