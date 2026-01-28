<x-layouts::app :title="__('SKills')">
    @livewire('skills-table')
    <!-- Skills Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-8">
        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Total Skills</p>
                    <p class="text-2xl font-bold text-white">{{ count($data['skills']) }}</p>
                </div>
                <div class="bg-blue-500/20 p-3 rounded-full">
                    <i class="fas fa-code text-blue-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Average Level</p>
                    <p class="text-2xl font-bold text-white">{{ round(collect($data['skills'])->avg('level')) }}%</p>
                </div>
                <div class="bg-green-500/20 p-3 rounded-full">
                    <i class="fas fa-chart-line text-green-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Expert Level (90+%)</p>
                    <p class="text-2xl font-bold text-white">{{ collect($data['skills'])->where('level', '>=', 90)->count() }}</p>
                </div>
                <div class="bg-purple-500/20 p-3 rounded-full">
                    <i class="fas fa-star text-purple-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Years Experience</p>
                    <p class="text-2xl font-bold text-white">{{ collect($data['skills'])->max('years') }}+</p>
                </div>
                <div class="bg-orange-500/20 p-3 rounded-full">
                    <i class="fas fa-clock text-orange-400 text-xl"></i>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
