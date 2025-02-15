<?php

namespace App\Http\Controllers\dashboardControllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AvailabilityProject;
use App\Models\Project;
use Illuminate\Http\Request;

class AvailablityProjectsController extends Controller
{
    public function index()
    {
        $availabilityProjects = AvailabilityProject::all();
        return view('admin.Availablity_of_Projects.index', compact('availabilityProjects'));
    }
    public function create()
    {
        $projects = Project::all();
        return view('admin.Availablity_of_Projects.create', compact('projects'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'project_name' => 'required',
                'unit_type' => 'required',
                'floor' => 'required',
                'size' => 'required',
                'price_sqt' => 'required',
                'availability' => 'required',
            ]);

            $availableProject = new AvailabilityProject();
            $availableProject->project_name = $request->project_name;
            $availableProject->unit_type = $request->unit_type;
            $availableProject->floor = $request->floor;
            $availableProject->size = $request->size;
            $availableProject->price_sqt = $request->price_sqt;
            $availableProject->availability = $request->availability;
            $availableProject->save();
            return redirect('/availability-index')->with('success', 'Availability of projects stored successfully');

        } catch (\Exception $ex) {
            return redirect('/availability-create')->with('Error', $ex->getMessage());

        }
    }

    public function edit($id)
    {
        $projects = Project::all();
        $availableProject = AvailabilityProject::findOrFail($id);
        return view('admin.Availablity_of_Projects.edit', compact('availableProject', 'projects'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'project_name' => 'required',
                'unit_type' => 'required',
                'floor' => 'required',
                'size' => 'required',
                'price_sqt' => 'required',
                'availability' => 'required',
            ]);

            $availableProject = AvailabilityProject::find($id);
            $availableProject->project_name = $request->project_name;
            $availableProject->unit_type = $request->unit_type;
            $availableProject->floor = $request->floor;
            $availableProject->size = $request->size;
            $availableProject->price_sqt = $request->price_sqt;
            $availableProject->availability = $request->availability;
            $availableProject->update();
            return redirect('/availability-index')->with('success', 'Availability of projects updated successfully');

        } catch (\Exception $ex) {
            return redirect('/availability-create')->with('Error', $ex->getMessage());

        }
    }

    public function show($id)
    {
        $projects = Project::all();

        $availableProject = AvailabilityProject::findOrFail($id);
        return view('admin.Availablity_of_Projects.view', compact('availableProject', 'projects'));
    }
    public function delete(Request $request)
    {
        $product = AvailabilityProject::find($request->deleted_id);
        $product->delete();
        return redirect('/availability-index')->with('success', 'Availability of space in projects deleted successfully');

    }
}
