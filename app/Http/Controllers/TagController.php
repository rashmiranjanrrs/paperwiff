<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create()
    {
        return view('tag.create');
    }
    public function store()
    {
        $data = request();

        auth()->user()->tags()->create($data);

        dd(reqest()->all());
    }
}
