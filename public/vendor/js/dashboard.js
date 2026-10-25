document.addEventListener('DOMContentLoaded', () => {
    // 1. Contraer/Expandir Sidebar
    const sidebarBtn = document.getElementById('sidebar-toggle');
    const sidebar = document.getElementById('sidebar');
    const menuTexts = document.querySelectorAll('.menu-text');
    const logoText = document.getElementById('logo-text');

    sidebarBtn.addEventListener('click', () => {
        sidebar.classList.toggle('w-64');
        sidebar.classList.toggle('w-20');

        menuTexts.forEach(text => text.classList.toggle('hidden'));

        // Ocultar texto del logo al contraer
        if (sidebar.classList.contains('w-20')) {
            logoText.classList.add('opacity-0', 'w-0');
        } else {
            logoText.classList.remove('opacity-0', 'w-0');
        }
    });

    // 2. Dropdowns (Notificaciones y Perfil)
    const notifBtn = document.getElementById('notif-btn');
    const notifDrop = document.getElementById('notif-dropdown');
    const profileBtn = document.getElementById('profile-btn');
    const profileDrop = document.getElementById('profile-dropdown');

    const closeAllDropdowns = () => {
        notifDrop.classList.add('hidden');
        profileDrop.classList.add('hidden');
    };

    notifBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        const isHidden = notifDrop.classList.contains('hidden');
        closeAllDropdowns();
        if (isHidden) notifDrop.classList.remove('hidden');
    });

    profileBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        const isHidden = profileDrop.classList.contains('hidden');
        closeAllDropdowns();
        if (isHidden) profileDrop.classList.remove('hidden');
    });

    document.addEventListener('click', closeAllDropdowns);
    notifDrop.addEventListener('click', (e) => e.stopPropagation());
    profileDrop.addEventListener('click', (e) => e.stopPropagation());

    // 3. Modo Oscuro - Lógica forzada y explícita
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeIconLight = document.getElementById('theme-icon-light');
    const themeIconDark = document.getElementById('theme-icon-dark');

    function applyTheme(isDark) {
        if (isDark) {
            document.documentElement.classList.add('dark');
            themeIconLight.classList.remove('hidden'); // Muestra el Sol
            themeIconDark.classList.add('hidden');     // Oculta la Luna
        } else {
            document.documentElement.classList.remove('dark');
            themeIconLight.classList.add('hidden');    // Oculta el Sol
            themeIconDark.classList.remove('hidden');  // Muestra la Luna
        }
    }

    // Comprobar preferencia al cargar
    const isDarkMode = localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches);
    applyTheme(isDarkMode);

    // Cambiar tema al hacer clic
    themeToggleBtn.addEventListener('click', () => {
        const isCurrentlyDark = document.documentElement.classList.contains('dark');
        localStorage.theme = !isCurrentlyDark ? 'dark' : 'light';
        applyTheme(!isCurrentlyDark);
    });
});