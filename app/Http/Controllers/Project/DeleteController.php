<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;


class DeleteController extends Controller
{
    public function __invoke(Project $project) {

        $project->delete();

        return redirect()->route('project.index');
    }
}
