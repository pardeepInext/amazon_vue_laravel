<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return inertia('Home');
    }

    public function categories(){
        return inertia('Category'); 
    }

    public function fetchCategories(){
        return Category::select('id','name')->get();
    }
}
