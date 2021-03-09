<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie ;

class CategorieController extends Controller
{
    public function store(Request $request)
    {

        $categorie = new Categorie();
        $categorie->nom = $request->nom;
    
        $categorie->save();
      return response()->json(['status' => 'success', 'data' => $categorie]);
      
    }

    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->nom = $request->nom;
        $categorie->save();
        return response()->json(['status' => 'success', 'data' => $categorie]);
    }
    public function delete($id)
    {
        return Categorie::where('id', $id)->delete();
    }
    
}
