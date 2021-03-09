<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section ;
class SectionController extends Controller
{
    public function store(Request $request , $id)
    {
        $section = new Section();
        $section->nom = $request->nom;
        $section->ordre = $request->ordre;
        $section->enquete_id  = $id ;
        $section->save();
      return response()->json(['status' => 'success', 'data' => $section]);
    }

    public function get( $id)
    { 
       
        $section= Section::where('enquete_id ', $id)->get();
      
        return $reponse;
    }
    
    public function update(Request $request, $id)
    {
        $section = Section::findOrFail($id);
        $section->nom = $request->nom;
        $section->ordre = $request->ordre;
        $section->enquete_id  = $id ;
        $section->save();
        return response()->json(['status' => 'success', 'data' => $organisme]);
    }
    public function delete($id)
    {
        return Section::where('id', $id)->delete();
    }
}
