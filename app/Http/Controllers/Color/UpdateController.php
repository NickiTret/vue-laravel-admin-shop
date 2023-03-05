<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Color\UpdateRequest;
use App\Models\Color;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Color $color) {
        $data = $request->validated();
        $color->update($data);

        return view('color.show', compact('color'));
    }
}
