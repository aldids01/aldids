<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'profile' => [
                'name' => 'Alex Rodriguez',
                'email' => 'alex@portfolio.com',
                'phone' => '+1 (555) 123-4567',
                'location' => 'San Francisco, CA',
                'bio' => 'Full Stack Developer with 5+ years of experience in building web applications.',
                'website' => 'https://alexrodriguez.dev',
                'github' => 'https://github.com/alexrodriguez',
                'linkedin' => 'https://linkedin.com/in/alexrodriguez'
            ],
            'site_settings' => [
                'site_title' => 'Alex Rodriguez - Portfolio',
                'site_description' => 'Full Stack Developer & UI/UX Designer',
                'meta_keywords' => 'web developer, full stack, react, laravel, portfolio',
                'contact_email' => 'alex@portfolio.com',
                'analytics_code' => 'GA-XXXXXXXXX',
                'maintenance_mode' => false
            ]
        ];

        return view('settings.index', compact('data'));
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
    public function store(StoreSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
