<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function __invoke()
    {
        $data['posts'] = Post::all();
        return view('client.homepage.index', $data);
    }
}
