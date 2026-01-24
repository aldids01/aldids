<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'hero' => [
                'name' => config('app.name'),
                'title' => 'Full Stack Developer',
                'subtitle' => 'Crafting digital experiences with modern technologies',
                'description' => 'I specialize in building scalable web applications using React, Node.js, and Laravel. With 5+ years of experience, I help businesses transform their ideas into powerful digital solutions.',
                'image' => '/images/alpha.jpg',
                'resume_url' => '/',
                'github_url' => 'https://github.com/alexrodriguez',
                'linkedin_url' => 'https://linkedin.com/in/alexrodriguez',
                'email' => 'support@aldids.ng',
            ],
            'stats' => [
                ['number' => '50+', 'label' => 'Projects Completed'],
                ['number' => '5+', 'label' => 'Years Experience'],
                ['number' => '30+', 'label' => 'Happy Clients'],
                ['number' => '15+', 'label' => 'Technologies Mastered'],
            ],
            'services' => [
                [
                    'icon' => '💻',
                    'title' => 'Web Development',
                    'description' => 'Full-stack web applications using modern frameworks like React, Vue.js, Laravel, and Node.js with responsive design.',
                    'technologies' => ['React', 'Laravel', 'Node.js', 'Vue.js'],
                ],
                [
                    'icon' => '📱',
                    'title' => 'Mobile Development',
                    'description' => 'Cross-platform mobile applications using React Native and Flutter for iOS and Android platforms.',
                    'technologies' => ['React Native', 'Flutter', 'iOS', 'Android'],
                ],
                [
                    'icon' => '🎨',
                    'title' => 'UI/UX Design',
                    'description' => 'User-centered design solutions with modern interfaces, wireframing, prototyping, and user experience optimization.',
                    'technologies' => ['Figma', 'Adobe XD', 'Sketch', 'Principle'],
                ],
                [
                    'icon' => '☁️',
                    'title' => 'Cloud Solutions',
                    'description' => 'Scalable cloud infrastructure setup and deployment using AWS, Google Cloud, and Docker containerization.',
                    'technologies' => ['AWS', 'Google Cloud', 'Docker', 'Kubernetes'],
                ],
            ],
            'skills' => [
                ['name' => 'Laravel/Filament', 'level' => 88, 'category' => 'Backend'],
                ['name' => 'Flutter/React Native', 'level' => 90, 'category' => 'Mobile'],
                ['name' => 'Livewire/JQuery/Javascript', 'level' => 87, 'category' => 'Frontend'],
                ['name' => 'MySQL', 'level' => 83, 'category' => 'Database'],
                ['name' => 'HTML/CSS', 'level' => 80, 'category' => 'Frontend'],
            ],
            'projects' => [
                [
                    'title' => 'E-Commerce Platform',
                    'description' => 'Full-featured online store with payment integration, inventory management, and admin dashboard.',
                    'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=400&fit=crop',
                    'technologies' => ['React', 'Laravel', 'MySQL', 'Stripe'],
                    'github' => '#',
                    'demo' => '#',
                    'category' => 'Web Development',
                ],
                [
                    'title' => 'Task Management App',
                    'description' => 'Collaborative project management tool with real-time updates, team collaboration, and progress tracking.',
                    'image' => 'https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=600&h=400&fit=crop',
                    'technologies' => ['Vue.js', 'Node.js', 'Socket.io', 'MongoDB'],
                    'github' => '#',
                    'demo' => '#',
                    'category' => 'Web App',
                ],
                [
                    'title' => 'Fitness Tracking Mobile App',
                    'description' => 'Cross-platform mobile app for workout tracking, nutrition logging, and progress visualization.',
                    'image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&h=400&fit=crop',
                    'technologies' => ['React Native', 'Firebase', 'Redux', 'Chart.js'],
                    'github' => '#',
                    'demo' => '#',
                    'category' => 'Mobile App',
                ],
                [
                    'title' => 'Real Estate Platform',
                    'description' => 'Property listing website with advanced search, virtual tours, and agent management system.',
                    'image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&h=400&fit=crop',
                    'technologies' => ['Laravel', 'Vue.js', 'PostgreSQL', 'Google Maps API'],
                    'github' => '#',
                    'demo' => '#',
                    'category' => 'Web Platform',
                ],
                [
                    'title' => 'Learning Management System',
                    'description' => 'Educational platform with course creation, student progress tracking, and interactive assessments.',
                    'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop',
                    'technologies' => ['React', 'Django', 'PostgreSQL', 'WebRTC'],
                    'github' => '#',
                    'demo' => '#',
                    'category' => 'EdTech',
                ],
                [
                    'title' => 'Cryptocurrency Dashboard',
                    'description' => 'Real-time crypto trading dashboard with portfolio tracking, price alerts, and market analysis.',
                    'image' => 'https://images.unsplash.com/photo-1639762681485-074b7f938ba?w=600&h=400&fit=crop',
                    'technologies' => ['React', 'Node.js', 'WebSocket', 'Chart.js'],
                    'github' => '#',
                    'demo' => '#',
                    'category' => 'FinTech',
                ],
            ],
            'testimonials' => [
                [
                    'name' => 'Sarah Johnson',
                    'position' => 'CEO, TechStart Inc.',
                    'image' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?w=100&h=100&fit=crop&crop=face',
                    'content' => 'Alex delivered an exceptional e-commerce platform that exceeded our expectations. His attention to detail and technical expertise is outstanding.',
                    'rating' => 5,
                ],
                [
                    'name' => 'Michael Chen',
                    'position' => 'Product Manager, InnovateLabs',
                    'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face',
                    'content' => 'Working with Alex was a pleasure. He transformed our complex requirements into a beautiful, functional web application.',
                    'rating' => 5,
                ],
                [
                    'name' => 'Emily Davis',
                    'position' => 'Founder, EduTech Solutions',
                    'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face',
                    'content' => 'Alex built our learning management system with incredible precision. The platform is user-friendly and highly scalable.',
                    'rating' => 5,
                ],
            ],
        ];

        return view('home', compact('data'));
    }
}
