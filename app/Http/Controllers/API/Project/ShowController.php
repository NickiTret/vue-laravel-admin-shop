<?php

namespace App\Http\Controllers\API\Project;

use App\Http\Controllers\Controller;
use App\Http\Resources\Project\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;

use App\Models\Category;

class ShowController extends Controller
{
    public function __invoke(Project $project) {

        return new ProjectResource($project);
    }
}
