<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // auth()->user()->assignRole('superuser');

        return view('home');
    }

    public function dataUser()
    {
        $data = User::all();
        $title = 'Data User';

        return view('backend.pages.user.index-user', compact('data', 'title'));
    }
}
