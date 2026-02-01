<x-filament-panels::page>
    @livewire(\App\Filament\Resources\Skills\Widgets\SkillsOverview::class)
    <x-filament::card>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach($categories as $category)
                <x-filament::fieldset>
                    <x-slot name="label">
                        {{ $category->name }}
                    </x-slot>
                    @foreach($category->skills as $skill)
                    <div class="mb-5">
                        <div class="flex justify-between items-center">
                            <span class="font-medium">{{ $skill['name'] }}</span>
                            <span class="text-purple-900 text-sm font-extrabold">{{ $skill['level'] }}%</span>
                        </div>
                        <div class="bg-neutral-400 rounded-full h-3">
                            <div class="bg-purple-600 h-full rounded-full transition-all duration-1000 ease-out"
                                 style="width: {{ $skill['level'] }}%"></div>
                        </div>
                        <div class="flex justify-between items-center text-xs text-gray-500">
                            <span>{{ $skill['years'] }} years experience</span>
                            <div class="flex">
                                <x-filament::link
                                    size="sm"
                                    icon="heroicon-s-eye"
                                    tag="a"
                                    tooltip="View"
                                    href="/admin/skills/{{ $skill['id'] }}"
                                ></x-filament::link>
                                <x-filament::link
                                    size="sm"
                                    icon="heroicon-s-pencil-square"
                                    tag="a"
                                    tooltip="Edit"
                                    href="/admin/skills/{{ $skill['id'] }}/edit"
                                ></x-filament::link>
                                <x-filament::link
                                    size="sm"
                                    icon="heroicon-s-trash"
                                    tag="button" color="danger"
                                    tooltip="Delete"
                                    wire:click="mountAction('deleteSkill', { skill: {{ $skill['id'] }} })"
                                >
                                </x-filament::link>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </x-filament::fieldset>
            @endforeach
        </div>
    </x-filament::card>


    <x-filament-actions::modals />

</x-filament-panels::page>
