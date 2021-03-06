<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Fencerail;

class FencerailController extends Controller
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
        $fencerail = 'active';
        return view('admin.layouts.crud.fencerail', compact('fencerail'));
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


      $destinationPath = public_path('/img/Fencerails');
      $thumb_img = Image::make($photo->getRealPath())->resize(540, 375);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $thumb_img2 = Image::make($photo->getRealPath());
      $thumb_img2->save($destinationPath.'/'.$imagename2);

      $data = $request->all();

      if(isset($data['_token'])):
        unset($data['_token']);
      endif;

      $fencerail = new Fencerail;
      $fencerail->project_number = $projectNumber;
      $fencerail->image = $photo;
      $fencerail->image_title = $imagename;
      $fencerail->image_title2 = $imagename2;
      $fencerail->save();

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
