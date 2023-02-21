<?php

namespace App\Http\Controllers;

use App\Lists;
use Illuminate\Http\Request;

class ListController extends Controller
{
    /*
    public function create(){
        return view('list.create');
    }
    */

    public function update(Request $request, Lists $list)
    {
        $request->validate([
            'name' => 'required',
            'origin' => 'required',
            'lang' => 'required',
        ]);
        
        $list->fill($request->post())->save();

        return redirect()->back()->with('success','Liste mis a jour');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'origin' => 'required',
            'lang' => 'required',
        ]);
        
        Lists::create($request->post());

        return redirect()->back()->with('success','La liste a été créé.');
    }
}
