<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JanDrda\LaravelGoogleCustomSearchEngine\LaravelGoogleCustomSearchEngine;
use App\RestrictItem;

use App\SearchWord;

class SearchController extends Controller
{
    // private $startWith;
    //



    public $resultsCountPerOneRequest=15;


    public function homeIndex(){
        return view('search.index');
    }


    public function index(){
    	return view('search.search_result');
    }


    public function search(Request $request){

        // return $request->all();

    	$this->validate($request, [
    		'search_word'=> 'required'
		  ]);



    	$search_word = $request->search_word;

        // saving search keyword to database.
        //

        $findKeyInDb = SearchWord::where('keyword',$search_word)->first();

        if($findKeyInDb){
            $findKeyInDb->search_count++;
            $findKeyInDb->update();
        }else{
            $save_search = new SearchWord;
            $save_search->keyword = $search_word;
            $save_search->ip = $request->ip();
            $save_search->search_count = 1;
            $save_search->save();
        }



        //  ////////////////////

        $i=1;
        // $results = $this->makeResult($i, $search_word);
        $results = $this->makeResult($i, $search_word);

        while(true){
            $i=$i+10;
            $results=array_merge($results, $this->makeResult($i, $search_word));
            $results = array_values($results); // reindex the array (4)

            if(count($results)> $this->resultsCountPerOneRequest)
                break;
            if($i>150) break;
        }

        $startPos=$i+10;
    	return view('search.search_result', compact('results','search_word','startPos'));
    }




    public function makeResult($startPos, $search_word){
        $parameters = array(
            'start' => $startPos,  // start from the 10th results,
            'num' => 10 // number of results to get, 10 is maximum and also default value
        );
        $fulltext = new LaravelGoogleCustomSearchEngine(); // initialize
        $results = $fulltext->getResults($search_word, $parameters);

        foreach ($results as $key => $row) { //2
            if(RestrictItem::havetoRemove($row->link)){
                 unset($results[$key]);  //3
            }
        }
        $results = array_values($results); // reindex the array (4)
        return $results;
    }


    public function moreResult(Request $request){

        //return $request->search_word."---".$request->startPos;
        $search_word = $request->search_word;
        $i=$request->startPos;

        if($search_word==""){
            return ['results'=>'', 'startPos'=>$i];
        }


        $results = $this->makeResult($request->startPos, $search_word);


        // return response(['results' => $results, 'startPos'=>$startPos]);

        while(true){
            $i=$i+10;
            $results=array_merge($results, $this->makeResult($i, $search_word));
            $results = array_values($results); // reindex the array (4)

            if(count($results)>$this->resultsCountPerOneRequest)
                break;
            if($i>150) break;
        }
        $startPos = $i+10;
        return ['results'=>$results, 'startPos'=>$startPos];

    }



//this functions is dummy function for testing ////////////
    public function test(Request $request){

         //return RestrictItem::where('status'=>'1');
        return RestrictItem::where('status','=', '1')->get();
    }

    public function testSearch(){
        $fulltext = new LaravelGoogleCustomSearchEngine(); // initialize
        $results = $fulltext->getResults('google');
        return $results;
    }
////////////////////////////



}
