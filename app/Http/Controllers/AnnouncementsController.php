<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use DB;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcement = Announcement::all();

        return response()->json($announcement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcements/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $announcement = new Announcement();
        // $announcement -> title = $request->input('title');
        // $announcement -> body = $request->input('body');
        // $announcement-> save();
        //     return response()->json([
        //     "code" => 200,
        //     "message" => "announcement added successfully"
        //     ]);

            $this -> validate($request,[
                'title' => 'required',
                'body' => 'required'
            ]);
            
            $announcement = new Announcement();
            $announcement -> title = $request->input('title');
            $announcement -> body = $request->input('body');
            $announcement-> save();
            return redirect('/announcements')->with('success','announcement Created');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement =  Announcement::find($id);
        return response()->json($announcement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
     public function imageUpload()
    {
        return view('imageUpload');
    }

    public function uploadimage(Request $request)
    {
      //check file
    //   $request->validate([
    //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
    // ]);
 
    $imageName = time().'.'.$request->image->extension();  

    $request->image->move(public_path('../img'), $imageName);

    return back()
        ->with('success','You have successfully upload image.')
        ->with('image',$imageName);

}
}
