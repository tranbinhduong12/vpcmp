<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordStoreController extends Controller
{
    public function index()
    {
        return view('pages.RecordStore.index');
    }

    public function approve()
    {
        return view('pages.RecordStore.approve');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('pages.RecordStore.edit');
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
