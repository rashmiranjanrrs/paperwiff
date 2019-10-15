<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function create()
    {
        return view('story.create');
    }
    public function store()
    {
        $data = request();

        auth()->user()->stories()->create($data);

        dd(reqest()->all());
    }
}
