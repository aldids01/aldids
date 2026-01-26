<x-layouts::app :title="__('Contacts')">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h3 class="text-2xl font-bold text-white">Contact Messages</h3>
            <p class="text-gray-400">View and respond to client inquiries</p>
        </div>
        <div class="flex space-x-3">
            <button class="bg-slate-700 hover:bg-slate-600 px-4 py-2 rounded-lg text-white font-medium transition-colors">
                <i class="fas fa-filter mr-2"></i>
                Filter
            </button>
            <button class="bg-gradient-to-r from-primary to-secondary px-6 py-3 rounded-lg text-white font-semibold hover:from-secondary hover:to-primary transition-all duration-300">
                <i class="fas fa-envelope mr-2"></i>
                Compose
            </button>
        </div>
    </div>

    <div class="glass-effect rounded-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-800/50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Contact</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Subject</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Message</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Actions</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-slate-700">
                @foreach($data['contacts'] as $contact)
                    <tr class="hover:bg-slate-800/30 transition-colors">
                        <td class="px-6 py-4">
                            <div>
                                <div class="font-semibold text-white">{{ $contact['name'] }}</div>
                                <div class="text-gray-400 text-sm">{{ $contact['email'] }}</div>
                                @if($contact['phone'])
                                    <div class="text-gray-500 text-xs">{{ $contact['phone'] }}</div>
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-medium text-white">{{ $contact['subject'] }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-gray-300 text-sm max-w-xs">
                                {{ Str::limit($contact['message'], 100) }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                        <span class="px-3 py-1 rounded-full text-xs font-medium
                            {{ $contact['status'] === 'New' ? 'bg-blue-500/20 text-blue-400' :
                               ($contact['status'] === 'Replied' ? 'bg-green-500/20 text-green-400' : 'bg-yellow-500/20 text-yellow-400') }}">
                            {{ $contact['status'] }}
                        </span>
                        </td>
                        <td class="px-6 py-4 text-gray-300 text-sm">{{ $contact['created_at'] }}</td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <button class="text-blue-400 hover:text-blue-300 transition-colors" title="Reply">
                                    <i class="fas fa-reply"></i>
                                </button>
                                <button class="text-green-400 hover:text-green-300 transition-colors" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-yellow-400 hover:text-yellow-300 transition-colors" title="Mark as Important">
                                    <i class="fas fa-star"></i>
                                </button>
                                <button class="text-red-400 hover:text-red-300 transition-colors" title="Delete">
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

    <!-- Contact Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-8">
        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Total Messages</p>
                    <p class="text-2xl font-bold text-white">{{ count($data['contacts']) }}</p>
                </div>
                <div class="bg-blue-500/20 p-3 rounded-full">
                    <i class="fas fa-envelope text-blue-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">New Messages</p>
                    <p class="text-2xl font-bold text-white">{{ collect($data['contacts'])->where('status', 'New')->count() }}</p>
                </div>
                <div class="bg-green-500/20 p-3 rounded-full">
                    <i class="fas fa-bell text-green-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">Replied</p>
                    <p class="text-2xl font-bold text-white">{{ collect($data['contacts'])->where('status', 'Replied')->count() }}</p>
                </div>
                <div class="bg-purple-500/20 p-3 rounded-full">
                    <i class="fas fa-check-double text-purple-400 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm">In Progress</p>
                    <p class="text-2xl font-bold text-white">{{ collect($data['contacts'])->where('status', 'In Progress')->count() }}</p>
                </div>
                <div class="bg-orange-500/20 p-3 rounded-full">
                    <i class="fas fa-clock text-orange-400 text-xl"></i>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
