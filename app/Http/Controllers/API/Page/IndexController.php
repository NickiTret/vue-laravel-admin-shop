<?php

namespace App\Http\Controllers\API\Page;

use App\Http\Controllers\Controller;
use App\Http\Resources\Page\PageResource;
use App\Models\Page;


class IndexController extends Controller
{
    public function __invoke() {
        $pages = Page::all();
        return PageResource::collection($pages);
    }
}
