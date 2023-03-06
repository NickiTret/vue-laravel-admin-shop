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
        $data = $request->validate();

        $data['preview_image'] = Product::uploadImage($request);

        $tagsIds = $data['tags'];
        $colorsIds = $data['colors'];
        unset($data['tags'], $data['colors']);

        $product = Product::firstOrCreate([
            'title' => $data['title']
        ], $data);

        foreach ($tagsIds as $tagId) {
            ProductTag::firstOrCreate([
                'product_id' => $product->id,
                'tag_id' => $tagId,
            ]);
        }

        foreach ($colorsIds as $colorId) {
            ColorProduct::firstOrCreate([
                'product_id' => $product->id,
                'color_id' => $colorId,
            ]);
        }

        $product->update($data);

        return view('product.show', compact('product'));
    }
}
