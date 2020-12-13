<?php

namespace App\Http\Controllers;
use App\Http\Requests\SaveProjectRequest;
use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::paginate(5);//15 default for pagina
        return view('projects.index',compact('projects'));
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        $fields= $request->validated();

         Project::create($fields);
       return redirect()->route('projects.index')->with('status','new project');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        /* $project= Project::findOrFail($id); */

        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function edit(Project $project)
    {

        return view('projects.edit', [
            'project' => $project
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request-> validated());

        return redirect()->route('projects.show', $project)->with('status','updated project');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status','deleted project');;
    }
}
