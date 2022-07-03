<?php

namespace App\Http\Controllers;

use App\Models\murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index(){
        $murid = Murid::all();
        return view('murid.index',compact(['murid']));
    }

    public function create()
    {
        return view('murid.create');
    }

    public function store(Request $request)
    {
        murid::create($request->except(['_token','submit']));
        return redirect('/murid');
    }
    public function edit($id)
    {
        $murid = murid::find($id);
        return view('murid.edit',compact(['murid']));
    }
    public function update($id, Request $request)
    {
        $murid = murid::find($id);
        $murid->update($request->except(['_token', 'submit']));
        return redirect('/murid');
    }
    public function destroy($id)
    {
        $murid = murid::find($id);
        $murid->delete();
        return redirect('/murid');
    }
}