<x-layouts::app :title="__('Contacts')">

    @livewire('contact-table')

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
