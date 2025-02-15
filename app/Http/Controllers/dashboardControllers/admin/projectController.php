<?php

namespace App\Http\Controllers\dashboardControllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('admin.Project.index', compact('projects'));
    }

    public function create()
    {
        $agents = Agent::all();
        return view('admin.Project.create', compact('agents'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.Project.edit', compact('project'));
    }
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.Project.show', compact('project'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'project_category_id' => 'required',
                'address' => 'required',
                'agent_id' => 'required',
                'time_period' => 'required',
                'downpayment' => 'required',
                'duration' => 'required',
                'start_from' => 'required',
                'end_time' => 'required',
                'price' => 'required',
                'property_details_pdf' => 'nullable',
                'floor_plan_details_pdf' => 'nullable',
                'property_video' => 'nullable',
                'company_profile_pdf' => 'nullable',
                'number_of_bed' => 'required',
                'number_of_bath' => 'required',
                'garage' => 'required',
                'garage_size' => 'required',
                'state_country' => 'required',
                'city' => 'required',
                'zip' => 'required',
                'area' => 'required',
                'country' => 'required',
                'property_id' => 'required',
                'property_size' => 'required',
                'year_built' => 'required',
                'status' => 'required',
                'air_conditioning' => 'nullable',
                'heater' => 'nullable',
                'lawndry_room' => 'nullable',
                'lawn' => 'nullable',
                'swimming_pool' => 'nullable',
                'dining_room' => 'nullable',
                'description' => 'required',
            ]);

            $project = new Project();
            $project->name = $request->name;
            $project->project_category_id = $request->project_category_id;
            $project->address = $request->address;
            $project->agent_id = $request->agent_id;
            $project->time_period = $request->time_period;
            $project->downpayment = $request->downpayment;
            $project->duration = $request->duration;
            $project->start_from = $request->start_from;
            $project->end_time = $request->end_time;
            $project->price = $request->price;
            $project->number_of_bed = $request->number_of_bed;
            $project->number_of_bath = $request->number_of_bath;
            $project->garage = $request->garage;
            $project->garage_size = $request->garage_size;
            $project->state_country = $request->state_country;
            $project->city = $request->city;
            $project->zip = $request->zip;
            $project->area = $request->area;
            $project->country = $request->country;
            $project->property_id = $request->property_id;
            $project->property_size = $request->property_size;
            $project->year_built = $request->year_built;
            $project->status = $request->status;
            $project->air_conditioning = $request->has('air_conditioning') ? 1 : 0;
            $project->heater = $request->has('heater') ? 1 : 0;
            $project->lawndry_room = $request->has('lawndry_room') ? 1 : 0;
            $project->lawn = $request->has('lawn') ? 1 : 0;
            $project->swimming_pool = $request->has('swimming_pool') ? 1 : 0;
            $project->dining_room = $request->has('dining_room') ? 1 : 0;
            $project->description = $request->description;
            if ($request->file('property_video')) {
                $file = $request->file('property_video');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Video/propertyVideos/'), $filename);
                $project->property_video = $filename;
            }
            if ($request->file('property_details_pdf')) {
                $file = $request->file('property_details_pdf');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/PDFs/'), $filename);
                $project->property_details_pdf = $filename;
            }
            if ($request->file('company_profile_pdf')) {
                $file = $request->file('company_profile_pdf');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/PDFs/'), $filename);
                $project->company_profile_pdf = $filename;
            }
            if ($request->file('floor_plan_details_pdf')) {
                $file = $request->file('floor_plan_details_pdf');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/PDFs/'), $filename);
                $project->floor_plan_details_pdf = $filename;
            }
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/project/'), $filename);
                $project->image = $filename;
            }
            if ($request->file('floor_plan_img')) {
                $file = $request->file('floor_plan_img');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/project/floorplan'), $filename);
                $project->floor_plan_img = $filename;
            }
            $project->save();
            return redirect('/project-index')->with('success', 'Project store successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('Error', $ex->getMessage());

        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'project_category_id' => 'required',
                'address' => 'required',
                'time_period' => 'required',
                'downpayment' => 'required',
                'duration' => 'required',
                'start_from' => 'required',
                'property_details_pdf' => 'nullable',
                'floor_plan_details_pdf' => 'nullable',
                'property_video' => 'nullable',
                'end_time' => 'required',
                'price' => 'required',
                'number_of_bed' => 'required',
                'number_of_bath' => 'required',
                'garage' => 'required',
                'garage_size' => 'required',
                'state_country' => 'required',
                'city' => 'required',
                'zip' => 'required',
                'area' => 'required',
                'country' => 'required',
                'property_id' => 'required',
                'property_size' => 'required',
                'year_built' => 'required',
                'status' => 'required',
                'air_conditioning' => 'nullable',
                'heater' => 'nullable',
                'lawndry_room' => 'nullable',
                'lawn' => 'nullable',
                'swimming_pool' => 'nullable',
                'dining_room' => 'nullable',
                'description' => 'required',
            ]);

            $project = Project::find($id);
            $project->name = $request->name;
            $project->project_category_id = $request->project_category_id;
            $project->address = $request->address;
            $project->time_period = $request->time_period;
            $project->downpayment = $request->downpayment;
            $project->duration = $request->downpayment;
            $project->start_from = $request->start_from;
            $project->end_time = $request->end_time;
            $project->price = $request->price;
            $project->number_of_bed = $request->number_of_bed;
            $project->number_of_bath = $request->number_of_bath;
            $project->garage = $request->garage;
            $project->garage_size = $request->garage_size;
            $project->state_country = $request->state_country;
            $project->city = $request->city;
            $project->zip = $request->zip;
            $project->area = $request->area;
            $project->country = $request->country;
            $project->property_id = $request->property_id;
            $project->property_size = $request->property_size;
            $project->year_built = $request->year_built;
            $project->status = $request->status;
            $project->air_conditioning = $request->has('air_conditioning') ? 1 : 0;
            $project->heater = $request->has('heater') ? 1 : 0;
            $project->lawndry_room = $request->has('lawndry_room') ? 1 : 0;
            $project->lawn = $request->has('lawn') ? 1 : 0;
            $project->swimming_pool = $request->has('swimming_pool') ? 1 : 0;
            $project->dining_room = $request->has('dining_room') ? 1 : 0;
            $project->description = $request->description;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/project/'), $filename);
                $project->image = $filename;
            }
            if ($request->file('floor_plan_img')) {
                $file = $request->file('floor_plan_img');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/project/floorplan'), $filename);
                $project->floor_plan_img = $filename;
            }
            if ($request->file('property_video')) {
                $file = $request->file('property_video');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Video/propertyVideos/'), $filename);
                $project->property_video = $filename;
            }
            if ($request->file('property_details_pdf')) {
                $file = $request->file('property_details_pdf');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/PDFs/'), $filename);
                $project->property_details_pdf = $filename;
            }
            if ($request->file('company_profile_pdf')) {
                $file = $request->file('company_profile_pdf');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/PDFs/'), $filename);
                $project->company_profile_pdf = $filename;
            }
            if ($request->file('floor_plan_details_pdf')) {
                $file = $request->file('floor_plan_details_pdf');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/PDFs/'), $filename);
                $project->floor_plan_details_pdf = $filename;
            }
            $project->update();
            return redirect('/project-index')->with('success', 'Project Updated successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('Error', $ex->getMessage());

        }
    }

    public function delete(Request $request)
    {
        $project = Project::find($request->deleted_id);
        $project->delete();
        return redirect('/project-index')->with('success', 'Project deleted successfully');

    }

    // Download PDF
    public function downloadPDF($filename)
    {
        $path = public_path('Image/PDFs/' . $filename);

        if (file_exists($path)) {
            return response()->download($path, $filename);
        } else {
            return back()->with('error', 'PDF file not found');
        }
    }
}
