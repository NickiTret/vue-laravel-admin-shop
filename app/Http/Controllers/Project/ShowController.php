<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ShowController extends Controller
{
    public function __invoke(Project $project) {
        return view('project.show', compact('project'));
    }
}
