<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use App\Models\Category;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $threads = Thread::with('author','category')->latest()->take(2)->get();
        $title = Category::with('subCategories')
                        ->inRandomOrder()
                        ->take(2)
                        ->get();
        return view('homepage',compact('threads','title'));
    }

   
}
