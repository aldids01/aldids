<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'projects' => [
                [
                    'id' => 1,
                    'title' => 'E-Commerce Platform',
                    'client' => 'TechStart Inc.',
                    'status' => 'Completed',
                    'progress' => 100,
                    'start_date' => '2023-11-01',
                    'end_date' => '2024-01-15',
                    'budget' => '$12,000',
                    'technologies' => ['React', 'Laravel', 'MySQL'],
                ],
                [
                    'id' => 2,
                    'title' => 'Task Management App',
                    'client' => 'InnovateLabs',
                    'status' => 'In Progress',
                    'progress' => 75,
                    'start_date' => '2023-12-01',
                    'end_date' => '2024-02-01',
                    'budget' => '$8,500',
                    'technologies' => ['Vue.js', 'Node.js', 'MongoDB'],
                ],
                [
                    'id' => 3,
                    'title' => 'Fitness Mobile App',
                    'client' => 'FitTech Co.',
                    'status' => 'Review',
                    'progress' => 90,
                    'start_date' => '2023-10-15',
                    'end_date' => '2024-01-20',
                    'budget' => '$15,000',
                    'technologies' => ['React Native', 'Firebase'],
                ],
            ],
        ];
        return view('project.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
