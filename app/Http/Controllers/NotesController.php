<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Note;

class NotesController extends Controller
{
    public function index($date = false){
    	if(!$date){
			$choosed_date = Carbon::now()->toDateString();
			$t = Carbon::now()->format('d F l Y');
    	} else {
    		$choosed_date = $date;
    		$t = Carbon::parse($date)->format('d F l Y');
    	}

    	$obj = Note::where('date', $choosed_date)->first();
    	if(!$obj){
    		$obj = new Note;
    		$obj->date = $choosed_date;
    		$obj->save();
    	}
    	return view('notes',['notes'=>$obj,'date'=>$t]);
    }

    public function store(Request $request){
    	$date = $request->date;
    	$date = Carbon::parse($date)->toDateString();
    	$note = Note::where('date',$date)->first();
    	$row = $request->name;
    	$note->$row = $request->text;
    	$note->save();
    	return 'success';
    }
}
