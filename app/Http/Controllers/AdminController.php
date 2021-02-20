<?php

namespace App\Http\Controllers;

use App\Exe_Programs;
use App\Kind_of_programs;
use App\Programs;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $programs = Programs::orderBy('updated_at', 'desc')->paginate(9);
        return view('pages.cabinet', ['programs' => $programs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $kind = Kind_of_programs::all();
        return view('pages.trainer.create', ['kind' => $kind]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $programs = new Programs();
        $programs->name = $request->name;
        if ($files = $request->file('image')) {
            $destinationPath = 'images'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $programs->image = $profileImage;
        }
        $programs->description = $request->desc;
        $programs->kind_of_programs = $request->kind;
        $programs->period = $request->period;
        $programs->count_day_in_week = $request->cout_week;
        $programs->price = $request->price;
        $programs->url_for_pay = $request->url_for_pay;
        $programs->save();

        return redirect('/admin/programs');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function details($id)
    {
        $user = User::find(Auth::user()->id);
        $program = Programs::find($id);
        $gif_programs = $program->exe_programs->first();
        $access_to_program = $user->programs;

        return view('pages.details', [
            'program' => $program,
            'gif_programs' => $gif_programs,
            'access_to_program' => $access_to_program
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $programs = Programs::find($id);
        return view('pages.trainer.edit', ['programs' => $programs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $programs = Programs::find($id);
        $programs->name = $request->name;

        if ($files = $request->file('image')) {
            $destinationPath = 'images'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $programs->image = $profileImage;
        }

        $programs->description = $request->desc;
        $programs->kind_of_programs = $request->kind;
        $programs->period = $request->period;
        $programs->count_day_in_week = $request->cout_week;
        $programs->price = $request->price;
        $programs->url_for_pay = $request->url_for_pay;
        $programs->save();

        return redirect('admin/programs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $programs = Programs::find($id);
        $programs->delete();
        $exercises = $programs->exe_programs;
        foreach ($exercises as $s) {
            $s->delete();
        }
        return redirect('admin/programs');
    }

}

