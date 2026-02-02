<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

            .gradient-text {
                background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #06b6d4 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .glass-effect {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            .hover-glow:hover {
                box-shadow: 0 0 30px rgba(99, 102, 241, 0.3);
            }

            .animate-float {
                animation: float 6s ease-in-out infinite;
            }

            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }

            .skill-bar {
                position: relative;
                overflow: hidden;
            }

            .skill-progress {
                transition: width 2s ease-in-out;
            }
        </style>
        @filamentStyles
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white antialiased">
        {{ $slot }}

        @livewire('notifications') {{-- Only required if you wish to send flash notifications --}}

        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
