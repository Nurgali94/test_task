<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class PagesController extends Controller
{
    public function exec($id) {
      //$id = False;
      if(!$id)
      abort(404);
      if(view()->exists('site.page')){
          $page = News::where('id', strip_tags($id))->first();
          $data = [
                    'page'=>$page
                  ];
          //dd($data);
          return view('site.page', $data);
      }
      else {
        abort(404);
      }
    }
}
