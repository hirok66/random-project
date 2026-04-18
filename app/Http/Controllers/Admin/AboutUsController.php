<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
          $aboutus = AboutUs::all();

        return view('admin.about_us.index',[
            'aboutus'=>$aboutus,

        ]);
    }

    // store

    public function store(Request $request){
        $request->validate([

        'name'=>'required',
        'year'=>'required',
        'title'=>'required',
        'short_des'=>'required',
        'short_des2'=>'required',
         'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',


        ]);


        // 2. Image Handling
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/aboutUs'), $imageName);
        }


        $store= AboutUs::create([
            'name'=>$request->name,
            'year'=>$request->year,
            'title'=>$request->title,
            'short_des'=>$request->short_des,
            'short_des2'=>$request->short_des2,
            'image'=>$imageName,


        ]);

      return back()->with('success', 'Your About Added Successfully!');
    }

    // edit
    // Show the edit form
    public function edit($id)
    {
        $about = AboutUs::findOrFail($id);
        return view('admin.about_us.edit', compact('about'));
    }

    // Update the record (don't forget to add this!)
    public function update(Request $request, $id)
    {
        $about = AboutUs::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'year' => 'required',
            'title' => 'required',
            // image is not 'required' here so you can keep the old one
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($about->image && file_exists(public_path('images/aboutUs/' . $about->image))) {
                unlink(public_path('images/aboutUs/' . $about->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/aboutUs'), $imageName);
            $about->image = $imageName;
        }

        $about->update([
            'name' => $request->name,
            'year' => $request->year,
            'title' => $request->title,
            'short_des' => $request->short_des,
            'short_des2' => $request->short_des2,
            'image' => $about->image, // Keep old or save new
        ]);

        return redirect()->route('about.us.make')->with('success', 'Updated successfully!');
    }

    // Delete the record
    public function delete($id)
    {
        $about = AboutUs::findOrFail($id);

        // Remove image file from folder
        if ($about->image && file_exists(public_path('images/aboutUs/' . $about->image))) {
            unlink(public_path('images/aboutUs/' . $about->image));
        }

        $about->delete();
        return back()->with('success', 'Deleted successfully!');
    }

}
