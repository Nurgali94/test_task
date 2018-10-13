<?php

namespace App\Http\Controllers;
use App\News;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function exec(Request $request) {
    	$cats = Category::find(1);
        $ns = $cats->news;
        foreach ($ns as $new) {
            echo $new->name;
        }
    }
}
