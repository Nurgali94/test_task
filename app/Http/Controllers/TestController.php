<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use DB;
class TestController extends Controller
{
    public function exec($req) {
    	$news= DB::table('news')->where('category_id', $req)->paginate(2);
    	//dd($news);
    	$cat = Category::all();
    	$for_n = News::all();
    	$data = [
    				'news'=>$news,
    				'for_n' => $for_n,
	            	'cat' => $cat
	        	];
    	return view('site.news', $data);
    }
}
