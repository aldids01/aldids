<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'skills' => [
                ['id' => 1, 'name' => 'JavaScript', 'level' => 95, 'category' => 'Frontend', 'years' => 5],
                ['id' => 2, 'name' => 'React.js', 'level' => 92, 'category' => 'Frontend', 'years' => 4],
                ['id' => 3, 'name' => 'Vue.js', 'level' => 88, 'category' => 'Frontend', 'years' => 3],
                ['id' => 4, 'name' => 'Laravel', 'level' => 90, 'category' => 'Backend', 'years' => 4],
                ['id' => 5, 'name' => 'Node.js', 'level' => 87, 'category' => 'Backend', 'years' => 3],
                ['id' => 6, 'name' => 'Python', 'level' => 85, 'category' => 'Backend', 'years' => 3],
                ['id' => 7, 'name' => 'MySQL', 'level' => 83, 'category' => 'Database', 'years' => 4],
                ['id' => 8, 'name' => 'MongoDB', 'level' => 80, 'category' => 'Database', 'years' => 2],
            ],
        ];

        return view('skill.index', compact('data'));
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
    public function store(StoreSkillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        //
    }
}
