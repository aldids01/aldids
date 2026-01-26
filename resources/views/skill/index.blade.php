<x-layouts::app :title="__('SKills')">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h3 class="text-2xl font-bold text-white">Technical Skills</h3>
            <p class="text-gray-400">Update your skill levels and add new technologies</p>
        </div>
        <button class="bg-gradient-to-r from-primary to-secondary px-6 py-3 rounded-lg text-white font-semibold hover:from-secondary hover:to-primary transition-all duration-300">
            <i class="fas fa-plus mr-2"></i>
            Add New Skill
        </button>
    </div>

    <!-- Skills by Category -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @php
            $categories = collect($data['skills'])->groupBy('category');
        @endphp

        @foreach($categories as $category => $skills)
            <div class="glass-effect rounded-xl p-6">
                <h4 class="text-xl font-bold text-white mb-6 flex items-center">
                    @if($category === 'Frontend')
                        <i class="fas fa-code text-blue-400 mr-3"></i>
                    @elseif($category === 'Backend')
                        <i class="fas fa-server text-green-400 mr-3"></i>
                    @else
                        <i class="fas fa-database text-purple-400 mr-3"></i>
                    @endif
                    {{ $category }}
                </h4>

                <div class="space-y-4">
                    @foreach($skills as $skill)
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-white font-medium">{{ $skill['name'] }}</span>
                                <span class="text-gray-400 text-sm">{{ $skill['level'] }}%</span>
                            </div>
                            <div class="bg-slate-700 rounded-full h-3">
                                <div class="bg-gradient-to-r from-primary to-secondary h-full rounded-full transition-all duration-1000 ease-out"
                                     style="width: {{ $skill['level'] }}%"></div>
                            </div>
                            <div class="flex justify-between items-center text-xs text-gray-500">
                                <span>{{ $skill['years'] }} years experience</span>
                                <div class="flex space-x-2">
                                    <button class="text-blue-400 hover:text-blue-300 transition-colors">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-400 hover:text-red-300 transition-colors">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <!-- Skills Overview Chart -->


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
