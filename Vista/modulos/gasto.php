<?php
$titulo = 'Gastos | Mis Finanzas';
$appName = 'Mis Finanzas';
$usuario = 'Andres';

require __DIR__ . '/../layout/header.php';
?>

<main class="page flex-1 px-5 pt-2">

  <section class="mb-6">
    <div class="bg-white/90 text-primary rounded-2xl p-5 shadow-lg">
      <p class="text-sm text-slate-500">Gastos del mes</p>
      <h2 class="text-3xl font-semibold mt-1">S/ 1,245.50</h2>
    </div>
  </section>

  <section class="mb-4">
    <button class="w-full bg-red-500 text-white py-3 rounded-xl font-medium shadow-md active:scale-95 transition">
      + Registrar gasto
    </button>
  </section>

  <section class="space-y-3">

    <div class="gasto-item">
      <div class="icon bg-red-100 text-red-500">🍔</div>
      <div class="flex-1">
        <p class="font-medium">Alimentación</p>
        <p class="text-xs text-slate-400">Hoy · 13:20</p>
      </div>
      <span class="monto">- S/ 25.00</span>
    </div>

    <div class="gasto-item">
      <div class="icon bg-blue-100 text-blue-500">🚕</div>
      <div class="flex-1">
        <p class="font-medium">Transporte</p>
        <p class="text-xs text-slate-400">Ayer · 08:10</p>
      </div>
      <span class="monto">- S/ 12.50</span>
    </div>

    <div class="gasto-item">
      <div class="icon bg-emerald-100 text-emerald-500">🏠</div>
      <div class="flex-1">
        <p class="font-medium">Servicios</p>
        <p class="text-xs text-slate-400">02 Feb · 18:00</p>
      </div>
      <span class="monto">- S/ 180.00</span>
    </div>

  </section>

</main>

<?php require __DIR__ . '/../layout/bottom-nav.php'; ?>

<style>
  .gasto-item {
    display: flex;
    align-items: center;
    gap: 12px;
    background: rgba(255,255,255,.92);
    color: #0F2F5A;
    padding: 14px;
    border-radius: 1.25rem;
    box-shadow: 0 8px 20px rgba(0,0,0,.12);
  }

  .gasto-item .icon {
    width: 42px;
    height: 42px;
    border-radius: 9999px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
  }

  .gasto-item .monto {
    font-weight: 600;
    color: #ef4444;
    white-space: nowrap;
  }
</style>
