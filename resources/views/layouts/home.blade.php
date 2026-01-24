<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1',
                        secondary: '#8b5cf6',
                        accent: '#06b6d4'
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
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
</head>
<body class="bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white">
<!-- Navigation -->
<nav class="fixed top-0 w-full z-50 glass-effect">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex-shrink-0">
                <a href="/" class="text-2xl font-bold gradient-text">{{ config('app.name') }}</a>
            </div>

            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="#home" class="nav-link px-3 py-2 rounded-md text-sm font-medium hover:text-primary transition-colors">Home</a>
                    <a href="#about" class="nav-link px-3 py-2 rounded-md text-sm font-medium hover:text-primary transition-colors">About</a>
                    <a href="#services" class="nav-link px-3 py-2 rounded-md text-sm font-medium hover:text-primary transition-colors">Services</a>
                    <a href="#projects" class="nav-link px-3 py-2 rounded-md text-sm font-medium hover:text-primary transition-colors">Projects</a>
                    <a href="#testimonials" class="nav-link px-3 py-2 rounded-md text-sm font-medium hover:text-primary transition-colors">Testimonials</a>
                    <a href="#contact" class="nav-link px-3 py-2 rounded-md text-sm font-medium hover:text-primary transition-colors">Contact</a>
                    <a href="{{ route('login') }}" class="bg-gradient-to-r from-primary to-secondary px-4 py-2 rounded-lg text-sm font-medium hover:from-secondary hover:to-primary transition-all duration-300">Login</a>
                </div>
            </div>

            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-gray-300 hover:text-white p-2">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden glass-effect">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium hover:text-primary transition-colors">Home</a>
            <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium hover:text-primary transition-colors">About</a>
            <a href="#services" class="block px-3 py-2 rounded-md text-base font-medium hover:text-primary transition-colors">Services</a>
            <a href="#projects" class="block px-3 py-2 rounded-md text-base font-medium hover:text-primary transition-colors">Projects</a>
            <a href="#testimonials" class="block px-3 py-2 rounded-md text-base font-medium hover:text-primary transition-colors">Testimonials</a>
            <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium hover:text-primary transition-colors">Contact</a>
            <a href="{{ route('login') }}" class="block bg-gradient-to-r from-primary to-secondary px-4 py-2 rounded-lg text-base font-medium hover:from-secondary hover:to-primary transition-all duration-300 mt-4">Admin Panel</a>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-gradient-to-r from-slate-900 to-slate-800 border-t border-slate-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold gradient-text">{{ config('app.name') }}</h3>
                <p class="text-gray-400 text-sm">Full Stack Developer & UI/UX Designer crafting digital experiences with modern technologies and innovative solutions.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                        <i class="fab fa-dribbble text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h4 class="text-lg font-semibold text-white">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#home" class="text-gray-400 hover:text-primary transition-colors text-sm">Home</a></li>
                    <li><a href="#about" class="text-gray-400 hover:text-primary transition-colors text-sm">About Me</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-primary transition-colors text-sm">Services</a></li>
                    <li><a href="#projects" class="text-gray-400 hover:text-primary transition-colors text-sm">Portfolio</a></li>
                    <li><a href="#testimonials" class="text-gray-400 hover:text-primary transition-colors text-sm">Testimonials</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="space-y-4">
                <h4 class="text-lg font-semibold text-white">Services</h4>
                <ul class="space-y-2">
                    <li><a href="#services" class="text-gray-400 hover:text-primary transition-colors text-sm">Web Development</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-primary transition-colors text-sm">Mobile Apps</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-primary transition-colors text-sm">UI/UX Design</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-primary transition-colors text-sm">Cloud Solutions</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-primary transition-colors text-sm">Consulting</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="space-y-4">
                <h4 class="text-lg font-semibold text-white">Get In Touch</h4>
                <ul class="space-y-2">
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-envelope mr-3 text-primary"></i>
                        alex@portfolio.com
                    </li>
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-phone mr-3 text-primary"></i>
                        +1 (555) 123-4567
                    </li>
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-map-marker-alt mr-3 text-primary"></i>
                        San Francisco, CA
                    </li>
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-clock mr-3 text-primary"></i>
                        Available 24/7
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-slate-700 mt-8 pt-8 text-center">
            <p class="text-gray-400 text-sm">
                © {{ date('Y') }} <a href="https:://aldids.ng" target="_blank">Alpha Digital Developers</a>. All rights reserved.
            </p>
        </div>
    </div>
</footer>

<script>
    $(document).ready(function() {
        // Mobile menu toggle
        $('#mobile-menu-btn').click(function() {
            $('#mobile-menu').toggleClass('hidden');
        });

        // Smooth scrolling for anchor links
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 80
                }, 1000);
            }
        });

        // Navbar background on scroll
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('nav').addClass('bg-slate-900/95');
            } else {
                $('nav').removeClass('bg-slate-900/95');
            }
        });

        // Animate skill bars when in viewport
        function animateSkillBars() {
            $('.skill-bar').each(function() {
                var $this = $(this);
                var skillLevel = $this.data('skill');

                if (isElementInViewport($this[0])) {
                    $this.find('.skill-progress').css('width', skillLevel + '%');
                }
            });
        }

        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        $(window).on('scroll', animateSkillBars);
        animateSkillBars(); // Initial check

        // Project filter functionality
        $('.filter-btn').click(function() {
            var filter = $(this).data('filter');

            $('.filter-btn').removeClass('bg-primary text-white').addClass('text-gray-400');
            $(this).removeClass('text-gray-400').addClass('bg-primary text-white');

            if (filter === 'all') {
                $('.project-item').fadeIn(300);
            } else {
                $('.project-item').hide();
                $('.project-item[data-category="' + filter + '"]').fadeIn(300);
            }
        });

        // Contact form submission
        $('#contact-form').submit(function(e) {
            e.preventDefault();

            // Simulate form submission
            var $btn = $(this).find('button[type="submit"]');
            var originalText = $btn.text();

            $btn.text('Sending...').prop('disabled', true);

            setTimeout(function() {
                $btn.text('Message Sent!').removeClass('bg-primary').addClass('bg-green-600');
                $('#contact-form')[0].reset();

                setTimeout(function() {
                    $btn.text(originalText).removeClass('bg-green-600').addClass('bg-primary').prop('disabled', false);
                }, 3000);
            }, 1500);
        });
    });
</script>
</body>
</html>
