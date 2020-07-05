<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Http\Resources\Admin\CategoryResource;

class CategoryApiController extends Controller
{
       public function index(Request $request)
       {
       	 //dd($request);
       	 //$categories = Category::all();
        //return new CategoryResource(Category());
        return Category::all();
       }
    
}
