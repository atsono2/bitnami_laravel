<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store (Request $request)
    {
        $name = $request->input('name');
        // dd($request->path());
        // dd($request->is('admin/*'));
        // dd($request->fullUrl());
        // dd($request->isMethod('post'));
        // dd($request->all());
        // チェックボックスのオンオフをbooleanで返す
        // dd($request->boolean('isactive'));
        // dd($request->filled('name'));
        $file = $request->file('photo');
        if ($request->file('photo')->isValid()) {
            $path = $request->photo->storeAs('images', 'sample.png');
            return 'OK!';
        }
        return $name;
    }
}
