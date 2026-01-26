<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data = [
            'stats' => [
                ['title' => 'Total Projects', 'value' => '24', 'change' => '+12%', 'icon' => '📊', 'color' => 'blue'],
                ['title' => 'Active Clients', 'value' => '8', 'change' => '+25%', 'icon' => '👥', 'color' => 'green'],
                ['title' => 'Revenue', 'value' => '$45,200', 'change' => '+18%', 'icon' => '💰', 'color' => 'purple'],
                ['title' => 'Blog Posts', 'value' => '16', 'change' => '+8%', 'icon' => '📝', 'color' => 'orange'],
            ],
            'recent_projects' => [
                ['name' => 'E-Commerce Platform', 'status' => 'Completed', 'client' => 'TechStart Inc.', 'date' => '2024-01-15'],
                ['name' => 'Task Management App', 'status' => 'In Progress', 'client' => 'InnovateLabs', 'date' => '2024-01-10'],
                ['name' => 'Fitness Mobile App', 'status' => 'Review', 'client' => 'FitTech Co.', 'date' => '2024-01-08'],
            ],
            'recent_contacts' => [
                ['name' => 'John Smith', 'email' => 'john@example.com', 'subject' => 'Web Development Inquiry', 'date' => '2024-01-16'],
                ['name' => 'Lisa Brown', 'email' => 'lisa@company.com', 'subject' => 'Mobile App Project', 'date' => '2024-01-15'],
                ['name' => 'David Wilson', 'email' => 'david@startup.com', 'subject' => 'UI/UX Design', 'date' => '2024-01-14'],
            ],
        ];

        return view('dashboard', compact('data'));
    }
}
