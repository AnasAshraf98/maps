<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function bookmark($place_id){
        auth()->user()->bookmarks()->toggle($place_id);

        return back();
    }

    public function getByUser(){
        $bookmarks=auth()->user()->bookmarks;

        return view('user_bookmarks',compact('bookmarks'));
    }
}
