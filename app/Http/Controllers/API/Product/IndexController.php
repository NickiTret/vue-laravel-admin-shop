<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke() {
        $products = Product::all();

        return ProductResource::collection($products);
    }
}
