<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
{
    $this->middleware('auth');
}
    public function index()
    {

        $categories=Category::all();
       return view('control.categories.all',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('control.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file=$request->file('file');
        $this->validate($request,[


'name'=>'required|unique:category,catName',
'file'=>'required'

            ]);

        $path=public_path()."/category";

        if(!empty($file)){

            $newName=rand(1111,9999).".".$file->getClientOriginalName();

if($file->move($path,$newName)){


   Category::create([


'catName'=>$request->get('name'),
'catPic'=>$newName,



    ]);


return redirect('controlcategory');
}



        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category=Category::find($id);


        return view('control.categories.detail',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category=Category::find($id);
        return view('control.categories.edit',compact('category'));
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
        $file=$request->file('file');
       $this->validate($request,[

'name'=>'required'

        ]);



       $category=Category::find($id);



       $category->catName=$request->get('name');

       if(!empty($file)){

unlink(public_path()."/category/".$category->catPic);


$path=public_path()."/category";


$newName=rand(1111,9999).".".$file->getClientOriginalName();

if($file->move($path,$newName)){


    $category->catPic=$newName;
}



       }

$category->save();
       return redirect('controlcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category=Category::find($id);
 unlink(public_path()."/category/".$category->catPic);
        $category->delete();
       return redirect()->back();
    }
}
