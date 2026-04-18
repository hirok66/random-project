<?php

namespace App\Http\Controllers;

use App\Models\AboutUSVideo;
use Illuminate\Http\Request;

class AboutUSVideCOntroller extends Controller
{
    public function index()
    {
        $AboutUSVideo= AboutUSVideo::all();
        return view('admin.about_us.video.index',[
            'AboutUSVideo'=>$AboutUSVideo,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|file|mimes:mp4,webm,ogg|max:307200',
            'link'  => 'required|url',
        ]);


        // 2. Image Handling
        $videoName = null;
        if ($request->hasFile('video')) {
            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('video/about'), $videoName);
        }
                AboutUSVideo::create([
                    'link'=>$request->link,
                    'video'=>$videoName,
                    'status'=>'active',

                ]);
                return back()->with('success','your video Uploade!');

    }

    public function edit($id){

    $video=  AboutUSVideo::find($id);

     return view('admin.about_us.video.edit',[
            'video'=>$video,
        ]);

    }

public function update(Request $request, $id)
{
    $video = AboutUSVideo::findOrFail($id);

    // যদি ভিডিও আপলোড করা হয়
    if ($request->hasFile('video')) {

        $file = $request->file('video');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('video/about/'), $filename);

        $video->video = 'video/about/' . $filename;
    }

    // যদি link দেওয়া হয়
    if ($request->filled('link')) {
        $video->link = $request->link;
    }

    $video->save();

    return redirect()->back()->with('success', 'Updated successfully!');
}
public function delete($id)
{
    $video = AboutUSVideo::findOrFail($id);

    // video file delete
    if ($video->video && file_exists(public_path($video->video))) {
        unlink(public_path($video->video));
    }

    // database delete
    $video->delete();

    return redirect()->back()->with('success', 'Deleted successfully!');
}
}
