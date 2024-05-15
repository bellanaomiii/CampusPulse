<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function catSubcatList(Request $request){
        $data = [
            'pageTitle' => 'Event Categories Management'
        ];
        return view('back.pages.cats-subcast-list',$data);  // Sesuaikan path view
    }
}
