<?php

namespace App\Http\Controllers;

use App\Exe_Programs;
use App\Http\Controllers\Controller;
use App\Programs;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExercisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id)
    {
        $programs = Programs::find($id);
        return view('pages.trainer.create_exe', ['programs' => $programs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, $id)
    {
        $programs = Programs::find($id);
        $exercises = new Exe_Programs();

        $isset_number = Exe_Programs::where('number', $request->number)->where('programs_id', $programs->id)->exists();

        if (!($isset_number)) {
            $exercises->number = $request->number;
            $exercises->days_name = $request->days_name;
            $animated_array = array();
            foreach ($request->gif as $g) {
                $files = $g;
                $destinationPath = 'gif'; // upload path
                $profileImage = $files->getClientOriginalName() . "." . date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                array_push($animated_array, $profileImage);
            }

            $exercises->gif = implode('*/', $animated_array);
            $exercises->times = implode('*/', $request->times);
            $exercises->name = implode('*/', $request->name);
            $exercises->description = implode('*/', $request->desc);

            $programs->exe_programs()->save($exercises);

            return redirect('/admin/programs');

        } else {
            return redirect('admin/exercises/create/' . $programs->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */


    public function show( $id)
    {
        $user = User::find(Auth::user()->id);
        $exercises = Exe_Programs::find($id);
        $programs = $exercises->programs;

        $access_to_program = $user->programs;
        return view('pages.show_exercises', [
            'exercises' => $exercises,
            'access_to_program' => $access_to_program,
            'programs' => $programs,
            ]);
    }

    public function all_days($id)
    {
        $user = User::find(Auth::user()->id);
        $programs = Programs::find($id);
        $exercises = $programs->exe_programs;
        $access_to_program = $user->programs;
        return view('pages.all_days', [
            'exercises' => $exercises,
            'programs' => $programs,
            'access_to_program' => $access_to_program
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $exercises = Exe_Programs::find($id);
        $exercises->delete();
        return redirect('admin/programs');

    }
}
