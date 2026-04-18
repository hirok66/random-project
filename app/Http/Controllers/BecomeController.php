<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class BecomeController extends Controller
{
public function index()
    {

        $policies = Vendor::all();
        return view('admin.become.index', [
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

        $policies = Vendor::create([
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
        $policies = Vendor::find($id);
        return view('admin.become.edit', [
            'policies' => $policies,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $policy = Vendor::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'des' => 'required',
        ]);

        $policy->update([
            'title' => $request->title,
            'des' => $request->des,
        ]);

       return redirect()->route('become.index')->with('success', 'Vendor updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $policy = Vendor::findOrFail($id);

        $policy->delete();

        return back()->with('success', 'Vendor deleted successfully!');
    }


    public function status($id)
    {
        $policy = Vendor::findOrFail($id);

        $policy->status = $policy->status == 'active' ? 'inactive' : 'active';
        $policy->save();

        return back()->with('success', 'Status updated successfully!');
    }
}
