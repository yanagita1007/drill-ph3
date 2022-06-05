<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // generationが1のuser郡を取得
        $users = User::where('generation', 1)->get();
        return view('home', compact('users'));
    }

    public function post()
    {
        return "OK";
    }
}
