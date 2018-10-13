<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\News;
class IndexController extends Controller
{
    public function exec() {
    	if(view()->exists('site.home')){
    		$news = News::orderBy('created_at', 'desc')->paginate(3);
	        $data = [
	                  'news' => $news
	                  ];
	        return view('site.home', $data);
    	}
    	abort(404);
    }
}
