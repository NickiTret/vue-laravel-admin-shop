<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Page;

class CreateController extends Controller
{
    public function __invoke() {
        $page = Page::all();

        return view('page.create', compact('page'));
    }
}
