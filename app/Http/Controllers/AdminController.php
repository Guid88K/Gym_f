<?php

namespace App\Http\Controllers;

use App\Kind_of_programs;
use App\Programs;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $programs = Programs::orderBy('updated_at', 'desc')->get();
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


//        $imageName = time() . '.' . $request->image->extension();
//        $programs->image = $imageName;
//        $request->image->move(public_path('images'), $imageName);
//
        $programs->description = $request->desc;
        $programs->kind_of_programs = $request->kind;
        $programs->period = $request->period;
        $programs->count_day_in_week = $request->cout_week;

        $programs->price = $request->price;
//        dd($programs);
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
        $program = Programs::find($id);
        return view('pages.details', ['program' => $program]);
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
