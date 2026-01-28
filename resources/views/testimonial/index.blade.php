<x-layouts::app :title="__('Testimonials')">
    @livewire('testimonial-table')

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
