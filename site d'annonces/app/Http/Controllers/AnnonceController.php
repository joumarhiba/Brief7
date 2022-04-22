<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AnnonceController extends Controller
{
    public $query ;
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){

        $annonces = Annonce::latest()->paginate(3);
        return view('annonces',['annonces'=>$annonces]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required|max:255',
            'entreprise'=>'required|max:255',
            'ville'=>'required|max:255',
            'description'=>'required',
        ]); 
        Annonce::insert([
            'user_id'=>auth()->user()->id,
            'title'=>$request->title,
            'entreprise'=>$request->entreprise,
            'ville'=>$request->ville,
            'description'=>$request->description,
        ]);
        return back();
}
public function edit($id){
    $data = Annonce::find($id);
    return view('editAnnonce',['data'=>$data]);
}
public function save(Request $request){
    $data = Annonce::find($request->id);
    $data->title = $request->title;
    $data->entreprise = $request->entreprise;
    $data->ville = $request->ville;
    $data->description = $request->description;
    $data->save();
    return redirect('annonces');

}

public function destroy(Annonce $annonce){
    $annonce->delete();
    return back();
}
function search(){
    $query = request()->input('query');
    $annonces = Annonce::where('title','like','%'.$query.'%')->get();
    return view('search')->with('annonces',$annonces);
}

}
