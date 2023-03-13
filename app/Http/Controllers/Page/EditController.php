<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Page;


class EditController extends Controller
{
    public function __invoke(Page $page) {
        return view('page.edit');
    }
}
