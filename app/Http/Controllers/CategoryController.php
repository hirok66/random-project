<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    /**
     * Show the Admin Dashboard with categorys
     */
   public function index()
    {
        // Fetch categorys ordered by last_seen descending, 10 per page
        $categorys = Category::orderBy('id', 'desc')->paginate(10);

        // Pass categorys to admin.dashboard view
        return view('admin.categorys.index', [
            'categorys' => $categorys
        ]);
    }

    // create category form
    public function create()
    {
        $categorys = Category::orderBy('id', 'desc')->paginate(10);
        return view('admin.categorys.index',
        [
            'categorys'=>$categorys,
        ]);
    }
    // store category
   public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);



    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.webp';
   $file->move(public_path('uploads'), $filename);
    }


        Category::create([
            'name'   => $request->name,
            'image'  => $filename,
            'status' => 'active',
        ]);
        return response()->json(['message' => 'Category created successfully']);


}



    // updateStatus
    public function updateStatus(Request $request)
    {


        $category = Category::findOrFail($request->id);
        $category->status = $request->status;
        $category->save();

        return response()->json(['success' => true]);

    }

// fetch
public function fetch(Request $request) {
    $search = $request->search;

    $categorys = Category::when($search, function($query) use ($search) {
        $query->where('name', 'LIKE', "%{$search}%")
              ->orWhere('status', 'LIKE', "%{$search}%");
    })
    ->orderBy('id', 'desc')
    ->paginate(10);

    return response()->json([
        'table' => view('admin.categorys.table', compact('categorys'))->render(),
        'pagination' => $categorys->links()->toHtml()
    ]);
}

// update


public function update(Request $request)
{
    $request->validate([
        'id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'status' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048' // ভ্যালিডেশন যোগ করা ভালো
    ]);

    $category = Category::find($request->id);
    $filename = $category->image; // ডিফল্ট হিসেবে আগের নাম রাখা হলো

    if ($request->hasFile('image')) {
        // ১. পুরানো ইমেজটি ফোল্ডার থেকে ডিলিট করা (যদি থাকে)
        if ($category->image && File::exists(public_path('uploads/' . $category->image))) {
            File::delete(public_path('uploads/' . $category->image));
        }

if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.webp';
   $file->move(public_path('uploads'), $filename);
    }
    // ৩. ডাটাবেজ আপডেট
    $category->update([
        'name' => $request->name,
        'status' => $request->status,
        'image' => $filename, // নতুন বা পুরনো ফাইলের নাম সেভ হবে
    ]);

    return response()->json(['success' => 'Category updated successfully!']);
}
}

// status update
public function status(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->status = $request->status;
        $category->save();

    }

// delete



public function delete($id)
{
    // ১. প্রথমে আইডি দিয়ে ক্যাটাগরি খুঁজে বের করুন
    $category = Category::findOrFail($id);

    // ২. ফোল্ডার থেকে ইমেজটি ডিলিট করুন (যদি থাকে)
    if ($category->image && File::exists(public_path('uploads/' . $category->image))) {
        File::delete(public_path('uploads/' . $category->image));
    }

    // ৩. ডাটাবেজ থেকে রেকর্ডটি ডিলিট করুন
    $category->delete();

    return response()->json(['success' => 'Category and image deleted successfully!']);
}



}


