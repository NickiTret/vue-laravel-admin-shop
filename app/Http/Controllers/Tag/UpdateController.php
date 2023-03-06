<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tag\UpdateRequest;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag) {
        $data = $request->validate();
        $tag->update($data);

        return view('tag.show', compact('tag'));
    }
}
