<nav class="bck">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img style="width: 50px; height: 50px;" alt=""
                            src="https://static.overlay-tech.com/assets/7ca997db-bbfc-4b34-a36d-2b37e0f03942.png" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('acerca')" :active="request()->routeIs('acerca')">
                        {{ __('Acerca de') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('sugerencias')" :active="request()->routeIs('sugerencias')">
                        {{ __('Sugerencias') }}
                    </x-nav-link>
                </div>
                @if (Route::has('login'))
                    <div class="group">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">
                                <button class="button-header">
                                    <p class="log-in">Iniciar Sesión</p>
                                </button>
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">
                                    <button class="button-header">
                                        <p class="log-in">Regístrate</p>
                                    </button>
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('acerca')" :active="request()->routeIs('acerca')">
                {{ __('Acerca de') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('sugerencias')" :active="request()->routeIs('sugerencias')">
                {{ __('Sugerencias') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
