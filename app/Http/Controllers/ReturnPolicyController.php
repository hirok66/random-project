<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\returnPolicy;

class ReturnPolicyController extends Controller
{

 public function index()
    {

        $policies = returnPolicy::all();
        return view('admin.return.index', [
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

        $policies = returnPolicy::create([
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
        $policies = returnPolicy::find($id);
        return view('admin.return.edit', [
            'policies' => $policies,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $policy = returnPolicy::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'des' => 'required',
        ]);

        $policy->update([
            'title' => $request->title,
            'des' => $request->des,
        ]);

       return redirect()->route('return.index')->with('success', 'returnPolicy updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $policy = returnPolicy::findOrFail($id);

        $policy->delete();

        return back()->with('success', 'returnPolicy deleted successfully!');
    }


    public function status($id)
    {
        $policy = returnPolicy::findOrFail($id);

        $policy->status = $policy->status == 'active' ? 'inactive' : 'active';
        $policy->save();

        return back()->with('success', 'Status updated successfully!');
    }
}
