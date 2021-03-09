<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reponse ;

class ReponseController extends Controller
{


    public function store(Request $request , $id)
    {
        $reponse = new Reponse();
        $reponse->nom = $request->nom;
        $section->enquete_id  = $id ;
        $reponse->save();

      return response()->json(['status' => 'success', 'data' => $reponse]);
    }

    public function update(Request $request, $id)
    {
        $reponse = Reponse::findOrFail($id);
        $reponse->nom = $request->nom;
        $reponse->enquete_id  = $id ;
        $reponse->save();
        return response()->json(['status' => 'success', 'data' => $reponse]);
    }

    public function get( $id)
    { 
        $reponse= Reponse::where('enquete_id ', $id)->get();
        return $reponse;
    }

    public function delete($id)
    {
        return Reponse::where('id', $id)->delete();
    }
}
