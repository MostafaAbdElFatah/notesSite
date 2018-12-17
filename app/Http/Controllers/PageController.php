<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Page;
use DB;

class PageController extends Controller
{
    public function show()
    {
    	//$pages = DB::table('pages')->get();
    	$pages = Page::all();
        return view('pages.show', compact('pages'));
    }

    public function insert(Request $request){

    	$this->validate($request,[
    		'title' => 'required'
    	]);
    	$pageModel = new Page;
    	$pageModel->title = $request->title;
    	$pageModel->save();

    	return back();
    }

    public function delete($id){
    	$page = Page::find($id);
    	$page->delete();
    	$page->notes()->delete();
    	return back();
    }

     public function showPage($id){
    	$page = Page::find($id);
    	return view('pages.showPage',compact('page'));
    }
    
}
