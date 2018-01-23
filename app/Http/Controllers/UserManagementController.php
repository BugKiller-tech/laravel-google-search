<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserManagementController extends Controller
{
    //
    public function showRequests(){

    	$users = User::where('active','=','0')->get();
    	return view('admin.users.requestlist', compact('users'));
    }

    public function acceptUser($id){
    	
    	User::where('id', $id)->update(['active'=>1]);
	   	return back();
    }
}
