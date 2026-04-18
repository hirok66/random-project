<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\about_us_text;
use Illuminate\Http\Request;

class AboutUs_Copy_Controller extends Controller
{
    public function index()
    {
        $about_us_text = about_us_text::all();
        return view('admin.about_us_Copy.index', [

            'about_us_text' => $about_us_text,
        ]);
    }

    // store
public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'desc' => 'required',
    ]);

    about_us_text::create([
        'title' => $request->title,
        'desc' => $request->desc, // ✅ FIXED
        'status' => 'active',
    ]);

    return back()->with('success', 'Your About Added Successfully!');
}


    // status
     public function status($id)
{
    $about = about_us_text::findOrFail($id);

    if ($about->status == 'active') {
        $about->status = 'inactive';
    } else {
        $about->status = 'active';
    }

    $about->save();

    return back()->with('success', 'Status updated successfully!');
}

    // edit
    // Show the edit form
    public function edit($id)
    {
        $about = about_us_text::findOrFail($id);
        return view('admin.about_us_Copy.edit', compact('about'));
    }

    // Update the record (don't forget to add this!)
    public function update(Request $request, $id)
    {
        $about = about_us_text::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        $about->update([
        'title' => $request->title,
        'desc' => $request->desc, // ✅ FIXED

        ]);

         return back()->with('success', 'Status updated successfully!');
    }

    // Delete the record
    public function delete($id)
    {
        $about = about_us_text::findOrFail($id);

        // Remove image file from folder
        if ($about->image && file_exists(public_path('images/aboutUs/' . $about->image))) {
            unlink(public_path('images/aboutUs/' . $about->image));
        }

        $about->delete();
        return back()->with('success', 'Deleted successfully!');
    }
}
