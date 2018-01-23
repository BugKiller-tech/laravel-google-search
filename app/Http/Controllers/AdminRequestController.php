<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RestrictItem;
class AdminRequestController extends Controller
{
    //
    public function index(){
    	// $restricts = RestrictItem::with('getuser')->where('status','=','0')->get();
    	$restricts = RestrictItem::where('status','=','0')->get();
    	return view('admin.restrict.acceptrequest', compact('restricts'));
    }


    public function acceptRequest($id){
		RestrictItem::where('id', $id)->update(['status'=>1]);
	   	return back();
    }

    public function rejectRequest($id){
        RestrictItem::where('id', $id)->delete();
        return back();    
    }
}
