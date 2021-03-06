<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Gate;

class GateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $gate = 'active';
      return view('admin.layouts.crud.gate', compact('gate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $photo = $request->file('image');
      $name = $request->input('image_title');

      $imagename = $name.'.'.$photo->getClientOriginalExtension();
      $imagename2 = $name.'1.'.$photo->getClientOriginalExtension();
      $projectNumber = $request->input('project_number');


      $destinationPath = public_path('/img/Gates');
      $thumb_img = Image::make($photo->getRealPath())->resize(540, 375);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $thumb_img2 = Image::make($photo->getRealPath());
      $thumb_img2->save($destinationPath.'/'.$imagename2);

      $data = $request->all();

      if(isset($data['_token'])):
        unset($data['_token']);
      endif;

      $gate = new Gate;
      $gate->project_number = $projectNumber;
      $gate->image = $photo;
      $gate->image_title = $imagename;
      $gate->image_title2 = $imagename2;
      $gate->save();

      return redirect()->back()->with("success_status", "Images Uploaded");
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
