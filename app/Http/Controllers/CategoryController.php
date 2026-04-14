<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request; // Use this instead of the Facade for type-hinting
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->latest()->paginate(5);
        return view('admin.category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        // 1. Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // 2. Image Handling
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/categories'), $imageName);
        }

        // 3. Database Insertion
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
            'status' => 'active',
            'order' => 0,
            'parent_id' => 0,
            'slug' => Str::slug($request->name),
        ]);

        // 4. AJAX Response (Crucial Change)
        return response()->json([
            'status' => 'success',
            'message' => 'Category created successfully.'
        ], 200);
    }


    // Fetch Categories for AJAX
 public function fetch(Request $request)
{
    $query = $request->get('query');

    $categories = Category::query();

    if($query != ''){
        $categories->where('name', 'LIKE', "%{$query}%")
                   ->orWhere('description', 'LIKE', "%{$query}%");
    }

    $categories = $categories->latest()->paginate(5); // 👈 pagination

    $table = view('admin.category.table', compact('categories'))->render();

    return response()->json([
        'table' => $table,
        'pagination' => $categories->links()->toHtml() // 👈 MUST
    ]);
}
    // Update Category Status
    public function status(Request $request)
    {
        $user = Category::findOrFail($request->id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success' => true]);
    }

// update
   public function update(Request $request, $id)
{
    $category = Category::findOrFail($id);

    $request->validate([
        'name'        => 'required|string|max:255',
        'description' => 'required|string',
        'order'       => 'required|string|max:255',
        'status'      => 'required|string',
        'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // ডাটা গুছিয়ে নেওয়া
    $data = [
        'name'        => $request->name,
        'description' => $request->description,
        'status'      => $request->status,
        'order'       => $request->order,
    ];

    // ইমেজ চেক করা
    if ($request->hasFile('image')) {
        // পুরনো ইমেজ ডিলিট করা
        if ($category->image && file_exists(public_path('images/categories/' . $category->image))) {
            unlink(public_path('images/categories/' . $category->image));
        }

        // নতুন ইমেজ সেভ করা
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/categories'), $imageName);

        // আপডেটের জন্য ইমেজের নাম ডাটা অ্যারেতে রাখা
        $data['image'] = $imageName;
    }

    // একবারেই আপডেট করা
    $category->update($data);

    return response()->json(['message' => 'Category updated successfully!']);
}

}

