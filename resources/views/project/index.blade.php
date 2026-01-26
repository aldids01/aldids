<x-layouts::app  :title="__('Projects')">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h3 class="text-2xl font-bold text-white">All Projects</h3>
            <p class="text-gray-400">Manage and track your development projects</p>
        </div>
        <button class="bg-gradient-to-r from-primary to-secondary px-6 py-3 rounded-lg text-white font-semibold hover:from-secondary hover:to-primary transition-all duration-300">
            <i class="fas fa-plus mr-2"></i>
            Add New Project
        </button>
    </div>

    <div class="glass-effect rounded-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-800/50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Project</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Client</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Progress</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Budget</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Timeline</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Actions</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-slate-700">
                @foreach($data['projects'] as $project)
                    <tr class="hover:bg-slate-800/30 transition-colors">
                        <td class="px-6 py-4">
                            <div>
                                <div class="font-semibold text-white">{{ $project['title'] }}</div>
                                <div class="flex space-x-2 mt-2">
                                    @foreach($project['technologies'] as $tech)
                                        <span class="px-2 py-1 bg-primary/20 text-primary rounded text-xs">{{ $tech }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-300">{{ $project['client'] }}</td>
                        <td class="px-6 py-4">
                        <span class="px-3 py-1 rounded-full text-xs font-medium
                            {{ $project['status'] === 'Completed' ? 'bg-green-500/20 text-green-400' :
                               ($project['status'] === 'In Progress' ? 'bg-blue-500/20 text-blue-400' : 'bg-yellow-500/20 text-yellow-400') }}">
                            {{ $project['status'] }}
                        </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="w-full bg-slate-700 rounded-full h-2">
                                <div class="bg-gradient-to-r from-primary to-secondary h-2 rounded-full" style="width: {{ $project['progress'] }}%"></div>
                            </div>
                            <span class="text-xs text-gray-400 mt-1">{{ $project['progress'] }}%</span>
                        </td>
                        <td class="px-6 py-4 text-gray-300 font-semibold">{{ $project['budget'] }}</td>
                        <td class="px-6 py-4 text-gray-300 text-sm">
                            <div>{{ $project['start_date'] }}</div>
                            <div class="text-gray-500">to {{ $project['end_date'] }}</div>
                        </td>
                        <td class="px-6 py-4">
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
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Project Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Total Projects</p>
                    <p class="text-2xl font-bold text-white">{{ count($data['projects']) }}</p>
                </div>
                <div class="bg-blue-500/20 p-3 rounded-full">
                    <i class="fas fa-project-diagram text-blue-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Active Projects</p>
                    <p class="text-2xl font-bold text-white">{{ collect($data['projects'])->where('status', 'In Progress')->count() }}</p>
                </div>
                <div class="bg-green-500/20 p-3 rounded-full">
                    <i class="fas fa-tasks text-green-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Completed</p>
                    <p class="text-2xl font-bold text-white">{{ collect($data['projects'])->where('status', 'Completed')->count() }}</p>
                </div>
                <div class="bg-purple-500/20 p-3 rounded-full">
                    <i class="fas fa-check-circle text-purple-400 text-xl"></i>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
