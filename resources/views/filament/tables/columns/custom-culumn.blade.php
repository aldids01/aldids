<div {{ $getExtraAttributeBag() }} class="gap-8">
    <div class="project-item glass-effect rounded-2xl overflow-hidden hover-glow transition-all duration-300 group" >
        <div class="relative overflow-hidden">
            <img src="{{ $project->image_url }}"
                 alt="{{ $project['title'] ?? ''}}"
                 class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-4 left-4 right-4">
                    <div class="flex space-x-3">
                        <a href="{{ $project->url ?? '' }}" target="_blank" class="bg-primary/80 backdrop-blur-sm p-3 rounded-full text-white hover:bg-primary transition-all duration-300">
                            <i class="fas fa-external-link-alt text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6">
            <div class="flex items-center justify-between mb-3">
                <h3 class="text-xl font-bold text-white">{{ $project->name ?? '' }}</h3>
                <span class="px-3 py-1 bg-primary/20 text-primary rounded-full text-xs font-medium">{{ $project->category->name }}</span>
            </div>
            <p class="text-gray-300 mb-4 leading-relaxed">{{ $project->description ?? '' }}</p>

            <div class="flex flex-wrap gap-2">
                @foreach($project->technologies as $tech)
                    <span class="px-3 py-1 bg-slate-700 text-gray-300 rounded-full text-xs font-medium">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
    </div>
</div>
