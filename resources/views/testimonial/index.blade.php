<x-layouts::app :title="__('Testimonials')">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h3 class="text-2xl font-bold text-white">Client Testimonials</h3>
            <p class="text-gray-400">Manage feedback and reviews from your clients</p>
        </div>
        <button class="bg-gradient-to-r from-primary to-secondary px-6 py-3 rounded-lg text-white font-semibold hover:from-secondary hover:to-primary transition-all duration-300">
            <i class="fas fa-plus mr-2"></i>
            Add Testimonial
        </button>
    </div>

    <!-- Testimonials Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($data['testimonials'] as $testimonial)
            <div class="glass-effect rounded-xl p-6 hover-glow transition-all duration-300">
                <div class="flex items-center mb-4">
                    <img src="https://images.unsplash.com/photo-{{ $testimonial['id'] === 1 ? '1494790108755-2616b612b786' : ($testimonial['id'] === 2 ? '1472099645785-5658abf4ff4e' : '1438761681033-6461ffad8d80') }}?w=60&h=60&fit=crop&crop=face"
                         alt="{{ $testimonial['name'] }}"
                         class="w-12 h-12 rounded-full object-cover border-2 border-primary/30">
                    <div class="ml-3">
                        <h4 class="font-semibold text-white">{{ $testimonial['name'] }}</h4>
                        <p class="text-gray-400 text-sm">{{ $testimonial['position'] }}</p>
                        <p class="text-gray-500 text-xs">{{ $testimonial['company'] }}</p>
                    </div>
                </div>

                <div class="flex mb-3">
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star {{ $i <= $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-600' }} text-sm"></i>
                    @endfor
                </div>

                <p class="text-gray-300 text-sm leading-relaxed mb-4 italic">
                    "{{ $testimonial['content'] }}"
                </p>

                <div class="flex items-center justify-between text-xs text-gray-500">
                    <span>{{ $testimonial['date'] }}</span>
                    <span class="px-2 py-1 bg-primary/20 text-primary rounded">{{ $testimonial['project'] }}</span>
                </div>

                <div class="flex justify-between items-center mt-4 pt-4 border-t border-slate-700">
                    <div class="text-xs text-gray-500">
                        ID: #{{ $testimonial['id'] }}
                    </div>
                    <div class="flex space-x-2">
                        <button class="text-blue-400 hover:text-blue-300 transition-colors">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-green-400 hover:text-green-300 transition-colors">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="text-red-400 hover:text-red-300 transition-colors">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Testimonials Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-8">
        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Total Testimonials</p>
                    <p class="text-2xl font-bold text-white">{{ count($data['testimonials']) }}</p>
                </div>
                <div class="bg-blue-500/20 p-3 rounded-full">
                    <i class="fas fa-star text-blue-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Average Rating</p>
                    <p class="text-2xl font-bold text-white">{{ collect($data['testimonials'])->avg('rating') }}</p>
                </div>
                <div class="bg-yellow-500/20 p-3 rounded-full">
                    <i class="fas fa-chart-line text-yellow-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">5-Star Reviews</p>
                    <p class="text-2xl font-bold text-white">{{ collect($data['testimonials'])->where('rating', 5)->count() }}</p>
                </div>
                <div class="bg-green-500/20 p-3 rounded-full">
                    <i class="fas fa-thumbs-up text-green-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">This Month</p>
                    <p class="text-2xl font-bold text-white">2</p>
                </div>
                <div class="bg-purple-500/20 p-3 rounded-full">
                    <i class="fas fa-calendar text-purple-400 text-xl"></i>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
