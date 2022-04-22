<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
 function search(Request $request){
     return view('annonces');
 }
}
