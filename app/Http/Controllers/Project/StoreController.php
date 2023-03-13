<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Project\StoreRequest;
use Illuminate\Support\Facades\Storage;

use App\Models\Project;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['image_src'] = Project::uploadImage($request);

        $project = Project::firstOrCreate([
            'title' => $data['title']
        ], $data);



        return redirect()->route('project.index');
    }
}
