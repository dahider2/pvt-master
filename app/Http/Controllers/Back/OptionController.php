<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.option.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.option.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|min:3',
                
            ]);
        $input = $request->all();
        Option::create($input);
        return back()->with('success', 'Bravo! Action reussi.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $options = Option::all();
        //$categories = Category::pluck('name','id')->all();
        //dd($categories);
        return view('admin.option.show',compact('options'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $option = Option::where('id',$id)->first();
        return view('admin.option.edit',compact('option'));
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

        $this->validate($request, [
                'name' => 'required|min:3',
                
            ]);
        $input = $request->all();
        $category = Option::find($id);
        $category->name       = $input['name'];
        $category->save();

        // redirect
            // Session::flash('success', 'Bravo! Action reussi.');
            return Redirect::to('admin/option/show')->with('success', 'Bravo! Action reussi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Option::where('id',$id)->delete ();
       return Redirect::to('admin/option/show')->with('success', 'Bravo! Action reussi.');
    }
}
