<?php

namespace App\Http\Controllers\API\Project;

use App\Http\Controllers\Controller;
use App\Http\Resources\Project\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;

use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke() {
        $projects = Project::all();
        return ProjectResource::collection($projects);
    }
}
