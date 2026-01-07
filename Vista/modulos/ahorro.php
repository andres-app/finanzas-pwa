<?php
$titulo = 'Ahorro | Mis Finanzas';
$appName = 'Mis Finanzas';
$usuario = 'Andres';

require __DIR__ . '/../layout/header.php';
?>

<main class="page flex-1 px-5 pt-4">

    <!-- RESUMEN AHORRO -->
    <!-- METAS (SLIDE HORIZONTAL) -->
    <section class="mb-6">
        <div class="flex gap-4 overflow-x-auto snap-x snap-mandatory pb-2">

            <!-- META -->
            <div class="meta-slide snap-start">
                <p class="text-sm text-slate-500 mb-1">Meta de ahorro</p>
                <h2 class="text-xl font-semibold">Viaje familiar</h2>

                <div class="mt-4">
                    <div class="flex justify-between text-sm mb-1">
                        <span>S/ 2,400 ahorrados</span>
                        <span class="text-slate-400">de S/ 5,000</span>
                    </div>

                    <div class="h-3 bg-slate-200 rounded-full overflow-hidden">
                        <div class="h-full bg-sky-500 rounded-full" style="width:48%"></div>
                    </div>
                </div>
            </div>

            <!-- META -->
            <div class="meta-slide snap-start">
                <p class="text-sm text-slate-500 mb-1">Meta de ahorro</p>
                <h2 class="text-xl font-semibold">Fondo de emergencia</h2>

                <div class="mt-4">
                    <div class="flex justify-between text-sm mb-1">
                        <span>S/ 3,000 ahorrados</span>
                        <span class="text-slate-400">de S/ 4,000</span>
                    </div>

                    <div class="h-3 bg-slate-200 rounded-full overflow-hidden">
                        <div class="h-full bg-emerald-500 rounded-full" style="width:75%"></div>
                    </div>
                </div>
            </div>

            <!-- META -->
            <div class="meta-slide snap-start">
                <p class="text-sm text-slate-500 mb-1">Meta de ahorro</p>
                <h2 class="text-xl font-semibold">Laptop nueva</h2>

                <div class="mt-4">
                    <div class="flex justify-between text-sm mb-1">
                        <span>S/ 800 ahorrados</span>
                        <span class="text-slate-400">de S/ 4,000</span>
                    </div>

                    <div class="h-3 bg-slate-200 rounded-full overflow-hidden">
                        <div class="h-full bg-indigo-500 rounded-full" style="width:20%"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- BOTÓN NUEVO AHORRO -->
    <section class="mb-6">
        <button class="w-full bg-sky-500/90 text-white py-3 rounded-xl font-medium shadow-md active:scale-95 transition">
            + Agregar a ahorro
        </button>
    </section>

    <!-- HISTORIAL -->
    <section class="space-y-3">

        <div class="ahorro-item">
            <div class="icon bg-sky-100 text-sky-600">🏦</div>
            <div class="flex-1">
                <p class="font-medium">Depósito ahorro</p>
                <p class="text-xs text-slate-400">Hoy · 10:15</p>
            </div>
            <span class="monto">+ S/ 300.00</span>
        </div>

        <div class="ahorro-item">
            <div class="icon bg-sky-100 text-sky-600">🏦</div>
            <div class="flex-1">
                <p class="font-medium">Depósito ahorro</p>
                <p class="text-xs text-slate-400">01 Feb · 09:00</p>
            </div>
            <span class="monto">+ S/ 500.00</span>
        </div>

    </section>

</main>

<?php require __DIR__ . '/../layout/bottom-nav.php'; ?>

<style>
    .ahorro-item {
        display: flex;
        align-items: center;
        gap: 12px;
        background: rgba(255, 255, 255, .92);
        color: #0F2F5A;
        padding: 14px;
        border-radius: 1.25rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
    }

    .ahorro-item .icon {
        width: 42px;
        height: 42px;
        border-radius: 9999px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
    }

    .ahorro-item .monto {
        font-weight: 600;
        color: #0284c7;
        white-space: nowrap;
    }

    .meta-slide {
        min-width: 85%;
        background: rgba(255, 255, 255, .95);
        color: #0F2F5A;
        padding: 20px;
        border-radius: 1.75rem;
        box-shadow: 0 12px 30px rgba(0, 0, 0, .15);
    }
</style>