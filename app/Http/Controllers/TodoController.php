<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    private const PAGE_SIZE = 5;
    /**
     * Display a listing of the resource.
     * Todo一覧を取得
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$todo_list = Todo::paginate(5);
        $todo_list = Auth::user()->todos()->paginate(self::PAGE_SIZE);
        return view('todo/index', compact('todo_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * Todo単体を取得
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {   
        ////すべてのタスクを表示する
        //return view('todo/show', ['todo' => Todo::findOrFail($id)]);
        //指定されたタスクを表示する
        $todo = Auth::user()->todos()->findOrFail($id);
        return view('todo/show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
