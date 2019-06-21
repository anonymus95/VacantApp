<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacant;

class VacantController extends Controller
{
    public function create()
    {
        return view('vacant.create');
    }

    public function store(Request $request)
    {
        $vacant = new Vacant();
        $vacant->name = $request->input('name');
        $vacant->description = $request->input('description');
        $vacant->started_at = $request->input('started_at');
        $vacant->finished_at = $request->input('finished_at');
        $vacant->estate = $request->input('estate');
        $vacant->save();

        return back();
    }
}
