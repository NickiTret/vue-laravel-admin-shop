<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Page\StoreRequest;
use Illuminate\Support\Facades\Storage;

use App\Models\Page;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['image_src'] = Page::uploadImage($request);

        $page = Page::firstOrCreate([
            'name_page' => $data['name_page']
        ], $data);



        return redirect()->route('page.index');
    }
}
