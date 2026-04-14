<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Shop;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 'active')->orderBy('id', 'desc')->get();
        $shops = Shop::orderBy('id', 'desc')->paginate(10);
        return view('admin.shop.index',
        [
            'shops'=>$shops,
            'categories'=>$categories,
        ]);
    }

     public function create()
    {
        $shops = shop::orderBy('id', 'desc')->paginate(10);
        return view('admin.shop.index',
        [
            'shops'=>$shops,
        ]);
    }
    // store shop
 public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'address' => 'required', // shop_address এর জন্য
        'image' => 'required|image|max:2048',
    ]);

    $filename = null;
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.webp';
        $file->move(public_path('frontend/shops'), $filename);
    }

    Shop::create([
        'name'     => $request->name,
        'address'  => $request->address, // address ইনপুট থেকে আসছে
        'image'         => $filename,
        'status'        => 'active',
    ]);

    return response()->json(['message' => 'Shop created successfully']);
}


    // updateStatus
    public function updateStatus(Request $request)
    {


        $subshop = Shop::findOrFail($request->id);
        $subshop->status = $request->status;
        $subshop->save();

        return response()->json(['success' => true]);

    }

// fetch
public function fetch(Request $request) {
    $search = $request->search;

    $shops = Shop::when($search, function($query) use ($search) {
        $query->where('name', 'LIKE', "%{$search}%")
              ->orWhere('status', 'LIKE', "%{$search}%");
    })
    ->orderBy('id', 'desc')
    ->paginate(10);

    return response()->json([
        'table' => view('admin.shop.table', compact('shops'))->render(),
        'pagination' => $shops->links()->toHtml()
    ]);
}

// update

public function update(Request $request)
{
    // ১. ভ্যালিডেশন ঠিক করা হয়েছে
    $request->validate([
        'id' => 'required|exists:shops,id',
        'name' => 'required',
        'address' => 'required', // shop_address এর জন্য
        'image' => 'nullable|image|max:2048',
    ]);

    $shop = Shop::findOrFail($request->id);
    $filename = $shop->image; // আগের ইমেজ নাম রেখে দিলাম

    // ২. ইমেজ হ্যান্ডলিং
    if ($request->hasFile('image')) {
        // পুরনো ইমেজ ডিলিট (পাথ ঠিক করা হয়েছে)
        if ($shop->image && File::exists(public_path('frontend/shops/' . $shop->image))) {
           File::delete(public_path('frontend/shops/' . $shop->image));
        }

        // নতুন ইমেজ আপলোড
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('frontend/shops/'), $filename);
    }

    // ৩. ডাটাবেজ আপডেট (লজিক আরও সহজ করা হয়েছে)
    $shop->update([
        'name' => $request->name,
        'address' => $request->address, // address ইনপুট থেকে আসছে
        'image' => $filename,
        'status' => $request->status, // status অপরিবর্তিত রাখা হয়েছে
    ]);

    return response()->json(['success' => 'Shop updated successfully!']);
}


// status update
public function status(Request $request)
    {
        $subshop = Shop::findOrFail($request->id);
        $subshop->status = $request->status;
        $subshop->save();

    }

// delete



public function delete($id)
{
    // ১. প্রথমে আইডি দিয়ে সাবক্যাটাগরি খুঁজে বের করুন
    $subshop = Shop::findOrFail($id);

    // ২. ফোল্ডার থেকে ইমেজটি ডিলিট করুন (যদি থাকে)
    if ($subshop->image && File::exists(public_path('frontend/shops/' . $subshop->image))) {
        File::delete(public_path('frontend/shops/' . $subshop->image));
    }

    // ৩. ডাটাবেজ থেকে রেকর্ডটি ডিলিট করুন
    $subshop->delete();

    return response()->json(['success' => 'Subshop and image deleted successfully!']);
}

}
