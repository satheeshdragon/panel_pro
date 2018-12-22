<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Session;

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

    public function create(Request $request)
    {
    	   $name = $request->input('form');
           $id   = $this->mem->add_users($name);
           Session::flash('message', 'Inserted SuccessFully'); 
           return redirect()->action('MemberController@index');
    }

    public function update(Request $request)
    {
           $data = $request->input('member');
           $id   = $request->input('this_id');
           $id   = $this->mem->update_users($data,$id);
           Session::flash('message', 'Inserted SuccessFully'); 
           return redirect()->action('MemberController@index');
    }

    public function destroy(Request $request)
    {
           $id   = $request->input('data_id');
           $id   = $this->mem->destroy_users($id);
           Session::flash('message', 'Deleted SuccessFully'); 
           return redirect()->action('MemberController@index');
    }

}