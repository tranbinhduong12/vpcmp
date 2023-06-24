<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayListController extends Controller
{
    public function index()
    {
        return view('pages.PlayList.index');
    }

    public function create()
    {
        return view('pages.PlayList.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('pages.PlayList.show');
    }

    public function edit($id)
    {
        return view('pages.PlayList.edit');
    }

    public function edit2($id)
    {
        return view('pages.PlayList.edit2');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
