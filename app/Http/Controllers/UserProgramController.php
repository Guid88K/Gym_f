<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Programs;
use App\User;
use Illuminate\Http\Request;

class UserProgramController extends Controller
{
    public function index()
    {
        $programs = Programs::all();
        $users = User::all();
        return view('pages.user-program', ['users' => $users, 'programs' => $programs]);
    }

    public function store_program_user(Request $request, $id)
    {
        $user = User::find($id);
        $programs = Programs::find($request->programs);

        $user->programs()->attach($programs);
        return redirect('/admin/user-program');
    }

    public function purchased(User $id)
    {
        $user = User::find($id);
        $programs = $user->first()->programs;
        return view('pages.purchased', ['programs' => $programs, 'user' => $user]);
    }

    public function purchased_exercises()
    {

    }
}
