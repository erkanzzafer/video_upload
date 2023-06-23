<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //

    public function upload(Request $request){
      //  dd($request);
        $request->validate([
            'video' => 'required|mimes:mp4,ogx,oga,ogv,webm'
        ]);

        $file=$request->file('video');
        $file->move('upload',$file->getClientOriginalName());
         $file_name=$file->getClientOriginalName();

         $insert=new video();
         $insert->video=$file_name;
         $insert->save();
         return redirect()->route('video.videos');
    }

    public function show(){
        $data=video::all()->toArray();
        return view('video.videos',compact('data'));
    }
}
