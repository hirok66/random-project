<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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

        ]);

        Category::create([
            'name' => $request->name,


        ]);
        return response()->json(['message' => 'category created successfully']);
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

            'status' => 'required'
        ]);

        $category = Category::find($request->id);
        $category->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return response()->json(['success' => 'category updated successfully!']);
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
        $category = Category::findOrFail($id);
        $category->delete();

        return response()->json(['success' => 'Category deleted successfully!']);
    }



}


