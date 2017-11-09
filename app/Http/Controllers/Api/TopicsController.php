<?php

namespace App\Http\Controllers\Api;

use App\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopicsController extends Controller
{
	public function top()
	{
		return Topic::all();
    }

    public function new()
	{
		return Topic::all();
    }

	public function show($slug)
	{
		return Topic::where('slug', $slug)->firstOrFail();
    }
}
