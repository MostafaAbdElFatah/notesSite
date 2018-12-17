<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    //
    public function insert(Request $request,$pageid){

		$this->validate($request,[
    		'note' => 'required'
    	]);
    	$noteModel = new Note;
    	$noteModel->page_id = $pageid;
    	$noteModel->note = $request->note;
    	$noteModel->save();

    	return back();
    }

    public function edit($noteid){
    	$note = Note::find($noteid);
    	return view('pages.editNote',compact('note'));
    }

    public function update(Request $request,$noteid){
    	
    	$this->validate($request,[
    		'note' => 'required'
    	]);
    	$note = Note::find($noteid);
    	if($note) {
    		$note->note = $request->note;
    		$note->save();
		}
    	return redirect('/'. $note->page_id);
    }

    public function delete($id){
    	$note = Note::find($id);
    	$page_id = $note->page_id;
    	$note->delete();
    	return redirect('/'. $page_id);
    }
}
