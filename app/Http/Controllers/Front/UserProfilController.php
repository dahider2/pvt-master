<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProfilController extends Controller
{
    public function index()
    {

    	return view('chat.chat');
    }

     public function ads()
    {

    	return view('chat.ads');
    }

     public function setting()
    {

    	return view('chat.setting');
    }

}
