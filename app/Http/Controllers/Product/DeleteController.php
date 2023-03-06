<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ColorProduct;
use App\Models\ProductTag;

class DeleteController extends Controller
{
    public function __invoke(Product $product) {


        $colorsIds = ColorProduct::where('product_id', $product->id)->first();
        $productTags = ProductTag::where('product_id', $product->id)->first();

        if (!empty($colorsIds)) {
            $colorsIds->delete();
        }

        if (!empty($productTags)) {
            $productTags->delete();
        }

        $product->delete();
        
        return redirect()->route('product.index');
    }
}
