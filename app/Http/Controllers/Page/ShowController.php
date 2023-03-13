<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Page;

class ShowController extends Controller
{
    public function __invoke(Page $page) {
        return view('page.show', compact('page'));
    }
}
