<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\NewUserRequest;
use Illuminate\Pagination\LengthAwarePaginator;


/**
 * User controller
 */
class UserController extends Controller
{
    /**
     * Get the registered users
     * @author Luis Manuel Suárez González
     * @return view users
     */
    public function getUsers()
    {
        $users = User::paginate(5);
        return view('user.users')->with('users', $users);
    }

    /**
     * Adds a new user
     * Adds a new user and performs a redirect to '/users'
     * @return redirect '/users'
     */
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
