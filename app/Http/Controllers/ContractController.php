<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        return view('pages.contract.index');
    }

    public function create()
    {
        return view('pages.contract.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function createDone()
    {
        return view('pages.contract.create-done');
    }

    public function show(Request $request, $id)
    {
        if ($request->has('list-active')) {
            if ($request->input('list-active') == 'true') {
                return view('pages.contract.show-table');
            }
        }
        return view('pages.contract.show');
    }

    public function edit($id)
    {
        //
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
