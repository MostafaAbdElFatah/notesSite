<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Page;
use DB;

class notesController extends Controller
{
    public function show()
    {
    	$pages = DB::table('pages')->get();

        return view('pages.show', compact('pages'));
    }

    public function insert(Request $request){

    	$pageModel = new Page;
    	$pageModel->title = $request->title;
    	$pageModel->notes = "message notes";
    	$pageModel->save();

    	return back();
    }

    public function delete($id){
    	Page::where('id', $id)->delete();
    	return back();
    }
}
