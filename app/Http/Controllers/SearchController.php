<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Kind_of_programs;
use App\Programs;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function sort(Request $request)
    {
        $programs = Programs::where('kind_of_programs', 'like', $request->kind)->orderBy('updated_at', 'desc')->get();
        return view('pages.cabinet', ['programs' => $programs]);
    }

    public function search(Request $request)
    {
        $programs = Programs::where('name', 'like', '%' . $request->search . '%')->orderBy('updated_at', 'desc')->get();
        return view('pages.cabinet', ['programs' => $programs]);
    }

    public function search_url(Request $request)
    {
        $programs = Programs::where('url_for_pay', 'like', '%' . $request->search_url . '%')->orderBy('updated_at', 'desc')->get();
        return view('pages.cabinet', ['programs' => $programs]);
    }
}
