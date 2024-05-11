<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function index(){
        return view('frontend.product');
    }
    public function detail($slug = 1){
        $data = [
            'slug' => $slug
        ];
        return view('frontend.product-detail', $data);
    }

}
