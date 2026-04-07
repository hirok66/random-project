<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AllCategoryController extends Controller
{
    public function allCategory ()
    {
        $categorys = Category::where('status', 'active')->latest()->paginate(18);
        return view('frontend.category.category',[
            'categorys' => $categorys,
            'pagination' => $categorys->links('pagination.custom')->toHtml(),
        ]);
    }
}
