<?php
$titulo = 'Reportes | Mis Finanzas';
$appName = 'Mis Finanzas';
$usuario = 'Andres';

require __DIR__ . '/../layout/header.php';
?>

<main class="page flex-1 px-5 pt-4">

  <!-- RESUMEN -->
  <section class="mb-6 grid grid-cols-2 gap-4">

    <div class="bg-white/90 rounded-2xl p-4 shadow-lg text-primary">
      <p class="text-xs text-slate-500">Gastos mes</p>
      <h3 class="text-lg font-semibold mt-1">S/ 1,245</h3>
    </div>

    <div class="bg-white/90 rounded-2xl p-4 shadow-lg text-primary">
      <p class="text-xs text-slate-500">Ingresos mes</p>
      <h3 class="text-lg font-semibold mt-1">S/ 3,200</h3>
    </div>

  </section>

  <!-- BALANCE -->
  <section class="mb-6">
    <div class="bg-emerald-100/80 text-emerald-700 rounded-2xl p-5 shadow-lg">
      <p class="text-sm">Balance del mes</p>
      <h2 class="text-3xl font-semibold mt-1">+ S/ 1,955</h2>
    </div>
  </section>

  <!-- INSIGHTS -->
  <section class="space-y-3">

    <div class="reporte-item">
      <span>📉</span>
      <p class="flex-1">Gastaste menos que el mes pasado</p>
    </div>

    <div class="reporte-item">
      <span>📈</span>
      <p class="flex-1">Tus ingresos aumentaron 12%</p>
    </div>

    <div class="reporte-item">
      <span>🏆</span>
      <p class="flex-1">Buen control financiero este mes</p>
    </div>

  </section>

</main>

<?php require __DIR__ . '/../layout/bottom-nav.php'; ?>

<style>
  .reporte-item {
    display: flex;
    align-items: center;
    gap: 12px;
    background: rgba(255,255,255,.95);
    color: #0F2F5A;
    padding: 16px;
    border-radius: 1.25rem;
    box-shadow: 0 6px 16px rgba(0,0,0,.12);
    font-weight: 500;
  }

  .reporte-item span {
    font-size: 1.4rem;
  }
</style>
