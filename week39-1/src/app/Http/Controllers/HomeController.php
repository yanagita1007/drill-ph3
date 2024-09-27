<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * トップページ
     */
    public function index(Request $request)
    {
        $users = User::where('generation', 1)->get();
        $user = new User();
        $user->first_name

        $now = Carbon::now();
        return view('home', compact('users', 'now'));
    }

    public function post()
    {
        $users = User::all();
        return view('home', compact('users'));
    }
}
