<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Thread;

class DetailPageController extends Controller
{
    //
    public function view(){

        $pagedetails = Category::pluck('name')->first();
        $threadBody = Thread::pluck('detail');
        return view('detailpage',compact('pagedetails','threadBody'));
    }

}
