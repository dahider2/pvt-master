<?php

namespace App\Http\Controllers;
use App\Models\producecategory;
use Illuminate\Http\Request;

class producecategoryController extends Controller
{

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $allCategories = ProduceCategory::all();
        $Categories = ProduceCategory::pluck('name','id')->all();
        //dd($categories);
        return view('admin.producecategory.show',compact('Categories','allCategories'));
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public $allCategories;

       public function create()
    {
         $allCategories = ProduceCategory::pluck('name','id')->all();
        //dd($categories);
        return view('admin.producecategory.create',compact('allCategories'))->with('success', 'Please Add a produce');
        
    }
    
  

     public function store(Request $request)
    {
        
        $this->validate($request, [
                'name' => 'required|min:3',
                
            ]);
        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        
        ProduceCategory::create($input);
        return back()->with('success', 'Bravo! Action reussi.');

        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = ProduceCategory::find(1)->where('id','=',$id);
        return view('admin.producecategory.edit')->withCategories();
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
        
        $categories =ProduceCategory::pluck('name','id')->all(); ;
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
    }
}
