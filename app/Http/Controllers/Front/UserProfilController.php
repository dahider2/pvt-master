<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProfilController extends Controller
{
    public function index()
    {

    	return view('profile.chat');
    }

     public function ads()
    {

    	return view('profile.ads');
    }

     public function setting()
    {

    	return view('profile.setting');
    }

}
