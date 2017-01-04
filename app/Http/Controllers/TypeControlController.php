<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
class TypeControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $types=Type::all();

       return  view('control.types.all',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('control.types.create');
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

'name'=>'required|unique:type,tStatus',
'file'=>'required'

            ]);




if(!empty($file)){
$path=public_path()."/type";
$newName=rand(1111,9999).'.'.$file->getClientOriginalName();
    if($file->move($path,$newName)){

Type::create([
'tStatus'=>$request->get('name'),
'tPic'=>$newName



    ]);
return redirect('controltype');


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
        $type=Type::find($id);

        return view('control.types.detail',compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $type=Type::find($id);
       return view('control.types.edit',compact('type'));
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

$type=Type::find($id);

$type->tStatus=$request->get('name');

if(!empty($file)){


$path=public_path()."/type";
$newName=rand(1111,9999).".".$file->getClientOriginalName();



    if($file->move($path,$newName)){


unlink(public_path()."/type/".$type->tPic);
$type->tPic=$newName;




    }
}


$type->save();

return redirect('controltype');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $type=Type::find($id);
        unlink(public_path()."/type/".$type->tPic);

        $type->delete();

        return redirect()->back();
    }
}
