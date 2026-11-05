document.addEventListener('DOMContentLoaded', () => {
    // --- 1. Toggle Sidebar (Colapsar / Expandir) ---
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const sidebarTexts = document.querySelectorAll('.sidebar-text');

    sidebarToggle.addEventListener('click', () => {
        // Alternar el ancho de w-64 a w-20
        if (sidebar.classList.contains('w-64')) {
            sidebar.classList.remove('w-64');
            sidebar.classList.add('w-20');
            sidebarTexts.forEach(el => el.classList.add('hidden')); // Ocultar textos
        } else {
            sidebar.classList.remove('w-20');
            sidebar.classList.add('w-64');
            sidebarTexts.forEach(el => el.classList.remove('hidden')); // Mostrar textos
        }
    });

    // --- 2. Lógica del Tema (Oscuro / Claro) ---
    const themeToggleBtn = document.getElementById('theme-toggle');
    const darkIcon = document.getElementById('theme-toggle-dark-icon');
    const lightIcon = document.getElementById('theme-toggle-light-icon');

    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
        lightIcon.classList.remove('hidden');
    } else {
        document.documentElement.classList.remove('dark');
        darkIcon.classList.remove('hidden');
    }

    themeToggleBtn.addEventListener('click', () => {
        darkIcon.classList.toggle('hidden');
        lightIcon.classList.toggle('hidden');

        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    });

    // --- 3. Lógica de Dropdowns ---
    const notiBtn = document.getElementById('noti-toggle');
    const notiDropdown = document.getElementById('noti-dropdown');
    const profileBtn = document.getElementById('profile-toggle');
    const profileDropdown = document.getElementById('profile-dropdown');

    function toggleMenu(button, menu, otherMenu) {
        button.addEventListener('click', (e) => {
            e.stopPropagation();
            menu.classList.toggle('hidden');
            if (!otherMenu.classList.contains('hidden')) {
                otherMenu.classList.add('hidden');
            }
        });
    }

    toggleMenu(notiBtn, notiDropdown, profileDropdown);
    toggleMenu(profileBtn, profileDropdown, notiDropdown);

    notiDropdown.addEventListener('click', (e) => e.stopPropagation());
    profileDropdown.addEventListener('click', (e) => e.stopPropagation());

    window.addEventListener('click', () => {
        if (!notiDropdown.classList.contains('hidden')) notiDropdown.classList.add('hidden');
        if (!profileDropdown.classList.contains('hidden')) profileDropdown.classList.add('hidden');
    });
});