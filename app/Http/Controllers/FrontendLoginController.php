<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Policy;
use App\Models\faq;
use App\Models\Shop;
use App\Models\SubCategory;
use App\Models\returnPolicy;
use App\Models\term;
use App\Models\Vendor;
use Illuminate\Http\Request;

class FrontendLoginController extends Controller
{




// welcome page
public function welcome()
{

 $faq = faq::where('status','active')->get();
 $brands = Brand::where('status','active')->get();
$categorys = Category::where('status', 'active')->latest()->paginate(10);
$shops = Shop::where('status', 'active')->latest()->paginate(10);
$subCategory = SubCategory::where('status', 'active')->latest()->paginate(10);
    return view('welcome',[
        'categorys'=>$categorys,
        'shops'=>$shops,
        'subCategories'=>$subCategory,
        'brands'=>$brands,
        'faq'=>$faq,
    ]);
}





public function showLoginForm()
    {
        return view('frontend.auth.login');
    }
    public function showSignupForm()
    {
        return view('frontend.auth.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:gests',

            'password' => 'required|string|min:8|confirmed',
        ]);

        $gest = new \App\Models\Gest();
        $gest->first_name = $request->first_name;
        $gest->last_name = $request->last_name;
        $gest->email = $request->email;
        $gest->phone = $request->phone;
        $gest->password = bcrypt($request->password);
        $gest->save();

        return redirect()->route('user.login')->with('success', 'Registration successful. Please login.');
    }

    // login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('gest')->attempt($credentials)) {
            $request->session()->regenerate();
           return redirect('/')->with('success', 'Login successful!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // logout
    public function logout(Request $request)
    {
        auth()->guard('gest')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logged out successfully!');
}






// policy
public function policy(){
    $policys=  Policy::where('status', 'active')->get();
    return view('frontend.policy.index',compact('policys'));
}
public function trmesc(){
    $policys=  term::where('status', 'active')->get();
    return view('frontend.term.index',compact('policys'));
}
public function return(){
    $policys=  returnPolicy::where('status', 'active')->get();
    return view('frontend.term.index',compact('policys'));
}
public function faq(){
    $faq=  faq::where('status', 'active')->get();
    return view('frontend.faq.index',compact('faq'));
}
public function become(){
    $become=  Vendor::where('status', 'active')->get();
    return view('frontend.become.index',compact('become'));
}

}
