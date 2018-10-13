<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
class AllPagesController extends Controller
{
    public function exec() {
    	if(view()->exists('site.news')){
    		$cat = Category::all();
    		$for_n = News::all();
	        $news = News::orderBy('created_at', 'desc')->paginate(3);
	        $data = [
	                  'news' => $news,
	                  'for_n' => $for_n,
	                  'cat' => $cat
	                  ];
	        return view('site.news', $data);
	    }
	    abort(404);
    }
}
