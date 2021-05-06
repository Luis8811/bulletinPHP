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
     * Get the registered users in a JSON
     * @author Luis Manuel Suárez González
     * @return JSON of users
     */
    public function users()
    {
        return response()->json(User::all(), 200);
    }

    /**
     * Get the females
     * @author Luis Manuel Suárez González
     * @return JSON of female users
     */
    public function females()
    {
        return response()->json(User::where('sex', 'f')->get(), 200);
    }

    /**
     * Get the males
     * @author Luis Manuel Suárez González
     * @return JSON of male users
     */
    public function males()
    {
        return response()->json(User::where('sex', 'm')->get(), 200);
    }


    /**
     * Get the specified user
     * @author Luis Manuel Suárez González
     * @return JSON of the specified user
     */
    public function user($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response(['Message'=>'User not found!'], 404);
        }
        return response()->json(User::find($id), 200);
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
