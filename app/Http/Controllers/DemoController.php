<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DemoRequest;
use App\Models\Message;

class DemoController extends Controller
{
    public function submit(DemoRequest $req) {
    	$comment = new Message();
    	$comment->name = $req->input('name');
    	$comment->message = $req->input('textMessage');

    	$comment->save();

    	return redirect()->route('demo');
    }

    public function allComments() {
    	$comment = new Message();
    	return view('demo', ['data' => $comment->orderBy('created_at', 'desc')->get()]);
    }
}
