<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Page\UpdateRequest;
use Illuminate\Support\Facades\Storage;

use App\Models\Page;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Page $page) {
        $data = $request->validated();

        $data['image_src'] = Page::uploadImage($request);

        $page->update($data);

        return view('page.show', compact('page'))->with('success', 'Изменения сохранены');
    }
}
