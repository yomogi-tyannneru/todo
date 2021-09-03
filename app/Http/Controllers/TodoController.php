<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $items = DB::select('select * from todos');
        return view('index', ['items' => $items]);
    }
    //追加
     public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'age' => $request->age,
            'nationality' => $request->nationality,
        ];
        DB::insert('insert into todos (name, age, nationality) values (:name, :age, :nationality)', $param);
        return redirect('/');
    }
}