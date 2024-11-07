<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use App\Models\Category;

class ThreadlistController extends Controller
{
    //
    public function view($id){
       $threadLists = Thread::with('author','category.subCategories')->get();

       $mainCategory = null;
        if($id == 1){
            $mainCategory = Category::whereNull('parent_id')->first();
        }else{
            $mainCategory = Category::whereNull('parent_id')->get()->last();
        };

        return view('threadList',compact('threadLists','mainCategory'));
    }
}
