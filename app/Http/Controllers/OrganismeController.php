<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisme ;
class OrganismeController extends Controller
{

    public function all(Request $request)
    {
        $organisme =  Organisme::all();
      
       return response()->json(['status' => 'success', 'data' => $organisme]);
    }

    public function diactivated_Organisme(Request $request)
    {
        $organisme =  Organisme::where('stat' , 0)->get();
      
       return response()->json(['status' => 'success', 'data' => $organisme]);
    }

    public function activated_Organisme(Request $request)
    {
        $organisme =  Organisme::where('stat' , 1)->get();
      
       return response()->json(['status' => 'success', 'data' => $organisme]);
    }
    public function store(Request $request)
    {
        $organisme = new Organisme;
        $organisme->name = $request->name;
        $organisme->adresse = $request->adresse;
        $organisme->tel = $request->tel;
        $organisme->email = $request->email;
        $organisme->stat = false;
        $organisme->save();
        
      return response()->json(['status' => 'success', 'data' => $organisme]);
    }

    public function update(Request $request, $id)
    {
        $organisme = Organisme::findOrFail($id);
      //  $organisme->nom = $request->nom;
        $organisme->adresse = $request->adresse;
        $organisme->tel = $request->tel;
        $organisme->email = $request->email;
        $organisme->save();
        return response()->json(['status' => 'success', 'data' => $organisme]);
    }

    public function activate (Request $request, $id)
    {
        $organisme = Organisme::findOrFail($id);
     
        $organisme->stat = true;
        $organisme->save();
        return response()->json(['status' => 'success', 'data' => $organisme]);
    }

    public function getOrganisme($id)
    { 
       
        $organisme= Organisme::find($id);
        return response()->json(['status' => 'success', 'data' => $organisme]);
       
    }

    public function delete($id)
    {
        return Organisme::where('id', $id)->delete();
    }
}
