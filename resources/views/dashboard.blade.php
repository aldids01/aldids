<x-layouts::app :title="__('Dashboard')">

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        @foreach($data['stats'] as $stat)
            <div class="glass-effect rounded-xl p-6 hover-glow transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">{{ $stat['title'] }}</p>
                        <p class="text-3xl font-bold text-white mt-2">{{ $stat['value'] }}</p>
                        <p class="text-sm mt-2">
                            <span class="text-green-400 font-medium">{{ $stat['change'] }}</span>
                            <span class="text-gray-500">from last month</span>
                        </p>
                    </div>
                    <div class="text-4xl">{{ $stat['icon'] }}</div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Projects -->
        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-white">Recent Projects</h3>
                <a href="" class="text-primary hover:text-secondary transition-colors text-sm font-medium">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="space-y-4">
                @foreach($data['recent_projects'] as $project)
                    <div class="flex items-center justify-between p-4 bg-slate-800/50 rounded-lg">
                        <div class="flex-1">
                            <h4 class="font-semibold text-white">{{ $project['name'] }}</h4>
                            <p class="text-gray-400 text-sm">{{ $project['client'] }}</p>
                        </div>
                        <div class="text-right">
                    <span class="px-3 py-1 rounded-full text-xs font-medium
                        {{ $project['status'] === 'Completed' ? 'bg-green-500/20 text-green-400' :
                           ($project['status'] === 'In Progress' ? 'bg-blue-500/20 text-blue-400' : 'bg-yellow-500/20 text-yellow-400') }}">
                        {{ $project['status'] }}
                    </span>
                            <p class="text-gray-500 text-xs mt-1">{{ $project['date'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Recent Contacts -->
        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-white">Recent Contacts</h3>
                <a href="" class="text-primary hover:text-secondary transition-colors text-sm font-medium">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="space-y-4">
                @foreach($data['recent_contacts'] as $contact)
                    <div class="flex items-start space-x-4 p-4 bg-slate-800/50 rounded-lg">
                        <div class="bg-primary/20 p-2 rounded-full">
                            <i class="fas fa-user text-primary text-sm"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-white">{{ $contact['name'] }}</h4>
                            <p class="text-gray-400 text-sm">{{ $contact['subject'] }}</p>
                            <p class="text-gray-500 text-xs mt-1">{{ $contact['date'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

{{--    <!-- Charts Section -->--}}
{{--    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">--}}
{{--        <!-- Project Status Chart -->--}}
{{--        <div class="glass-effect rounded-xl p-6">--}}
{{--            <h3 class="text-xl font-bold text-white mb-6">Project Status Distribution</h3>--}}
{{--            <div class="relative" style="height: 300px;">--}}
{{--                <canvas id="projectChart" width="400" height="300"></canvas>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Monthly Revenue Chart -->--}}
{{--        <div class="glass-effect rounded-xl p-6">--}}
{{--            <h3 class="text-xl font-bold text-white mb-6">Monthly Revenue</h3>--}}
{{--            <div class="relative" style="height: 300px;">--}}
{{--                <canvas id="revenueChart" width="400" height="300"></canvas>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-layouts::app>
