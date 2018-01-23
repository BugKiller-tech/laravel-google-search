<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RestrictItem;
use Illuminate\Support\Facades\Auth;

class MakeReportController extends Controller
{
    //
    public function index(){

    	$restricts = RestrictItem::where('user_id','=',Auth::user()->id)->get();

    	return view('admin.normal_admin.report', compact('restricts'));
    }
}
