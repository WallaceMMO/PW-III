<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Technicality;

class ApiController extends Controller {
    
    public function getTechnicalities() {
        return json_encode(Technicality::all());
    }

    public function getCategories() {
        return json_encode(Category::all());
    }

    public function getTechnicalitiesByCategory($category) {
        $category = Category::where('category', '=', $category)->firstOrFail();
        return json_encode($category->technicalities);
    }

}