<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $fname = 'fady';
        $lname = 'reda';
        // echo $name;
        return view('users/user-name',compact('fname','lname'));
    }

    public function all()
    {
        $users = User::all();
        // print_r($users);
        // var_dump($users);
        // dd($users);
        // dump($users);
        // echo "x";
        // return $users;
        return view('users.all-users',compact('users'));
    }

    public function find()
    {
        return view('users.find-user');
    }

    public function get(Request $request)
    {
        // dd($request->all()); // convert request object to array
        $user = User::findOrFail($request->ID);
        return view('users.find-user-result',compact('user'));

    }
}
