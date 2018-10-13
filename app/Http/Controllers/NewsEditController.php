<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use Validator;

class NewsEditController extends Controller
{
    public function exec(News $news, Request $request){
    	if($request->isMethod('delete')){
    		$news->delete();
    		return redirect('admin')->with('status', 'Новость удалена');
    	}


    	if($request->isMethod('post')){
    		$input = $request->except('_token');
    		$validator = Validator::make($input, [
    												'description'=>'required',
    												'name'=>'required|max:255|'
    											]);
    		if($validator->fails()){
    			return redirect()->route('newsEdit', ['news'=>$input['id']])->withErrors($validator)->withInput();
    		}

    		if($request->hasFile('image')){
    			$file = $request->file('image');
    			$file->move(public_path().'/template/img/our-blog/', $file->getClientOriginalName());
    			$input['image'] = $file->getClientOriginalName();
    		}
    		else{
    			$input['image'] = $input['old_image'];
    		}
    		unset($input['old_image']);
    		$news->fill($input);
    		if($news->update()){
    			return redirect('admin')->with('status', 'Новость редактирована');
    		}

    	}
    	$old = $news->toArray();


    	if(view()->exists('admin.news_edit')){
            $cat = Category::all();
    		$data = [
    				'title'=>'Редактирование новости '.$old['name'],
    				'data'=>$old,
                    'cats' => $news->category->name,
                    'cat' => $cat
    				];
    		return view('admin.news_edit', $data);
    	}
    }
}
