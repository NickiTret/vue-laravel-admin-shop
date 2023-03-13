<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Page;

class IndexController extends Controller
{
    public function __invoke() {
        $pages = Page::all();
        return view('Page.index', compact('pages'));
    }
}
