<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'contacts' => [
                [
                    'id' => 1,
                    'name' => 'John Smith',
                    'email' => 'john@example.com',
                    'phone' => '+1 (555) 123-4567',
                    'subject' => 'Web Development Inquiry',
                    'message' => 'Hi Alex, I\'m interested in developing a custom web application for my business. Can we schedule a call to discuss the requirements?',
                    'status' => 'New',
                    'created_at' => '2024-01-16',
                ],
                [
                    'id' => 2,
                    'name' => 'Lisa Brown',
                    'email' => 'lisa@company.com',
                    'phone' => '+1 (555) 987-6543',
                    'subject' => 'Mobile App Project',
                    'message' => 'We need a mobile app for our fitness startup. Looking for someone with React Native experience. Your portfolio looks impressive!',
                    'status' => 'Replied',
                    'created_at' => '2024-01-15',
                ],
                [
                    'id' => 3,
                    'name' => 'David Wilson',
                    'email' => 'david@startup.com',
                    'phone' => '+1 (555) 456-7890',
                    'subject' => 'UI/UX Design',
                    'message' => 'Our team needs help with redesigning our existing web application. Would you be available for a design consultation?',
                    'status' => 'In Progress',
                    'created_at' => '2024-01-14',
                ],
            ],
        ];

        return view('contact.index', compact('data'));
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
    public function store(StoreContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
