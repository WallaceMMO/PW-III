<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller{
    
    // Views

    public function dashboardView(){
        return view('dashboard');
    }

    public function detailView(){
        return view('detail');
    }

    public function categoryView(){
        return view('admin.category');
    }

    public function technicalityView(){
        return view('admin.technicality');
    }

    // Crud

    

}
