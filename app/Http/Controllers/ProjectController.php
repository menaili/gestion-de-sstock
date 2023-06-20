<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addProject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('img')) {
            $imageName = $request->file('img')->getClientOriginalName();
            $image = $request->file('img')->storeAs('./',$imageName,'projectImage');
            Project::create([
                'project_name' => $request->name_pro,
                'desc'=> $request->desc,
                'link' => $request->link,
                'image' => $imageName
            ]);
            return view('dashboard');
        }else{
            return 'invalid image try again';
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findorfail($id);
        return view('editProject', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project =  Project::findorfail($id);
        $project->project_name = $request->name_pro;
        $project->desc = $request->desc;
        $project->link = $request->link;
        if ($request->hasFile('img')) {
            $imagePath = './'. $project->image;
            Storage::disk('projectImage')->delete($imagePath);
            $imageName = $request->file('img')->getClientOriginalName();
            $image = $request->file('img')->storeAs('./',$imageName,'projectImage');
            $project->image = $imageName;
        }
        $project->save();

        $projects = Project::all();
        return redirect()->route('project.index')->with(compact('projects'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project =  Project::findorfail($id);
        $imagePath = './'. $project->image;
        Storage::disk('projectImage')->delete($imagePath);
        Project::destroy($id);
        $projects = Project::all();
        return redirect()->route('project.index')->with(compact('projects'));
    }
}
