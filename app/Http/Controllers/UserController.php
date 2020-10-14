<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\NewUserRequest;

class UserController extends Controller
{
    public function getUsers()
    {
        $users = User::all();
        return view('user.users')->with('users', $users);
    }

    public function addUser(NewUserRequest $request)
    {
        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->surname = $request->surname;
        $newUser->email = $request->email;
        $newUser->password = $request->password;
        $newUser->sex = $request->gender;
        $newUser->day = $request->day;
        $newUser->educational_level_id = $request->educational_level;
        $newUser->save();
        return redirect('/users');
    }

}
