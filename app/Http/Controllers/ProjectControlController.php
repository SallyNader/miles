<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectControlController extends Controller
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

        $projects=Project::all();
        return view('control.projects.all',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

                return view('control.projects.create');

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

'region'=>'required',
'file'=>'required'

        ]);


if(!empty($file)){

$path=public_path()."/project";

$newName=rand(1111,9999).'.'.$file->getClientOriginalName();

    if($file->move($path,$newName)){

Project::create([


'pName'=>$request->get('name'),
'pPic'=>$newName,
'pRegion'=>$request->get('region')





    ]);

        return redirect('controlproject');
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
        $project=Project::find($id);
        return view('control.projects.detail',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $project=Project::find($id);
        return view('control.projects.edit',compact('project'));
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
'region'=>'required'



        ]);


$project=Project::find($id);


$project->pName=$request->get('name');
$project->pRegion=$request->get('region');



if(!empty($file)){

$path=public_path()."/project";

$newName=rand(1111,9999).".".$file->getClientOriginalName();
if($file->move($path,$newName)){



unlink(public_path()."/project/".$project->pPic);
$project->pPic=$newName;





}

}

$project->save();


return redirect('controlproject');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        


        $project=Project::find($id);

        unlink(public_path()."/project/".$project->pPic);
        $project->delete();
        return redirect()->back();
    }
}
