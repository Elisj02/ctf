<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Preguntas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        @livewire('questions-component')

        @livewireScripts
    </div>
</x-app-layout>
