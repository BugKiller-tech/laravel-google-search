<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SearchWord;
class SearchKeywordsController extends Controller
{
    //
    public function viewall(){
    	$keywords = SearchWord::orderBy('id','desc')->paginate(10);
    	return view('admin.searchkeywords.search_keywords', compact('keywords'));
    }

    public function freqview(){
    	$keywords = SearchWord::orderBy('search_count','desc')->paginate(10);
    	return view('admin.searchkeywords.freq_keywords', compact('keywords'));
    }
}
