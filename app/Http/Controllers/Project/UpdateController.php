<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Project\UpdateRequest;
use Illuminate\Support\Facades\Storage;

use App\Models\Project;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Project $project) {
        $data = $request->validated();

        $data['image_src'] = Project::uploadImage($request);

        $project->update($data);

        return view('project.show', compact('project'))->with('success', 'Изменения сохранены');
    }
}
