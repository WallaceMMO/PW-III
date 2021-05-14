<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller{
    
    // Views

    public function splashView(){
        return view('splash');
    }

    public function dashboardView(){
        return view('dashboard');
    }

    // Crud

    

}
