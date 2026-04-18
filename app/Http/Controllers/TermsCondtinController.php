<?php

namespace App\Http\Controllers;

use App\Models\term;
use Illuminate\Http\Request;

class TermsCondtinController extends Controller
{

 public function index()
    {

        $policies = term::all();
        return view('admin.term.index', [
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

        $policies = term::create([
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
        $policies = term::find($id);
        return view('admin.term.edit', [
            'policies' => $policies,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $policy = term::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'des' => 'required',
        ]);

        $policy->update([
            'title' => $request->title,
            'des' => $request->des,
        ]);

       return redirect()->route('terms.index')->with('success', 'term updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $policy = term::findOrFail($id);

        $policy->delete();

        return back()->with('success', 'term deleted successfully!');
    }


    public function status($id)
    {
        $policy = term::findOrFail($id);

        $policy->status = $policy->status == 'active' ? 'inactive' : 'active';
        $policy->save();

        return back()->with('success', 'Status updated successfully!');
    }
}
