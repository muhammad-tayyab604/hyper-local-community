<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function allProjects()
    {
        $blogs = Blog::take(3)->get();
        $projects = Project::all();

        return view('allProjects', compact('projects', 'blogs'));
    }
}
