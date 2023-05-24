<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        
        $results = Article::where('title', 'like', '%'.$keyword.'%')
                            ->orWhere('heading', 'like', '%'.$keyword.'%')
                            ->orWhere('details', 'like', '%'.$keyword.'%') 
                            ->get();
        
        return view('search', ['results' => $results])->with('i',(request()->input('page', 1) -1) *20);
    }
}