<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

 public function index()
    {

        $policies = faq::all();
        return view('admin.faq.index', [
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

        $policies = faq::create([
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
        $policies = faq::find($id);
        return view('admin.faq.edit', [
            'policies' => $policies,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $policy = faq::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'des' => 'required',
        ]);

        $policy->update([
            'title' => $request->title,
            'des' => $request->des,
        ]);

       return redirect()->route('return.index')->with('success', 'faq updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $policy = faq::findOrFail($id);

        $policy->delete();

        return back()->with('success', 'faq deleted successfully!');
    }


    public function status($id)
    {
        $policy = faq::findOrFail($id);

        $policy->status = $policy->status == 'active' ? 'inactive' : 'active';
        $policy->save();

        return back()->with('success', 'Status updated successfully!');
    }
}
