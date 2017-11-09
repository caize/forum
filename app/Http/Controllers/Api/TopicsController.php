<?php

namespace App\Http\Controllers\Api;

use App\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopicsController extends Controller
{
	private $perPage = 10;

	public function top()
	{
		return Topic::paginate($this->perPage);
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
