<?php

namespace App\Http\Controllers\dashboardControllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;

class AgentsController extends Controller
{
    public function index()
    {
        $agents = Agent::all();
        return view('admin.agents.index', compact('agents'));
    }

    public function create()
    {
        return view('admin.agents.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'facebook' => 'nullable',
                'phone_number' => 'nullable',
                'linkedin' => 'nullable',
                'whatsapp' => 'nullable',
            ]);

            $agent = new Agent();
            $agent->name = $request->name;
            $agent->email = $request->email;
            $agent->facebook = $request->facebook;
            $agent->phone_number = $request->name;
            $agent->linkedin = $request->linkedin;
            $agent->whatsapp = $request->whatsapp;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/agent/'), $filename);
                $agent->image = $filename;
            }
            $agent->save();
            return redirect()->back()->with('success', 'Agent Created Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Agent Is Not Created');
        }
    }

    public function edit($id)
    {
        $agent = Agent::findOrFail($id);
        return view('admin.agents.edit', compact('agent'));
    }

    public function show($id)
    {
        $agent = Agent::findOrFail($id);
        return view('admin.agents.view', compact('agent'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'facebook' => 'nullable',
                'phone_number' => 'nullable',
                'linkedin' => 'nullable',
                'whatsapp' => 'nullable',
            ]);

            $agent = Agent::find($id);
            $agent->name = $request->name;
            $agent->email = $request->email;
            $agent->facebook = $request->facebook;
            $agent->phone_number = $request->name;
            $agent->linkedin = $request->linkedin;
            $agent->whatsapp = $request->whatsapp;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/agent/'), $filename);
                $agent->image = $filename;
            }
            $agent->update();
            return redirect()->back()->with('success', 'Agent Updated Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Agent Is Not Updated! Failed');
        }
    }

    public function delete(Request $request)
    {
        $project = Agent::find($request->deleted_id);
        $project->delete();
        return redirect('/agent-index')->with('success', 'Agent deleted successfully');

    }
}
