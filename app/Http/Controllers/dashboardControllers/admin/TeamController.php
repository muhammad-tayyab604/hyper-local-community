<?php

namespace App\Http\Controllers\dashboardControllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teamMembers = Team::all();
        return view("admin.TeamMemebers.index", compact('teamMembers'));
    }

    public function create()
    {
        return view('admin.TeamMemebers.create');
    }

    public function view($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.TeamMemebers.view', compact('team'));
    }
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.TeamMemebers.edit', compact('team'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'team' => 'required',
                'position' => 'required',
                'facebook' => 'required',
                'instagram' => 'required',
                'linkedin' => 'required',
                'whatsapp' => 'required',
            ]);

            $team = new Team();
            $team->name = $request->name;
            $team->team = $request->team;
            $team->position = $request->position;
            $team->facebook = $request->facebook;
            $team->instagram = $request->instagram;
            $team->linkedin = $request->linkedin;
            $team->whatsapp = $request->whatsapp;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/team/'), $filename);
                $team->image = $filename;
            }
            $team->save();
            return redirect()->back()->with('success', 'Team member added successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());

        }
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'team' => 'required',
                'position' => 'required',
                'facebook' => 'required',
                'instagram' => 'required',
                'linkedin' => 'required',
                'whatsapp' => 'required',
            ]);

            $team = Team::find($id);
            $team->name = $request->name;
            $team->team = $request->team;
            $team->position = $request->position;
            $team->facebook = $request->facebook;
            $team->instagram = $request->instagram;
            $team->linkedin = $request->linkedin;
            $team->whatsapp = $request->whatsapp;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/team/'), $filename);
                $team->image = $filename;
            }
            $team->update();
            return redirect()->back()->with('success', 'Team member updated successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());

        }
    }


    public function delete(Request $request)
    {
        $project = Team::find($request->deleted_id);
        $project->delete();
        return redirect('/team-index')->with('success', 'Team Member deleted successfully');

    }
}
