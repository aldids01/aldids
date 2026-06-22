<x-filament-panels::page>
    <!-- Hero Section -->
    <section id="home">
        <div class="absolute inset-0 bg-gradient-to-br from-purple-900/20 to-blue-900/20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="space-y-8">
                    <div class="space-y-4">
                        <h1 class="text-5xl lg:text-7xl font-bold leading-tight">
                            <span class="gradient-text">{{ $data['hero']['name'] }}</span>
                        </h1>
                        <h2 class="text-2xl lg:text-3xl text-gray-300 font-light">
                            {{ $data['hero']['title'] }}
                        </h2>
                        <p class="text-xl text-gray-400 leading-relaxed">
                            {{ $data['hero']['subtitle'] }}
                        </p>
                        <p class="text-lg text-gray-500 max-w-2xl">
                            {{ $data['hero']['description'] }}
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4">
                        <a href="#projects" class="border-2 border-b-purple-300 px-8 py-4 rounded-full text-white font-semibold hover:from-secondary hover:to-primary transition-all duration-300 hover-glow">
                            View Our Work
                        </a>
                    </div>

                    <!-- Social Links -->
                    <div class="flex space-x-6">
                        <a href="{{ $data['hero']['github_url'] }}" class="text-gray-400 hover:text-primary transition-colors text-2xl">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="{{ $data['hero']['linkedin_url'] }}" class="text-gray-400 hover:text-primary transition-colors text-2xl">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="{{ $data['hero']['whatsapp'] }}" class="text-gray-400 hover:text-primary transition-colors text-2xl">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="mailto:{{ $data['hero']['email'] }}" class="text-gray-400 hover:text-primary transition-colors text-2xl">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="relative">
                    <div class="relative z-10">
                        <img src="{{ $data['hero']['image'] }}"
                             alt="{{ $data['hero']['name'] }}"
                             class="w-80 h-80 lg:w-96 lg:h-96 mx-auto object-cover border-8 border-primary/20 shadow-2xl animate-float">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/30 to-secondary/30 rounded-full blur-3xl"></div>
                </div>
            </div>

            <!-- Stats -->
            <div class="mt-10 grid grid-cols-2 md:grid-cols-4 gap-8">
                @foreach($data['stats'] as $stat)
                    <div class="text-center glass-effect rounded-2xl p-6 hover-glow">
                        <div class="text-3xl lg:text-4xl font-bold gradient-text">{{ $stat['number'] }}</div>
                        <div class="text-gray-400 mt-2">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold gradient-text mb-4">About Us</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Passionate developer with a keen eye for design and a love for creating exceptional digital experiences
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h3 class="text-3xl font-bold text-white mb-6">Our Journey</h3>
                    <p class="text-gray-400 text-lg leading-relaxed">
                        With over 5 years of experience in web development, We've had the privilege of working with startups,
                        agencies, and established companies to bring their digital visions to life. Our expertise spans across
                        modern frontend frameworks, robust backend systems, and intuitive user experience design.
                    </p>
                    <p class="text-gray-400 text-lg leading-relaxed">
                        We believe in writing clean, maintainable code and creating solutions that not only meet business
                        requirements but also provide exceptional user experiences. Every project is an opportunity to
                        learn something new and push the boundaries of what's possible.
                    </p>

                    <div class="flex flex-wrap gap-3 mt-8">
                        <span class="px-4 py-2 bg-blue-400 text-blue-800 rounded-full text-sm font-medium">Problem Solver</span>
                        <span class="px-4 py-2 bg-purple-400 text-purple-800 rounded-full text-sm font-medium">Team Player</span>
                        <span class="px-4 py-2 bg-red-400 text-red-800 rounded-full text-sm font-medium">Continuous Learner</span>
                        <span class="px-4 py-2 bg-green-500/20 text-green-400 rounded-full text-sm font-medium">Detail Oriented</span>
                    </div>
                </div>

                <div class="space-y-6">
                    <h3 class="text-3xl font-bold text-white mb-8">Technical Skills</h3>
                    @foreach($data['skills'] as $skill)
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-white font-medium">{{ $skill['name'] }}</span>
                                <span class="text-gray-400 text-sm">{{ $skill['level'] }}%</span>
                            </div>
                            <div class="skill-bar bg-slate-700 rounded-full h-3" data-skill="{{ $skill['level'] }}">
                                <div class="skill-progress bg-purple-400 h-full rounded-full transition-all duration-1000 ease-out" style="width:{{ $skill['level'] }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold gradient-text mb-4">What We Do</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    We offer comprehensive development services to help bring your digital ideas to life
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($data['services'] as $service)
                    <div class="glass-effect rounded-2xl p-8 hover-glow transition-all duration-300 group">
                        <div class="text-5xl mb-6 group-hover:scale-110 transition-transform duration-300">{{ $service['icon'] }}</div>
                        <h3 class="text-2xl font-bold text-white mb-4">{{ $service['title'] }}</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">{{ $service['description'] }}</p>

                        <div class="space-y-2">
                            @foreach($service['technologies'] as $tech)
                                <span class="inline-block px-3 py-1 bg-purple-400 text-purple-900 rounded-full text-xs font-medium mr-2">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Projects Section -->
    <section id="projects" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold gradient-text mb-4">Featured Projects</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    A showcase of our recent work and the technologies we love working with
                </p>
            </div>


            <!-- Project Filters -->
            @livewire('projects')

            <div class="text-center mt-12">
                <a href="#contact" class="bg-purple-300 px-8 py-4 rounded-full text-white font-semibold hover:from-secondary hover:to-primary transition-all duration-300 hover-glow">
                    Let's Work Together
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold gradient-text mb-4">Client Testimonials</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    What our clients say about working with us
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($data['testimonials'] as $testimonial)
                    <div class="glass-effect rounded-2xl p-8 hover-glow transition-all duration-300">
                        <div class="flex items-center mb-6">
                            <img src="{{ $testimonial['image'] }}"
                                 alt="{{ $testimonial['name'] }}"
                                 class="w-16 h-16 rounded-full object-cover border-2 border-primary/30">
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-white">{{ $testimonial['name'] }}</h4>
                                <p class="text-gray-400 text-sm">{{ $testimonial['position'] }}</p>
                            </div>
                        </div>

                        <div class="flex mb-4">
                            @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star {{ $i <= $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-600' }}"></i>
                            @endfor
                        </div>

                        <p class="text-gray-300 leading-relaxed italic">
                            "{{ $testimonial['content'] }}"
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold gradient-text mb-4">Let's Work Together</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Ready to start your next project? Let's discuss how we can help bring your ideas to life
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div class="space-y-8">
                    <h3 class="text-3xl font-bold text-white mb-8">Get In Touch</h3>

                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="bg-primary/20 p-4 rounded-full">
                                <i class="fas fa-envelope text-primary text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">Email</h4>
                                <p class="text-gray-400">{{ $data['hero']['email'] }}</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="bg-secondary/20 p-4 rounded-full">
                                <i class="fas fa-phone text-secondary text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">Phone</h4>
                                <p class="text-gray-400">+2348061559932</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="bg-accent/20 p-4 rounded-full">
                                <i class="fas fa-map-marker-alt text-accent text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">Location</h4>
                                <p class="text-gray-400">Taraba State, Gembu</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="bg-green-500/20 p-4 rounded-full">
                                <i class="fas fa-clock text-green-400 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">Availability</h4>
                                <p class="text-gray-400">Available for new projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-8">
                        <h4 class="text-white font-semibold mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="{{ $data['hero']['github_url'] }}" class="bg-slate-700 hover:bg-primary p-3 rounded-full transition-colors duration-300">
                                <i class="fab fa-github text-white text-lg"></i>
                            </a>
                            <a href="{{ $data['hero']['linkedin_url'] }}" class="bg-slate-700 hover:bg-primary p-3 rounded-full transition-colors duration-300">
                                <i class="fab fa-linkedin text-white text-lg"></i>
                            </a>
                            <a href="{{ $data['hero']['whatsapp'] }}" class="bg-slate-700 hover:bg-primary p-3 rounded-full transition-colors duration-300">
                                <i class="fab fa-whatsapp text-white text-lg"></i>
                            </a>
                            <a href="/" class="bg-slate-700 hover:bg-primary p-3 rounded-full transition-colors duration-300">
                                <i class="fab fa-dribbble text-white text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="glass-effect rounded-2xl p-8">
                    @livewire('contacts')
                </div>
            </div>
        </div>
    </section>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</x-filament-panels::page>
