<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;

class AdminPrivacyPolicy extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $policies = Policy::all();
        return view('admin.policy.index', [
            'policies' => $policies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'des' => 'required',
        ]);

        $policies = Policy::create([
            'title' => $request->title,
            'des' => $request->des,
            'status' => 'active',


        ]);

        return back()->with('success', 'Your brand added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $policies = Policy::find($id);
        return view('admin.policy.edit', [
            'policies' => $policies,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $policy = Policy::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'des' => 'required',
        ]);

        $policy->update([
            'title' => $request->title,
            'des' => $request->des,
        ]);

        return back()->with('success', 'Policy updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $policy = Policy::findOrFail($id);

        $policy->delete();

        return back()->with('success', 'Policy deleted successfully!');
    }


    public function status($id)
    {
        $policy = Policy::findOrFail($id);

        $policy->status = $policy->status == 'active' ? 'inactive' : 'active';
        $policy->save();

        return back()->with('success', 'Status updated successfully!');
    }
}
