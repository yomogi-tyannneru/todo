<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }
    //追加
    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $param = [
            'content' => $request->content,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
        ];
        DB::insert('insert into todos (content, created_at, updated_at) values (:content, :created_at, :updated_at)', $param);
        return redirect('/');
    }
    //更新
   
    public function update(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $param = [
            'id' => $request->id,
            'content' => $request->content,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
        ];
        DB::update('update todos set content =:content, created_at =:created_at, updated_at =:updated_at where id =:id', $param);
        return redirect('/');
    }
    //削除
    public function delete(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from todos where id = :id', $param);
        return view('index', ['form' => $item[0]]);
    }
    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from todos where id =:id', $param);
        return redirect('/');
    }
}