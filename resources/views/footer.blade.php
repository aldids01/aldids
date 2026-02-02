<footer class="bg-gradient-to-r from-slate-900 to-slate-800 border-t border-slate-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold gradient-text">{{ config('app.name') }}</h3>
                <p class="text-gray-400 text-sm">Full Stack Developer & UI/UX Designer crafting digital experiences with modern technologies and innovative solutions.</p>
                <div class="flex space-x-4">
                    <a href="https://github.com/aldids01" class="text-gray-400 hover:text-primary transition-colors">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/aldids" class="text-gray-400 hover:text-primary transition-colors">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="https://wa.me/+2348080990067" class="text-gray-400 hover:text-primary transition-colors">
                        <i class="fab fa-whatsapp text-xl"></i>
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
                        support@aldids.ng
                    </li>
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-phone mr-3 text-primary"></i>
                        +2348061559532
                    </li>
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-map-marker-alt mr-3 text-primary"></i>
                        Taraba State Nigeria
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
