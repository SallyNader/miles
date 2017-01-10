<?php

namespace App\Http\Controllers;
use App\Country;
use App\City;
use App\Region;
use App\Unit;
use Auth;
use DateTime;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserUploadUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries=Country::all();

        $cities=City::all();
$regions=Region::all();

        return view('user.uploadUnit',compact('countries','regions','cities'));
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







'code'=>'required|numeric|unique:units,uCode',

'rooms'=>'required|numeric',
'area'=>'required|numeric',
'land'=>'required|numeric',
'currency'=>'required',
'price'=>'required|numeric',
'bedrooms'=>'required|numeric',
'bathrooms'=>'required|numeric',
'charge'=>'required|numeric',
'unittype'=>'required',
'furnished'=>'required',
'project'=>'required',
'file'=>'required'




        ]);



       if(!empty($file)){
$now = new DateTime();
$path=public_path()."/unit";
$newName=rand(1111,9999).".".$file->getClientOriginalName();

if($file->move($path,$newName)){

    Unit::create([

'uCode'=>$request->get('code'),

'uFirstImage'=>$newName,

'uType'=>$request->get('unittype'),

'uNRooms'=>$request->get('rooms'),

'uAreaSQM'=>$request->get('area'),
'uLandArea'=>$request->get('land'),
'uFurnished'=>$request->get('furnished'),
'uParking'=>$request->get('parking'),
'uPriceType'=>$request->get('currency'),
'uPrice'=>$request->get('price'),
'uNBedRooms'=>$request->get('bedrooms'),
'uNBathRooms'=>$request->get('bathrooms'),
'uYearlyServiceCharge'=>$request->get('charge'),
'uDescription'=>$request->get('description'),
'uCountry'=>$request->get('country'),
'uTypeStatus'=>$request->get('status'),
'uCategory'=>$request->get('category'),

'uCity'=>$request->get('city'),
'uRegion'=>$request->get('region'),
'uProject'=>$request->get('project'),

'uInsertedByUserId'=>Auth::user()->id,
'uApproved'=>'0',
'uDate'=>$now->format('Y-m-d'),




        ]);

}





       }
       return redirect('home');
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
    }
}
