<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Thread;

class PopularController extends Controller
{
    //
    public function view(){
        $threadLists = Thread::with('author','category.subCategories')->paginate(5);
 
         return view('threadList',compact('threadLists'));
     }
}
