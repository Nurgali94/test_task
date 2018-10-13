<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use Validator;

class NewsAddController extends Controller
{
    public function exec(Request $request) {
        
        // $nw = News::find(1);
        // dump($nw->category->name);
        

    	if($request->isMethod('post')){
    		$input = $request->except('_token');
    		$validator = Validator::make($input, [
    												'name'=>'required|max:255|',
    												'description'=>'required'
    											]);
    		if($validator->fails()){
    			return redirect()->route('newsAdd')->withErrors($validator)->withInput();
    		}
    		if($request->hasFile('image')){
	    		$file = $request->file('image');
	    		$input['image'] = $file->getClientOriginalName();
    			$file->move(public_path().'/template/img/our-blog/', $input['image']);
    		}
    		$news = new News();
    		$news->fill($input);
    		//$page->unguard();
    		if($news->save()){
    			return redirect('admin')->with('status', 'Новость создана');
    		}
    	}

    	if(view()->exists('admin.news_add')){
            $cat = Category::all();
    		$data = ['title'=>'Новая новость', 'cat' => $cat];
    		return view('admin.news_add', $data);
    	}
    	abort(404);
    }
}
