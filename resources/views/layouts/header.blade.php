<header class="h-16 flex items-center justify-between px-4 md:px-6 bg-white dark:bg-slate-800 border-b border-slate-200 dark:border-slate-700/60 shrink-0">
    <div class="md:hidden flex items-center">
        <span class="font-['Great_Vibes'] text-2xl text-pink-strong dark:text-white">Uapa Salón</span>
    </div>

    <div class="hidden md:block">
        <h1 class="text-xl font-bold text-slate-800 dark:text-white">Panel de Control</h1>
        <p class="text-sm text-slate-500 dark:text-slate-400">Hola, {!! Auth::user()->name ?? 'Administrador' !!}</p>
    </div>

    <div class="flex items-center gap-2 md:gap-4">
        {{-- Botón Modo Claro/Oscuro --}}
        <button id="theme-toggle" class="p-2 text-slate-500 hover:text-gold transition-colors rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">
            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"></path></svg>
        </button>

        {{-- Menú de Notificaciones --}}
        <div class="relative">
            <button id="noti-toggle" class="relative p-2 text-slate-500 hover:text-gold transition-colors rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">
                <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                <span class="absolute top-1.5 right-1.5 block h-2 w-2 rounded-full bg-pink-strong ring-2 ring-white dark:ring-slate-800"></span>
            </button>
            {{-- Dropdown Notificaciones --}}
            <div id="noti-dropdown" class="hidden absolute right-0 mt-2 w-72 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl shadow-lg z-50 overflow-hidden">
                <div class="px-4 py-3 border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50">
                    <h3 class="text-sm font-bold text-slate-800 dark:text-white">Notificaciones</h3>
                </div>
                <div class="max-h-64 overflow-y-auto">
                    <a href="#" class="block px-4 py-3 hover:bg-slate-50 dark:hover:bg-slate-700/50 border-b border-slate-100 dark:border-slate-700/50 transition-colors">
                        <p class="text-sm text-slate-700 dark:text-slate-300"><strong>María González</strong> ha confirmado su cita.</p>
                        <p class="text-xs text-slate-500 mt-1">Hace 5 min</p>
                    </a>
                </div>
            </div>
        </div>

        {{-- Menú de Perfil --}}
        <div class="relative ml-2">
            <button id="profile-toggle" class="flex items-center focus:outline-none">
                <div class="h-8 w-8 rounded-full bg-slate-200 border-2 border-gold flex items-center justify-center overflow-hidden hover:ring-2 hover:ring-pink-strong/50 transition-all">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'U S') }}&background=B79A62&color=fff" alt="Avatar">
                </div>
            </button>
            <div id="profile-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl shadow-lg z-50 overflow-hidden">
                <div class="px-4 py-3 border-b border-slate-200 dark:border-slate-700">
                    <p class="text-sm font-medium text-slate-800 dark:text-white">{{ Auth::user()->name ?? 'Administrador' }}</p>
                    <p class="text-xs text-slate-500 truncate">{{ Auth::user()->email }}</p>
                </div>
                <div class="py-1">
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-pink-50 dark:hover:bg-slate-700/50 transition-colors">Mi Perfil</a>
                </div>
                <div class="border-t border-slate-200 dark:border-slate-700 py-1">
                    <a href="{{ route('logout') }}" class="block w-full text-left px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>
</header>
