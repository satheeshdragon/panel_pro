<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{

	public function __construct() {
        $this->mem = new Member();	
    }

    public function index(Member $member)
    {
    	$data['member'] = $this->mem->get_members();
    	$data['users']  = $this->mem->get_users();
        return view('pages.show',$data);
    }

    public function create()
    {
    	$data = [];
    	$data = extract($_POST);
    	// $name = $request->input('name');
    	// echo $productname = $request->input('name');
    	var_dump($data);
    }
}