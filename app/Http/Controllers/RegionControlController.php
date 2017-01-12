<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
class RegionControlController extends Controller
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
        $regions=Region::all();

        return view('control.regions.all',compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('control.regions.create');
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

'name'=>'required',
'city'=>'required',
'file'=>'required'

        ]);
       if(!empty($file)){

$path=public_path().'/region';
$newName=rand(1111,9999).'.'.$file->getClientOriginalName();
        if($file->move($path,$newName)){


Region::create([

'rName'=>$request->get('name'),
'rCity'=>$request->get('city'),
'rPic'=>$newName



    ]);

return redirect("controlregion");
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
        $region=Region::find($id);
        return view('control.regions.detail',compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $region=Region::find($id);
        return view('control.regions.edit',compact('region'));
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

'name'=>'required',
'city'=>'required'


            ]);

$region=Region::find($id);


$region->rName=$request->get('name');
$region->rCity=$request->get('city');
if(!empty($file)){

$path=public_path()."/region";
$newName=rand(1111,9999).".".$file->getClientOriginalName();

    if($file->move($path,$newName)){




unlink(public_path()."/region/".$region->rPic);
$region->rPic=$newName;


    }

    $region->save();

    return redirect('controlregion');
}



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region=Region::find($id);

        unlink(public_path()."/region/".$region->rPic);
        $region->delete();
        return redirect()->back();
    }
}
