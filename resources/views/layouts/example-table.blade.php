<div class="flex flex-col gap-3">
    <h2 class="text-lg font-bold text-slate-800 dark:text-white">Próximas Citas</h2>
    <div class="flex flex-col sm:flex-row gap-3">
        <input type="text" class="w-full sm:w-64 bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-600 rounded-lg px-4 py-2 focus:border-gold focus:ring-1 focus:ring-gold text-sm outline-none transition-all placeholder-slate-400" placeholder="Buscar cliente o servicio...">
        <div class="flex gap-2 overflow-x-auto pb-1 scrollbar-hide">
            <button class="px-4 py-1.5 rounded-full text-sm font-medium bg-pink-strong text-white whitespace-nowrap">Todas</button>
            <button class="px-4 py-1.5 rounded-full text-sm font-medium bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-600 text-slate-600 dark:text-slate-300 whitespace-nowrap hover:border-gold transition-colors">Pendientes</button>
            <button class="px-4 py-1.5 rounded-full text-sm font-medium bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-600 text-slate-600 dark:text-slate-300 whitespace-nowrap hover:border-gold transition-colors">Confirmadas</button>
        </div>
    </div>
</div>

<div class="space-y-3">
    <div class="flex items-center bg-white dark:bg-slate-800 p-4 rounded-xl border border-slate-200 dark:border-slate-700/60 gap-4 hover:border-gold dark:hover:border-gold transition-colors cursor-pointer group shadow-sm">
        <div class="w-20 text-center flex-shrink-0">
            <p class="text-gold font-bold text-xl">10:00</p>
            <p class="text-xs text-slate-500 font-medium">AM</p>
        </div>
        <div class="flex-1 border-l border-slate-100 dark:border-slate-700 pl-4 py-1">
            <div class="flex justify-between items-start mb-0.5">
                <h3 class="font-bold text-base text-slate-800 dark:text-white group-hover:text-pink-strong transition-colors">María González</h3>
                <span class="px-2 py-0.5 rounded text-[11px] font-semibold bg-emerald-100 text-emerald-800 dark:bg-emerald-900/30 dark:text-emerald-400 border border-emerald-200 dark:border-emerald-800/50">Confirmada</span>
            </div>
            <p class="text-sm text-slate-600 dark:text-slate-300">Corte & Balayage</p>
            <p class="text-[11px] text-slate-400 mt-1">por Lucía</p>
        </div>
    </div>
</div>
