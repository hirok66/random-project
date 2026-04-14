<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gest;
use App\Models\GestAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class GestProfileController extends Controller
{
    public function dashboard(){
        return view('frontend.gest.dashboard');
    }



    // dashbashboard_order

    public function dashbashboard_order(){
        return view('frontend.gest.order');
    }
    public function dashboard_download(){
        return view('frontend.gest.download');
    }


    // dashbashboard_order

    public function returns_request(){
        return view('frontend.gest.returns_request');
    }
    // dashbashboard_order

    public function profiel_information(){
        return view('frontend.gest.profiel_information');
    }
    // dashboard_profile_edit

    public function dashboard_profile_edit(){
        return view('frontend.gest.dashboard_profile_edit');
    }
    public function dashboard_address(){
         $address = GestAddress::where('author_id',Auth::guard('gest')->id())->get();
        return view('frontend.gest.dashboard_address',compact('address'));
    }


    public function address_add(){


        return view('frontend.gest.address_add');
    }

    // dashboard_wishlist

    public function dashboard_wishlist(){
        $categorys= Category::where('status','active')->latest()->paginate('6');
        return view('frontend.gest.dashboard_wishlist',[
            'categorys'=>$categorys,
        ]);
    }

    // dashboard_reviews
    public function dashboard_reviews(){
        $categorys= Category::where('status','active')->latest()->paginate('6');
        return view('frontend.gest.dashboard_reviews',[
            'categorys'=>$categorys,
        ]);
    }
    // dashboard_reviews
    public function change_password(){
        $categorys= Category::where('status','active')->latest()->paginate('6');
        return view('frontend.gest.change_password');
    }



    // password_update
   public function password_update(Request $request)
{
    // 1. Validate the input
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required', // 'confirmed' automatically looks for 'new_password_confirmation'
        'password_confirmation'=>'required|same:new_password',
        ]);

    // 2. Check if current_password matches the one in DB
    // Assuming 'gest' is your custom guard name
    $user = Auth::guard('gest')->user();

    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors(['current_password' => 'The provided password does not match our records.']);
    }

    // 3. Update the password
  $user->password = $request->new_password; // 'hashed' cast handles the Hash::make part
    $user->save();

    return back()->with('status', 'Password updated successfully!');
}


    public function image(Request $request)
    {
        $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = Auth::guard('gest')->user();

 if ($request->hasFile('image')) {
        // পুরনো ইমেজ ডিলিট করা
        if ($user->image && file_exists(public_path('images/grst/' . $user->image))) {
            unlink(public_path('images/grst/' . $user->image));
        }

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/grst');
        $image->move($destinationPath, $name);

        // Database update
        $user->image = $name;
        $user->save();

        return response()->json([
            'success' => true,
            'image_url' => asset('images/grst/' . $name)
        ]);
    }
    }
}


    // address_srote

    public function address_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:gests,email',
                 'phone' => 'required|unique:gests,phone',
            'village_name' => 'required',
            'union_id' => 'required',
            'upazila_id' => 'required',
            'district_id' => 'required',
            'division_id' => 'required',

        ]);

        $user = Auth::guard('gest')->user();

         $addressCount = GestAddress::where('author_id', $user->id)->count();

    if ($addressCount >= 6) {
        return redirect()->back()->with('error', 'আপনি সর্বোচ্চ ৬টি অ্যাড্রেস যোগ করতে পারবেন!');
    }

        $user = GestAddress::create([
            'author_id' => $user->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'village_name' => $request->village_name,
            'union_id' => $request->union_id,
            'upazilla_id' => $request->upazila_id,
            'district_id' => $request->district_id,
            'division_id' => $request->division_id,
            'address' => $request->address,
        ]);



        return redirect()->route('dashboard.address')->with('status', 'Address added successfully!');
    }


}
