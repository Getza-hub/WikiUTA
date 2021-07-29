<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{URL::to('/')}}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('profesores') }}" :active="request()->routeIs('profesores')">
                        Profesores
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('registraduria') }}" :active="request()->routeIs('registraduria')">
                        Salud
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('asistentes') }}" :active="request()->routeIs('asistentes')">
                        Registraduria
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('salud') }}" :active="request()->routeIs('salud')">
                        Asistentes sociales
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('recaudacion') }}" :active="request()->routeIs('recaudacion')">
                        Recaudación
                    </x-jet-nav-link>
                </div>
            </div>


            @auth
                <div class="hidden sm:flex sm:items-center sm:ml-6">

                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative">
                        <div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
                            <div @click="open = ! open">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </span>
                            </div>

                            <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right right-0" @click="open = false">
                                <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">

                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Administrar cuenta') }}
                                    </div>
                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Perfil') }}
                                    </x-jet-dropdown-link>

                            
                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                    @endif

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Cerrar sesión') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
                
               





            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
