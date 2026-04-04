<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Tage;

class TagController extends Controller
{

    /**
     * Show the Admin Dashboard with tages
     */
   public function index()
    {
        // Fetch tages ordered by last_seen descending, 10 per page
        $tages = tage::orderBy('id', 'desc')->paginate(10);

        // Pass tages to admin.dashboard view
        return view('admin.tages.index', [
            'tages' => $tages
        ]);
    }

    // create tage form
    public function create()
    {
        $tages = tage::orderBy('id', 'desc')->paginate(10);
        return view('admin.tages.index',
        [
            'tages'=>$tages,
        ]);
    }
    // store tage
   public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // dd($request->all()); // এটা comment বা remove করো

    $tage = Tage::create([
        'name' => $request->name,
        'status' => 'active',
    ]);

    return response()->json([
        'message' => 'Tage created successfully',
        'tage' => $tage
    ]);
}


    // updateStatus
    public function updateStatus(Request $request)
    {
        $tage = tage::findOrFail($request->id);
        $tage->status = $request->status;
        $tage->save();

        return response()->json(['success' => true]);
    }

// fetch
public function fetch(Request $request) {
    $search = $request->search;

    $tages = Tage::when($search, function($query) use ($search) {
        $query->where('name', 'LIKE', "%{$search}%")
              ->orWhere('status', 'LIKE', "%{$search}%");
    })
    ->orderBy('id', 'desc')
    ->paginate(10);

    return response()->json([
        'table' => view('admin.tages.table', compact('tages'))->render(),
        'pagination' => $tages->links()->toHtml()
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

        $tage = Tage::find($request->id);
        $tage->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return response()->json(['success' => 'tage updated successfully!']);
    }

// status update
public function status(Request $request)
    {
        $tage = Tage::findOrFail($request->id);
        $tage->status = $request->status;
        $tage->save();

    }

// delete

public function delete($id)
    {
        $tage = Tage::findOrFail($id);
        $tage->delete();

        return response()->json(['success' => 'tage deleted successfully!']);
    }



}




