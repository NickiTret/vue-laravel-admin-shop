<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;

use App\Models\Category;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validate();
        Category::firstOrCreate($data);

        return redirect()->route('category.index');

    }
}
