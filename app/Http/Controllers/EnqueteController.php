<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquete ;
class EnqueteController extends Controller
{
    public function store(Request $request)
    {
        $enquete = new Enquete();
        $enquete->nom = $request->nom;
        $enquete->is_model = $request->is_model;
        $enquete->note = $request->note;
        $enquete->categorie_id = $request->categorie_id ;
        $enquete->save();
      return response()->json(['status' => 'success', 'data' => $organisme]);
    }


    public function update(Request $request, $id)
    {
        $enquete = Enquete::findOrFail($id);
        $enquete->nom = $request->nom;
        $enquete->is_model = $request->is_model;
        $enquete->note = $request->note;
        $enquete->categorie_id = $request->categorie_id ;
        $enquete->save();
        $organisme->save();
        return response()->json(['status' => 'success', 'data' => $organisme]);
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
