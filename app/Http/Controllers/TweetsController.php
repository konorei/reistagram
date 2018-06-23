<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tweet;

class TweetsController extends Controller
{
    public function index()
    {
        $tweets = Tweet::all();

        return view('tweets.index')->with('tweets', $tweets);
    }
    
    public function create()
    {
        $tweet = new Tweet;

       if (\Auth::check()) {
        return view('tweets.create', [
            'tweet' => $tweet,
        ]);
    }else {
            return view('welcome');
        }
    }
    
    
    public function store(Request $request)
    {
        Tweet::create(
            array(
                'name' => $request->name,
                'image' => $request->image,
                'text' => $request->text
            )
        );
        return view('tweets.store');
    }
}