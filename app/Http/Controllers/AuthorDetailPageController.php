<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorDetailPageController extends Controller
{
    //
    public function view($id){
            $authordetails = Author::with('category','threads')->findOrFail($id);
        return view('detail_author_page',compact('authordetails'));
    }
}
