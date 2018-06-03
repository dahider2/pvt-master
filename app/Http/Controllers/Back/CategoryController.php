<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	//$categories = Category::all();
        $categories = Category::pluck('name','id')->all();
        //dd($categories);
        return view('admin.category.create', compact('categories','categories'));
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
        $this->validate($request, [
                'name' => 'required|min:3',
                
            ]);
        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        Category::create($input);
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
         $allCategories = Category::all();
        //$categories = Category::pluck('name','id')->all();
        //dd($categories);
        return view('admin.category.show',compact('allCategories','allCategories'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        $allCategories = Category::pluck('name','id')->all();
        // dd($category);
        // $category = DB::select('select * from categories where id = :id', ['id' => $id]);
        return view('admin.category.edit',compact('category','allCategories'));
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
        $category = Category::find($id);
        $category->name       = $input['name'];
        $category->parent_id  = $input['parent_id'];
        $category->save();

        // redirect
            // Session::flash('success', 'Bravo! Action reussi.');
            return Redirect::to('admin/category/show')->with('success', 'Bravo! Action reussi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete ();

        return response ()->json ();
    }
}
