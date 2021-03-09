<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisme ;
class OrganismeController extends Controller
{
    public function store(Request $request)
    {
        $organisme = new Organisme();
        $organisme->nom = $request->nom;
        $organisme->adresse = $request->adresse;
        $organisme->tel = $request->tel;
        $organisme->email = $request->email;
        $organisme->save();
      return response()->json(['status' => 'success', 'data' => $organisme]);
    }

    public function update(Request $request, $id)
    {
        $organisme = Organisme::findOrFail($id);
        $organisme->nom = $request->nom;
        $organisme->adresse = $request->adresse;
        $organisme->tel = $request->tel;
        $organisme->email = $request->email;
        $organisme->save();
        return response()->json(['status' => 'success', 'data' => $organisme]);
    }

    public function get( $id)
    { 
       
        $organisme= Organisme::where('id' , $id)->get();
      
        return $organisme;
    }

    public function delete($id)
    {
        return Organisme::where('id', $id)->delete();
    }
}
