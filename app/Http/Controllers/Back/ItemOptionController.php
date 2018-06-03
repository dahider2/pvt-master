<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ItemOption;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ItemOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories = Category::where('parent_id','!=',0)->pluck('name','id')->all();
        $options = Option::pluck('name','id')->all();

        // dd($options);
        return view('admin.item.create', compact('categories','options'));
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
        
        $input = $request->all();
        //dd($input);
        $option = Option::where('id','=',$input['optionId'])->first();
        //dd($option);
        ItemOption::create([
        'category_id' => $input['id'],
        'name' => $option->name,
]);
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
         $datas = ItemOption::with('category')->get();
        //dd($datas);
        return view('admin.item.show',compact('datas'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $default = ItemOption::with('category')->where('id',$id)->first();
        $options = Option::pluck('name','id')->all();
        return view('admin.item.edit',compact('default','categories','options'));
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

        $input = $request->all();
        $option = Option::where('id','=',$input['optionId'])->first();
        $itemOption = ItemOption::find($id);
        $itemOption->name       = $option->name;
        
        $itemOption->save();

         return Redirect::to('admin/item/show')->with('success', 'Bravo! Action reussi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         ItemOption::where('id',$id)->delete ();
       return Redirect::to('admin/classifier/show')->with('success', 'Bravo! Action reussi.');
    }
}
