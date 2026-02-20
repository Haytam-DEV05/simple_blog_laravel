<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    public function create(Request $request)
    {
        $users = new User();
        $users->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return Redirect()->route('admin.users');
    }
    public function del_user(Request $request)
    {
        $user = new User();
        $user->find($request->id)->delete();
        return Redirect()->route('admin.users');
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($data)) {
            return Redirect()->route('admin.users');
        } else {
            return Redirect()
                ->route('login')
                ->with('error' , 'Email or Password is note correct');
        }
    }
}

