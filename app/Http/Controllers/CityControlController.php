<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Country;
class CityControlController extends Controller
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

        $cities=City::all();
      return view('control.cities.all',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
$countries=Country::all();
        return view('control.cities.create',compact('countries'));
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

$path=public_path()."/city";
$newname=rand(1111,9999).'.'.$file->getClientOriginalName();



    if($file->move($path,$newname)){


        City::create([


'cityName'=>$request->get('name'),
'cityPic'=>$newname,
'cityCountry'=>$request->get('country')


            ]);



return redirect('controlcity');

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
       $city=City::find($id);

       return view('control.cities.detail',compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city=City::find($id);
        $countries=Country::all();
       return view('control.cities.edit',compact('city','countries'));
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
       

       $this->validate($request,[

'name'=>'required',



        ]);

       $file=$request->file('file');

       $city=City::find($id);


       $city->cityName=$request->get('name');
       $city->cityCountry=$request->get('country');

       if(!empty($file)){


$path=public_path()."/city";
$newname=rand(1111,9999).".".$file->getClientOriginalName();

if($file->move($path,$newname)){}
unlink(public_path()."/city/".$city->cityPic);


$city->cityPic=$newname;

       }

       $city->save();

       return redirect('controlcity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $city=City::find($id);


        unlink(public_path().'/city/'.$city->cityPic);
        $city->delete();


        return redirect()->back();
    }
}
