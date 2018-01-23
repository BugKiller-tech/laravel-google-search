<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RestrictItem;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class RestrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$categories = Category::all();
        $restricts = RestrictItem::where('status','=','1')->orderBy('url','asc')->paginate(10);

        return view('admin.restrict.index', compact('restricts'));
//        return view('admin.restrict.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $rule = [
            'url'=>'required| unique:restrict_items'
        ];

        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {
            return redirect()->route('restrict.index')->withErrors($validator);
        }

        if(Auth::user()->top==1){
             RestrictItem::create(array_merge($request->all(), ['user_id' => Auth::user()->id, 'status'=>1]));

        }else{
            RestrictItem::create(array_merge($request->all(), ['user_id' => Auth::user()->id]));
        }
        
        return back();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        RestrictItem::find($id)->delete();
        return back();
    }
}
