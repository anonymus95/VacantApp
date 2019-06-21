<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspirant;
class AspirantController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        if($request->hasFile('hv'))
        {
            $file = $request->file('hv');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/documents/',$name);
        }
        $aspirant = new Aspirant();
        $aspirant->name = $request->input('name');
        $aspirant->last_name = $request->input('last_name');
        $aspirant->email = $request->input('email');
        $aspirant->hv = $name;
        $aspirant->save();

        return back();
        
    }
}
