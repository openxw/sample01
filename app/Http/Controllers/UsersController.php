<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Auth;

class UsersController extends Controller
{
    //创建新用户
    public function create()
    {
        return view('users.create');
    }

    //显示用户
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        # code...
        $this->validate($request,[
            'name' => 'required|max:50',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

         $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

         Auth::login($user);
        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        return redirect()->route('users.show', [$user]);
    }

}
