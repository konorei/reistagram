<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Tweet;

class UsersController extends Controller
{
    public function show()
    {
        $name = Auth::user()->name;
        $tweets = Auth::user()->tweets()->orderBy('created_at', 'DESC')->paginate(5);

        return view('users.show')->with(array('name' => $name, 'tweets' => $tweets));
    }
}
