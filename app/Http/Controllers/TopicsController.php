<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function show($slug)
	{
		$topic = Topic::where('slug', $slug)->firstOrFail();

		return view('topics.show', compact('topic'));
	}
}
