<x-layouts::app :title="__('Experiences')">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h3 class="text-2xl font-bold text-white">Work Experience</h3>
            <p class="text-gray-400">Update your professional experience and achievements</p>
        </div>
        <button class="bg-gradient-to-r from-primary to-secondary px-6 py-3 rounded-lg text-white font-semibold hover:from-secondary hover:to-primary transition-all duration-300">
            <i class="fas fa-plus mr-2"></i>
            Add Experience
        </button>
    </div>

    <!-- Experience Timeline -->
    <div class="space-y-6">
        @foreach($data['experiences'] as $experience)
            <div class="glass-effect rounded-xl p-6 hover-glow transition-all duration-300">
                <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6">
                    <div class="flex-1">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h4 class="text-xl font-bold text-white">{{ $experience['position'] }}</h4>
                                <h5 class="text-lg text-primary font-semibold">{{ $experience['company'] }}</h5>
                                <p class="text-gray-400 text-sm">{{ $experience['location'] }}</p>
                            </div>
                            <div class="text-right">
                        <span class="px-3 py-1 bg-primary/20 text-primary rounded-full text-sm font-medium">
                            {{ $experience['start_date'] }} - {{ $experience['end_date'] }}
                        </span>
                            </div>
                        </div>

                        <p class="text-gray-300 mb-4 leading-relaxed">{{ $experience['description'] }}</p>

                        <div class="mb-4">
                            <h6 class="text-white font-semibold mb-2">Key Achievements:</h6>
                            <ul class="space-y-2">
                                @foreach($experience['achievements'] as $achievement)
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-400 mr-3 mt-1"></i>
                                        <span class="text-gray-300">{{ $achievement }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="flex justify-between items-center">
                            <div class="text-gray-500 text-sm">
                                Experience ID: #{{ $experience['id'] }}
                            </div>
                            <div class="flex space-x-3">
                                <button class="text-blue-400 hover:text-blue-300 transition-colors">
                                    <i class="fas fa-edit mr-1"></i>
                                    Edit
                                </button>
                                <button class="text-green-400 hover:text-green-300 transition-colors">
                                    <i class="fas fa-eye mr-1"></i>
                                    View
                                </button>
                                <button class="text-red-400 hover:text-red-300 transition-colors">
                                    <i class="fas fa-trash mr-1"></i>
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Experience Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-8">
        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Total Positions</p>
                    <p class="text-2xl font-bold text-white">{{ count($data['experiences']) }}</p>
                </div>
                <div class="bg-blue-500/20 p-3 rounded-full">
                    <i class="fas fa-briefcase text-blue-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Years Experience</p>
                    <p class="text-2xl font-bold text-white">5+</p>
                </div>
                <div class="bg-green-500/20 p-3 rounded-full">
                    <i class="fas fa-clock text-green-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Companies</p>
                    <p class="text-2xl font-bold text-white">{{ count(collect($data['experiences'])->unique('company')) }}</p>
                </div>
                <div class="bg-purple-500/20 p-3 rounded-full">
                    <i class="fas fa-building text-purple-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Current Role</p>
                    <p class="text-lg font-bold text-white">Senior Developer</p>
                </div>
                <div class="bg-orange-500/20 p-3 rounded-full">
                    <i class="fas fa-user-tie text-orange-400 text-xl"></i>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
