<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'testimonials' => [
                [
                    'id' => 1,
                    'name' => 'Sarah Johnson',
                    'position' => 'CEO, TechStart Inc.',
                    'company' => 'TechStart Inc.',
                    'rating' => 5,
                    'content' => 'Alex delivered an exceptional e-commerce platform that exceeded our expectations. His attention to detail and technical expertise is outstanding.',
                    'date' => '2024-01-15',
                    'project' => 'E-Commerce Platform',
                ],
                [
                    'id' => 2,
                    'name' => 'Michael Chen',
                    'position' => 'Product Manager, InnovateLabs',
                    'company' => 'InnovateLabs',
                    'rating' => 5,
                    'content' => 'Working with Alex was a pleasure. He transformed our complex requirements into a beautiful, functional web application.',
                    'date' => '2024-01-10',
                    'project' => 'Task Management App',
                ],
                [
                    'id' => 3,
                    'name' => 'Emily Davis',
                    'position' => 'Founder, EduTech Solutions',
                    'company' => 'EduTech Solutions',
                    'rating' => 5,
                    'content' => 'Alex built our learning management system with incredible precision. The platform is user-friendly and highly scalable.',
                    'date' => '2023-12-20',
                    'project' => 'Learning Management System',
                ],
            ],
        ];

        return view('testimonial.index', compact('data'));
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
    public function store(StoreTestimonialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
