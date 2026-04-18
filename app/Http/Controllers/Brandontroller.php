<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Intervention\Image\Colors\Rgb\Channels\Red;

class Brandontroller extends Controller
{
    public function index()
    {

        $brands = Brand::latest()->paginate(10);
        return view('admin.brand.index', [
            'brands' => $brands,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2. Image Handling
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/brand/'), $imageName);
        }

        $brand =  Brand::create([
            'name' => $request->name,
            'status' => 'active',
            'image' => $imageName,

        ]);

        return back()->with('success', 'Your brand added successfully!');
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);

        return view('admin.brand.edit', [
            'brand' => $brand,
        ]);
    }


      public function update(Request $request, $id)
{
    $brand = Brand::findOrFail($id);

    $request->validate([
        'name' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Update name
    $brand->name = $request->name;

    // Update image if uploaded
    if ($request->hasFile('image')) {

        // delete old image
        if ($brand->image && file_exists(public_path('images/brand/' . $brand->image))) {
            unlink(public_path('images/brand/' . $brand->image));
        }

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/brand'), $imageName);

        $brand->image = $imageName;
    }

    $brand->save();

    return redirect()->route('brand.index')->with('success', 'Brand updated successfully!');
}

public function status($id)
{
    $brand = Brand::findOrFail($id);

    $brand->status = $brand->status == 'active' ? 'inactive' : 'active';
    $brand->save();

    return back()->with('success', 'Status updated successfully!');
}

public function delete($id)
{
    $brand = Brand::findOrFail($id);

    // delete image if exists
    if ($brand->image && file_exists(public_path('images/brand/' . $brand->image))) {
        unlink(public_path('images/brand/' . $brand->image));
    }

    // delete record
    $brand->delete();

    return back()->with('success', 'Brand deleted successfully!');
}


}
