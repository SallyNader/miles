<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
class CountryControlController extends Controller
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
        $countries=Country::all();
        return view('control.countries.all',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

           return view('control.countries.create');
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
'file'=>'required'




        ]);

if(!empty($file)){

$path=public_path()."/country";
$newname=rand(1111,9999).'.'.$file->getClientOriginalName();
    if($file->move($path,$newname)){

Country::create([


'cName'=>$request->get('name'),
'cPic'=>$newname


    ]);



return redirect('controlcountry');

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
       $country=Country::find($id);

       return view('control.countries.detail',compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $country=Country::find($id);
       return view('control.countries.edit',compact('country'));
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

$country=Country::find($id);


if(!empty($file)){
    $path=public_path()."/country";


    $newname=rand(1111,9999).".".$file->getClientOriginalName();

    if($file->move($path,$newname)){

unlink(public_path()."/country/".$country->cPic);
        $country->cPic=$newname;

    }
}
$country->cName=$request->get('name');

$country->save();


return redirect('controlcountry');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       


       $country=Country::find($id);

       unlink(public_path()."/country/".$country->cPic);


       $country->delete();

       return redirect()->back();
    }
}
