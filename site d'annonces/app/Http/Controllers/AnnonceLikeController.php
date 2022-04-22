<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnnonceLikeController extends Controller
{
    public function store(Annonce $annonce, Request $request){
    if($annonce->likedBy($request->user())){
        return response(null, 409);
    }

        $annonce->likes()->create([
            'user_id'=>$request->user()->id,
        ]);
        return back();
    }
}
