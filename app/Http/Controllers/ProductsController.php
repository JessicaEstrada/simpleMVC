<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //return the data from model
    public function Products()
    {
        return view('products',
        [
            'title'     =>  'Products',
            'heading'   =>  'Boba Milktea',
            'product_info' => Products::all()
        ]
    );
    }
}