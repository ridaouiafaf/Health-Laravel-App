<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        if (!(auth()->check()))
        return view('guests.index');
        else
        return route('admin.posts.index');
    }
}
 