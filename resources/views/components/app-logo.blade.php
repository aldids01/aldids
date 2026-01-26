@props([
'sidebar' => false,
])

@if($sidebar)
    <flux:sidebar.brand name="ALDIDS" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square items-center justify-center">
            <x-app-logo-icon class="size-5 fill-current text-white dark:text-black" />
        </x-slot>
    </flux:sidebar.brand>
@else
    <flux:brand name="ALDIDS" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square items-center justify-center">
            <x-app-logo-icon class="size-5 fill-current text-white dark:text-black" />
        </x-slot>
    </flux:brand>
@endif
