<header class="bg-white dark:bg-slate-800 border-b border-slate-200 dark:border-slate-700 h-24 flex items-center justify-between px-6 shadow-sm transition-colors duration-300">

    <div>
        <h2 class="text-xl font-bold text-slate-800 dark:text-white">Panel de Control</h2>
    </div>

    <div class="flex items-center gap-4">
        {{-- Botón Modo Claro/Oscuro --}}
        <button id="theme-toggle" class="p-2 rounded-full text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-700 transition cursor-pointer" title="Alternar modo oscuro">
            {{-- Icono Sol (Claro) - Por defecto oculto --}}
            <svg id="theme-icon-light" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            {{-- Icono Luna (Oscuro) --}}
            <svg id="theme-icon-dark" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
        </button>

        {{-- Menú de Notificaciones --}}
        <div class="relative">
            <button id="notif-btn" class="w-10 h-10 rounded-full bg-pink-50 dark:bg-slate-700 text-pink-strong dark:text-pink-300 flex items-center justify-center hover:bg-pink-100 dark:hover:bg-slate-600 transition cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                <span class="absolute top-0 right-0 w-3 h-3 bg-red-500 border-2 border-white dark:border-slate-800 rounded-full"></span>
            </button>
            {{-- Dropdown Notificaciones --}}
            <div id="notif-dropdown" class="hidden absolute right-0 mt-2 w-72 bg-white dark:bg-slate-800 rounded-xl shadow-lg border border-slate-200 dark:border-slate-700 z-50 overflow-hidden">
                <div class="p-3 border-b border-slate-100 dark:border-slate-700 text-sm font-semibold text-slate-800 dark:text-slate-200">Notificaciones</div>
                <div class="p-3 text-sm text-slate-600 dark:text-slate-400 border-b border-slate-50 dark:border-slate-700/50 hover:bg-slate-50 dark:hover:bg-slate-700/50 cursor-pointer">
                    Nueva cita agendada por María González.
                </div>
                <div class="p-3 text-sm text-center text-pink-strong dark:text-pink-400 hover:underline cursor-pointer">Ver todas</div>
            </div>
        </div>

        {{-- Menú de Perfil --}}
        <div class="relative">
            <button id="profile-btn" class="w-10 h-10 rounded-full bg-gold border-2 border-white dark:border-slate-700 shadow-sm overflow-hidden cursor-pointer focus:outline-none focus:ring-2 focus:ring-gold">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'U S') }}&background=B79A62&color=fff" alt="Avatar">
            </button>
            {{-- Dropdown Perfil --}}
            <div id="profile-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-lg border border-slate-200 dark:border-slate-700 z-50 py-2">
                <div class="px-4 py-2 text-sm text-slate-800 dark:text-slate-200 border-b border-slate-100 dark:border-slate-700 mb-1">
                    <span class="font-bold">{{ Auth::user()->name ?? 'Administrador' }}</span>
                </div>
                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-pink-50 dark:hover:bg-slate-700 hover:text-pink-strong transition">Ver perfil</a>

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-slate-700 transition cursor-pointer">
                        Cerrar sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>