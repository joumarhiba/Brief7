<?php

namespace App\Http\Controllers;

use App\Models\Demandes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemandesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        $demandes = Demandes::paginate(3);
        return view('demandes',[
            'demandes'=>$demandes
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required|max:255',
            'contrat'=>'required|max:255',
            'ville'=>'required|max:255',
            'description'=>'required',
        ]); 
        Demandes::insert([
            'user_id'=>auth()->user()->id,
            'title'=>$request->title,
            'contrat'=>$request->contrat,
            'ville'=>$request->ville,
            'description'=>$request->description,
        ]);
        return back();
    }
    function showData($id){
        $d = Demandes::find($id);
        return view('editDemande',['d'=>$d]);
    }
    public function save(Request $request){
       $d = Demandes::find($request->id);
       $d->title = $request->title;
       $d->contrat = $request->contrat;
       $d->ville = $request->ville;
       $d->description= $request->description;
       $d->save();
       return redirect('demandes');
    }
    public function destroy(Demandes $demande){
        $demande->delete();
        return back();  
    }

    public function search(){
        $query = request()->input('query');
    $demandes = Demandes::where('title','like','%'.$query.'%')->get();
    return view('search2')->with('demandes',$demandes);
    }

}