<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class HomeController extends Controller
{
    /**
     * トップページ
     */
    public function index(Request $request)
    {
        $now = Carbon::now()->addMonth();
        return view('home', compact('users', 'now'));
    }

    public function post()
    {
        $users = User::all();
        return view('home', compact('users'));
    }
}
