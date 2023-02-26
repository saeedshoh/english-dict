<?php

namespace App\Http\Controllers;

use App\Models\Dict;
use Illuminate\Http\Request;

class DictController extends Controller
{
    public function index()
    {
        return view('list')->with(['dicts' => Dict::latest()->paginate(100)]);
    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $dict = Dict::create([
            'en' => $request->en,
            'ru' => $request->ru,
        ]);

        return back();
    }

    public function random()
    {
        return view('random')->with(['dict' => Dict::all()->random()]);
    }

    public function latest()
    {
        return view('latest')->with(['dicts' => Dict::latest()->simplePaginate(1)]);
    }

    public function destroy(Dict $dict)
    {
        $dict->delete();
        return back();
    }
}
