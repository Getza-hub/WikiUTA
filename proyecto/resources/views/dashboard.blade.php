<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('¡Logueado con éxito! Por favor, presione siguiente.') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 align-content">
            <div class="align-content">
                <a href="{{ URL::to('/') }}"><img src={{ asset('images/siguiente.png') }} style=width:256px;> </a>
            </div>
        </div>
    </div>
</x-app-layout>
