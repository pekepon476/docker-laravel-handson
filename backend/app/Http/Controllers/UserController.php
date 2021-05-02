<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // DBよりUserテーブルの値を全て取得
        $users = User::all();

        // 取得した値をビュー「user/index」に渡す
        return view('user/index', compact('users'));
    }

    public function edit($id)
    {
        // DBよりURIパラメータと同じIDを持つUserの情報を取得
        $user = User::findOrFail($id);

        // 取得した値をビュー「book/edit」に渡す
        return view('user/edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->PS_ID = $request->PS_ID;
        $user->PS = $request->PS;
        $user->name = $request->name;
        $user->save();

        return redirect("/user");
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect("/user");
    }

    public function create()
{
    // 空の$bookを渡す
    $user = new User();
    return view('user/create', compact('user'));
}

public function store(Request $request)
{
    $user = new User();
    $user->PS_ID = $request->PS_ID;
    $user->PS = $request->PS;
    $user->name = $request->name;
    $user->save();

    return redirect("/user");
}
}