<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function get_members(){
    	$members = DB::table('members')->get()->toArray();
    	return $members;
    }

    public function get_users(){
    	$users = DB::select('select * from users');
    	return $users;
    }

    public function add_users($values){
    	$users 	= DB::table('users')->insert($values);
    	$id 	= DB::getPdo()->lastInsertId();;
    	return $id;
    }

    public function update_users($data,$id){
    	$users 	= DB::table('users')->where('id', $id)->update($data);
    	$id 	= DB::getPdo()->lastInsertId();;
    	return $id;
    }

    

    public function destroy_users($id)
    {
    	DB::table('users')->delete($id);
    }


}
