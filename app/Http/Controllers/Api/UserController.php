<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
  public function index() {
        try {
            $users = User::orderBy('id', 'desc')->paginate(10);
            return response()->json(['success' => true, 'data' => $users], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    // create user form
    public function create()
    {
        $users = User::orderBy('last_seen', 'desc')->paginate(10);
        return view('admin.user.add_user',
        [
            'users'=>$users,
        ]);
    }public function store(Request $request)
{
    try {
        // ১. ভ্যালিডেশন
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role'     => 'required|in:user,moderator,admin',
        ]);

        // ২. ইউজার তৈরি এবং ভেরিয়েবলে রাখা
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
            'role'      => $request->role,
            'last_seen' => \Carbon\Carbon::now(),
        ]);

        // ৩. ২১-১ (Created) রেসপন্স পাঠানো
        return response()->json([
            'success' => true,
            'message' => 'User created successfully',
            'data'    => $user
        ], 201);

    } catch (\Illuminate\Validation\ValidationException $e) {
        // ভ্যালিডেশন এরর হ্যান্ডলিং (৪২২ কোড)
        return response()->json([
            'success' => false,
            'errors'  => $e->errors()
        ], 422);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'User creation failed!',
            'error'   => $e->getMessage()
        ], 500);
    }
}


    // updateStatus
   public function updateStatus(Request $request, $id)
{
    try {

        $request->validate([
            'status' => 'required|in:active,inactive',
        ]);


        $user = User::findOrFail($id);


        $user->status = $request->status;
        $user->save();


        return response()->json([
            'status'  => 'success',
            'message' => 'User status updated successfully',
            'data'    => $user // আপডেট হওয়া ইউজার ডাটা পাঠিয়ে দিন
        ], 200);

    } catch (\Illuminate\Validation\ValidationException $e) {

        return response()->json([
            'status' => 'error',
            'errors' => $e->errors()
        ], 422);

    } catch (\Exception $e) {
        return response()->json([
            'status'  => 'error',
            'message' => 'Something went wrong!',
            'error'   => $e->getMessage()
        ], 500);
    }
}
// fetch
public function fetch(Request $request) {
    try {
        $search = $request->search;

        $users = User::when($search, function($query) use ($search) {
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('status', 'LIKE', "%{$search}%");
        })
        ->orderBy('id', 'desc')
        ->paginate(10);

        // REST API-তে সরাসরি অবজেক্টটি রিটার্ন করা হয়
        return response()->json([
            'status' => 'success',
            'users'  => $users, // এখানে HTML এর বদলে শুধু ডাটা যাচ্ছে
        ], 200);

    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Data fetch failed',
            'error' => $e->getMessage()
        ], 500);
    }
}

public function update(Request $request)
{
    try {
        // ১. ভ্যালিডেশন (স্ট্যাটাস কোড ৪২২ অটোমেটিক হ্যান্ডেল হবে যদি রিকোয়েস্ট JSON হয়)
        $request->validate([
            'id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $request->id,
            'role' => 'required',
            'password' => 'nullable|min:6', // পাসওয়ার্ড নাল হতে পারে
            'status' => 'required'
        ]);

        $user = User::findOrFail($request->id);


        $data = [
            'name'   => $request->name,
            'email'  => $request->email,
            'role'   => $request->role,
            'status' => $request->status,
        ];


        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return response()->json([
            'success' => true,
            'message' => 'User updated successfully!',
            'data'    => $user
        ], 200);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Update failed!',
            'error'   => $e->getMessage()
        ], 500);
    }
}

public function delete($id)
{
    try {

        $user = User::findOrFail($id);
        $user->delete();
        return response()->json([
            'success' => true,
            'message' => 'User deleted successfully!'
        ], 200);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Something went wrong!',
            'error'   => $e->getMessage()
        ], 500);
    }
}



}
