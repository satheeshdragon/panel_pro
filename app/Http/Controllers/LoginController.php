<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
    	// $data['member'] = $this->mem->get_members();
    	$data['users']  = 'data';
        return view('pages.login',$data);
    }

    public function check(Request $request)
    {
    	$name 		= $request->input('name');
    	$password 	= $request->input('password');
    	var_dump($name);
    	var_dump($password);
    	die();
    	// $data['member'] = $this->mem->get_members();
    	$data['users']  = 'data';
        return view('pages.login',$data);
    }
}
