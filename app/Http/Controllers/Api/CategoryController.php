<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

//
// ১. ক্যাটাগরি লিস্ট দেখা (Index/Create এর পরিবর্তে)
public function index()
{
    try {
        $categorys = Category::orderBy('id', 'desc')->paginate(10);

        return response()->json([
            'success' => true,
            'data'    => $categorys
        ], 200);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Failed to fetch categories',
            'error'   => $e->getMessage()
        ], 500);
    }
}

// ২. নতুন ক্যাটাগরি তৈরি (Store)
public function store(Request $request)
{
    try {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        $category = Category::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Category created successfully',
            'data'    => $category
        ], 201); // ২১-১ মানে Created

    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'success' => false,
            'errors'  => $e->errors()
        ], 422);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Something went wrong!',
            'error'   => $e->getMessage()
        ], 500);
    }
}
// ৩. ক্যাটাগরি স্ট্যাটাস আপডেট (UpdateStatus)
public function updateStatus(Request $request)
    {
       try{
         $category = Category::findOrFail($request->id);
        $category->status = $request->status;
        $category->save();
        return response()->json(['success' => true]);
       }
       catch(\Exception $e){
        return response()->json([
            'success' => false,
            'message' => 'Failed to update status',
            'error'   => $e->getMessage()
        ], 500);
       }

    }

    // ১. ক্যাটাগরি লিস্ট ও সার্চ (Fetch/Search)
public function fetch(Request $request) {
    try {
        $search = $request->search;

        $categorys = Category::when($search, function($query) use ($search) {
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('status', 'LIKE', "%{$search}%");
        })
        ->orderBy('id', 'desc')
        ->paginate(10);

        return response()->json([
            'success' => true,
            'data'    => $categorys // HTML/View এর বদলে শুধু ডাটা পাঠানো হচ্ছে
        ], 200);

    } catch (\Exception $e) {
        return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
    }
}

// ২. ক্যাটাগরি আপডেট (Update)
public function update(Request $request) {
    try {
        $request->validate([
            'id'     => 'required|exists:categories,id',
            'name'   => 'required|string|max:255',
            'status' => 'required'
        ]);

        $category = Category::findOrFail($request->id);
        $category->update([
            'name'   => $request->name,
            'status' => $request->status,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Category updated successfully!',
            'data'    => $category
        ], 200);

    } catch (\Exception $e) {
        return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
    }
}

// ৩. স্ট্যাটাস আপডেট (Status Update)
public function status(Request $request) {
    try {
        $request->validate([
            'id'     => 'required|exists:categories,id',
            'status' => 'required'
        ]);

        $category = Category::findOrFail($request->id);
        $category->status = $request->status;
        $category->save();

        return response()->json([
            'success' => true,
            'message' => 'Status changed successfully!'
        ], 200);

    } catch (\Exception $e) {
        return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
    }
}

// ৪. ক্যাটাগরি ডিলিট (Delete)
public function delete($id) {
    try {
        $category = Category::findOrFail($id);
        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully!'
        ], 200);

    } catch (\Exception $e) {
        return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
    }
}




}
