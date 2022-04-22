<?php

namespace App\Http\Controllers;

use App\Models\Demandes;
use Illuminate\Http\Request;

class DemandeLikeController extends Controller
{
    public function store(Demandes $demande, Request $request){
        if($demande->likedBy($request->user())){
            return response(null, 409);
        }
    
            $demande->likes()->create([
                'user_id'=>$request->user()->id,
            ]);
            return back();
        }
}
