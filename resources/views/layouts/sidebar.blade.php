<aside id="sidebar" class="w-64 bg-white dark:bg-slate-800 border-r border-slate-200 dark:border-slate-700 flex flex-col shadow-sm transition-all duration-300 overflow-hidden">
    {{-- Contenedor Logo + Botón Toggle --}}
    <div class="h-24 flex items-center justify-start px-4 gap-3 border-b border-slate-100 dark:border-slate-700 shrink-0">
        <button id="sidebar-toggle" class="p-2 rounded-lg text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-700 transition cursor-pointer shrink-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
        </button>
        <h1 id="logo-text" class="font-logo text-3xl text-slate-900 dark:text-white transition-opacity duration-300 whitespace-nowrap overflow-hidden">{{ config('app.name', 'Uapa Salon') }}</h1>
    </div>

    <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
        <!-- Inicio (Activo) -->
        <a href="#" class="flex items-center gap-3 px-4 py-3 bg-pink-light dark:bg-pink-900/30 text-pink-strong dark:text-pink-300 rounded-lg font-medium transition" title="Inicio">
            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            <span class="menu-text whitespace-nowrap">Inicio</span>
        </a>

        <!-- Citas -->
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-pink-50 dark:hover:bg-slate-700 hover:text-pink-strong dark:hover:text-pink-300 rounded-lg font-medium transition" title="Citas">
            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <span class="menu-text whitespace-nowrap">Citas</span>
        </a>

        <!-- Servicios -->
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-pink-50 dark:hover:bg-slate-700 hover:text-pink-strong dark:hover:text-pink-300 rounded-lg font-medium transition" title="Servicios">
            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
            <span class="menu-text whitespace-nowrap">Servicios</span>
        </a>

        <!-- Trabajadoras -->
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-pink-50 dark:hover:bg-slate-700 hover:text-pink-strong dark:hover:text-pink-300 rounded-lg font-medium transition" title="Trabajadoras">
            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            <span class="menu-text whitespace-nowrap">Trabajadoras</span>
        </a>

        <!-- Usuarios -->
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-pink-50 dark:hover:bg-slate-700 hover:text-pink-strong dark:hover:text-pink-300 rounded-lg font-medium transition" title="Usuarios">
            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            <span class="menu-text whitespace-nowrap">Usuarios</span>
        </a>

        <!-- Roles -->
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-pink-50 dark:hover:bg-slate-700 hover:text-pink-strong dark:hover:text-pink-300 rounded-lg font-medium transition" title="Roles">
            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            <span class="menu-text whitespace-nowrap">Roles</span>
        </a>

        <!-- Separador -->
        <div class="my-4 border-t border-slate-200 dark:border-slate-700/60"></div>

        <!-- Reportes -->
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-pink-50 dark:hover:bg-slate-700 hover:text-pink-strong dark:hover:text-pink-300 rounded-lg font-medium transition" title="Reportes">
            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
            <span class="menu-text whitespace-nowrap">Reportes</span>
        </a>

        <!-- Integraciones -->
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-pink-50 dark:hover:bg-slate-700 hover:text-pink-strong dark:hover:text-pink-300 rounded-lg font-medium transition" title="Integraciones">
            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
            <span class="menu-text whitespace-nowrap">Integraciones</span>
        </a>

        <!-- WhatsApp Logs -->
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-pink-50 dark:hover:bg-slate-700 hover:text-pink-strong dark:hover:text-pink-300 rounded-lg font-medium transition" title="WhatsApp Logs">
            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
            <span class="menu-text whitespace-nowrap">WhatsApp Logs</span>
        </a>

        <!-- Configuración -->
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-pink-50 dark:hover:bg-slate-700 hover:text-pink-strong dark:hover:text-pink-300 rounded-lg font-medium transition" title="Configuración">
            <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            <span class="menu-text whitespace-nowrap">Configuración</span>
        </a>
    </nav>
</aside>