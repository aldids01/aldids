<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExperienceRequest;
use App\Http\Requests\UpdateExperienceRequest;
use App\Models\Experience;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'experiences' => [
                [
                    'id' => 1,
                    'position' => 'Senior Full Stack Developer',
                    'company' => 'TechCorp Solutions',
                    'location' => 'San Francisco, CA',
                    'start_date' => '2022-03-01',
                    'end_date' => 'Present',
                    'description' => 'Lead development of web applications using React, Laravel, and AWS. Mentored junior developers and architected scalable solutions.',
                    'achievements' => ['Improved app performance by 40%', 'Led team of 5 developers', 'Implemented CI/CD pipeline'],
                ],
                [
                    'id' => 2,
                    'position' => 'Full Stack Developer',
                    'company' => 'StartupXYZ',
                    'location' => 'Remote',
                    'start_date' => '2020-06-01',
                    'end_date' => '2022-02-28',
                    'description' => 'Built MVP products from scratch using modern web technologies. Collaborated with designers and product managers.',
                    'achievements' => ['Launched 3 successful products', 'Reduced loading time by 60%', 'Integrated 10+ third-party APIs'],
                ],
                [
                    'id' => 3,
                    'position' => 'Frontend Developer',
                    'company' => 'WebAgency Pro',
                    'location' => 'New York, NY',
                    'start_date' => '2019-01-01',
                    'end_date' => '2020-05-31',
                    'description' => 'Developed responsive websites and web applications for various clients using React and Vue.js.',
                    'achievements' => ['Delivered 20+ client projects', 'Achieved 98% client satisfaction', 'Optimized SEO performance'],
                ],
            ],
        ];

        return view('experience.index', compact('data'));
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
    public function store(StoreExperienceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExperienceRequest $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
