<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // generationが1のuser郡を取得
        $users = User::where('generation', 1)->get();
        
        // Session::putをsessionヘルパーに置き換え
        session(['home' => 1]);
        // Session::getをsessionヘルパーに置き換え
        $sessionHome = session('home');

        dd($sessionHome);
        return view('home', compact('users'));
    }

    public function post()
    {
        $user = User::findOrFail(1);
        $user->update(['family_name' => 'ファミリーネーム']);
        $users = User::all();
        return view('home', compact('users'));
    }
}
