<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
class NewsController extends Controller
{
    public function exec() {
    	if(view()->exists('admin.news')){

	        $news = News::orderBy('created_at', 'desc')->paginate(3);
	        $data = [
	                  'title' => 'Новости',
	                  'news' => $news,
	                  //'category_name' => $news->category->name,
	                  ];
	        return view('admin.news', $data);
	    }
	    abort(404);
    }
}
