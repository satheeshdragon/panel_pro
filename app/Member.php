<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function get_members(){
    	// $members = DB::select('select * from members')->toArray();
    	$members = DB::table('members')->get()->toArray();
    	return $members;
    }

    public function get_users(){
    	$users = DB::select('select * from users');
    	return $users;
    }
}
