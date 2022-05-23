<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;

class HomeController extends Controller
{
    public function index(){
        $todos = todo::all();
        return view('home', compact('todos'));
    }

    public function show($id){
        $todos = todo::find($id);
        return view('show', compact('todos'));
    }

    public function store(Request $request){
        $todo= new Todo();
        $todo -> todo_name = $request -> name;
        $todo -> description = $request -> description;
        $todo -> save();
        $request -> session()->flash('success','todo created successfully');
        return redirect() -> route("home");
    }

    public function edit($id){
        $todos = todo::find($id);
        return view('edit', compact('todos'));
    }

    public function update(Request $request, $id){
        $todos = todo::find($id);
        $todos -> todo_name = $request -> name;
        $todos -> description = $request -> description;
        $todos -> save();
        $request -> session()->flash('success','todo edited successfully');
        return redirect() -> route("home");

    }


    public function destroy($id){
        $todo = todo::find($id);
        $todo -> delete();
        session()->flash('success','todo deleted successfully');
        return redirect() -> route("home");
    }
}
