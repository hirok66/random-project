<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\SubCategory;
class SubCategoryController extends Controller
{

   public function index()
    {
        // Fetch categorys ordered by last_seen descending, 10 per page
        $categorys = Category::orderBy('id', 'desc')->paginate(10);
        $subcategories = SubCategory::orderBy('id', 'desc')->paginate(10);

        // Pass categorys to admin.dashboard view
        return view('admin.subcategory.index', [
            'categorys' => $categorys,
            'subcategories' => $subcategories
        ]);
    }

    // create category form
    public function create()
    {
        $categorys = Category::orderBy('id', 'desc')->paginate(10);
        return view('admin.subcategory.create',
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
        'category_id' => 'required|exists:categories,id',

    ]);



    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.webp';
   $file->move(public_path('frontend/subcategory_images'), $filename);
    }


        SubCategory::create([
            'name'   => $request->name,
            'image'  => $filename,
            'category_id' => $request->category_id,
            'status' => 'active',
        ]);
        return response()->json(['message' => 'SubCategory created successfully']);


}



    // updateStatus
    public function updateStatus(Request $request)
    {


        $subcategory = SubCategory::findOrFail($request->id);
        $subcategory->status = $request->status;
        $subcategory->save();

        return response()->json(['success' => true]);

    }

// fetch
public function fetch(Request $request) {
    $search = $request->search;

    $subcategories = SubCategory::when($search, function($query) use ($search) {
        $query->where('name', 'LIKE', "%{$search}%")
              ->orWhere('status', 'LIKE', "%{$search}%");
    })
    ->orderBy('id', 'desc')
    ->paginate(10);

    return response()->json([
        'table' => view('admin.subcategory.table', compact('subcategories'))->render(),
        'pagination' => $subcategories->links()->toHtml()
    ]);
}

// update


public function update(Request $request)
{
    // ১. ভ্যালিডেশন (সঠিক টেবিল নাম দিন, ধরুন 'sub_categories')
    $request->validate([
        'id' => 'required|exists:sub_categories,id',
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'category_id' => 'required|exists:categories,id|nullable',
        'status' => 'required|nullable|string|in:active,inactive',
    ]);

    $subcategory = SubCategory::findOrFail($request->id);
    $filename = $subcategory->image; // ডিফল্ট আগের নাম

    // ২. ইমেজ হ্যান্ডলিং
    if ($request->hasFile('image')) {
        // পুরনো ইমেজ ডিলিট করা
        if ($subcategory->image && File::exists(public_path('frontend/subcategory_images/' . $subcategory->image))) {
            File::delete(public_path('frontend/subcategory_images/' . $subcategory->image));
        }

        // নতুন ইমেজ আপলোড
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension(); // বা '.webp' দিতে পারেন
        $file->move(public_path('frontend/subcategory_images'), $filename);
    }

    // ৩. ডাটাবেজ আপডেট
   if($request->image== null){
    $subcategory->update([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'status' => $request->status,
    ]);
   }else{
    $subcategory->update([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'status' => $request->status,
        'image' => $filename, // নতুন ইমেজের নাম সেভ হবে
    ]);
   }

    return response()->json(['success' => 'SubCategory updated successfully!']);
}



// status update
public function status(Request $request)
    {
        $subcategory = SubCategory::findOrFail($request->id);
        $subcategory->status = $request->status;
        $subcategory->save();

    }

// delete



public function delete($id)
{
    // ১. প্রথমে আইডি দিয়ে সাবক্যাটাগরি খুঁজে বের করুন
    $subcategory = SubCategory::findOrFail($id);

    // ২. ফোল্ডার থেকে ইমেজটি ডিলিট করুন (যদি থাকে)
    if ($subcategory->image && File::exists(public_path('frontend/subcategory_images/' . $subcategory->image))) {
        File::delete(public_path('frontend/subcategory_images/' . $subcategory->image));
    }

    // ৩. ডাটাবেজ থেকে রেকর্ডটি ডিলিট করুন
    $subcategory->delete();

    return response()->json(['success' => 'SubCategory and image deleted successfully!']);
}



}
