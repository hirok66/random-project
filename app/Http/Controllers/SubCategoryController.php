<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    // ================= INDEX =================
    public function index()
    {
        $categories = Category::where('status', 'active')->get();
        $subcategorys = SubCategory::latest()->paginate(10);

        return view('admin.subcategory.index', compact('categories', 'subcategorys'));
    }

    // ================= STORE =================
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'name'        => 'required|string|max:255',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/subcategory'), $imageName);
        }

        SubCategory::create([
            'name'        => $request->name,
            'category_id' => $request->category_id,
            'image'       => $imageName,
            'status'      => 'active',
            'order'       => 0,
            'slug'        => Str::slug($request->name) . '-' . time(),
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'SubCategory created successfully!'
        ]);
    }

    // ================= FETCH (AJAX) =================
  public function fetch(Request $request)
{
    $query = SubCategory::with('category');

   if ($request->filled('query')) {
    $search = $request->query;

    $query->where(function($q) use ($search) {
        $q->where('name', 'like', "%{$search}%")
          ->orWhere('slug', 'like', "%{$search}%")
          ->orWhere('status', 'like', "%{$search}%");
    });
}

    $subcategorys = $query->latest()->paginate(5);

    return response()->json([
        'table' => view('admin.subcategory.table', compact('subcategorys'))->render(),
        'pagination' => $subcategorys->links()->toHtml()
    ]);
}
    // ================= STATUS CHANGE =================
    public function status(Request $request)
    {
        $subcategory = SubCategory::findOrFail($request->id);
        $subcategory->status = $request->status;
        $subcategory->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Status updated'
        ]);
    }

    // ================= UPDATE =================
    public function update(Request $request, $id)
    {
        $subcategory = SubCategory::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'status'      => 'required|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = [
            'name'        => $request->name,
            'category_id' => $request->category_id,
            'status'      => $request->status,
            'order'       => $request->order ?? 0,
            'slug'        => Str::slug($request->name) . '-' . time(),
        ];

        if ($request->hasFile('image')) {

            if ($subcategory->image && file_exists(public_path('images/subcategory/' . $subcategory->image))) {
                unlink(public_path('images/subcategory/' . $subcategory->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/subcategory'), $imageName);

            $data['image'] = $imageName;
        }

        $subcategory->update($data);

        return response()->json([
            'status'  => 'success',
            'message' => 'SubCategory updated successfully!'
        ]);
    }

    // ================= DELETE =================
    public function destroy($id)
    {
        $subcategory = SubCategory::findOrFail($id);

        if ($subcategory->image && file_exists(public_path('images/subcategory/' . $subcategory->image))) {
            unlink(public_path('images/subcategory/' . $subcategory->image));
        }

        $subcategory->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'SubCategory deleted successfully!'
        ]);
    }
}
