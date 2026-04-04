<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the Admin Dashboard with Users
     */
    public function index()
    {
        // Fetch users ordered by last_seen descending, 10 per page
        $users = User::orderBy('last_seen', 'desc')->paginate(10);

        // Pass users to admin.dashboard view
        return view('admin.dashboard', [
            'users' => $users
        ]);
    }

    // create user form
    public function create()
    {
        $users = User::orderBy('last_seen', 'desc')->paginate(10);
        return view('admin.user.add_user',
        [
            'users'=>$users,
        ]);
    }
    // store user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|in:user,moderator,admin',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'last_seen'=>Carbon::now(),
        ]);
        return response()->json(['message' => 'User created successfully']);
    }


    // updateStatus
    public function updateStatus(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success' => true]);
    }

// fetch
public function fetch(Request $request) {
    $search = $request->search;

    $users = User::when($search, function($query) use ($search) {
        $query->where('name', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('status', 'LIKE', "%{$search}%");
    })
    ->orderBy('id', 'desc')
    ->paginate(10);

    return response()->json([
        'table' => view('admin.user.table', compact('users'))->render(),
        'pagination' => $users->links()->toHtml()
    ]);
}

// update

public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $request->id,
            'role' => 'required',
            'password' => 'nullable',
            'status' => 'required'
        ]);

        $user = User::find($request->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
           bcrypt($request->password),
            'status' => $request->status,
        ]);

        return response()->json(['success' => 'User updated successfully!']);
    }


public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['success' => 'User deleted successfully!']);
    }




}
