<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\UpdateRequest;
use Illuminate\Support\Facades\Storage;

use App\Models\Product;
use App\Models\ColorProduct;
use App\Models\Tag;
use App\Models\ProductTag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product) {
        $data = $request->validated();
        $product->update($data);

        return view('product.show', compact('product'));
    }
}
