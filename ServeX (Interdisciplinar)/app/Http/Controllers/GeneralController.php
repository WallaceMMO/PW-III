<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Technicality;

class GeneralController extends Controller{
    
    // Views

    public function dashboardView() {
        return view('dashboard', [
            'categories' => Category::all(),
            'technicalities' => Technicality::all(),
        ]);
    }

    public function detailView() {
        return view('detail');
    }

    public function createView() {
        return view('admin.create');
    }

    // Create

    public function create(Request $request) {
        $data = json_decode($request->getContent());

        $idTech = $this->createTechnicality($data->technicality, $data->description);
        $idCateg = $this->createCategory($data->tags);

        $technicality = Technicality::find($idTech);
        $technicality->categories()->sync($idCateg);

        //echo json_encode($this->createCategory($data->tags));
    }

    function createTechnicality($technicality, $description){
        $tech = new Technicality();
        $tech->technicality = $technicality;
        $tech->description = $description;
        $tech->save();
        return $tech->id;
    }

    function createCategory($tags) {
        $ids = array();
        foreach($tags as $tag) {
            $registered = Category::where('category', '=', $tag)->first();

            if($registered === null) {
                $category = new Category();
                $category->category = $tag;
                $category->save();
                array_push($ids, $category->id);
            } else array_push($ids, $registered->id);
        }
        return $ids;
    }

}
