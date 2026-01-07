<?php
$titulo = 'Ingresos | Mis Finanzas';
$appName = 'Mis Finanzas';
$usuario = 'Andres';

require __DIR__ . '/../layout/header.php';
?>

<main class="page flex-1 px-5 pt-2">

  <!-- RESUMEN -->
  <section class="mb-6">
    <div class="bg-white/90 text-primary rounded-2xl p-5 shadow-lg">
      <p class="text-sm text-slate-500">Ingresos del mes</p>
      <h2 class="text-3xl font-semibold mt-1">S/ 3,200.00</h2>
    </div>
  </section>

  <!-- BOTÓN NUEVO INGRESO -->
  <section class="mb-4">
    <button class="w-full bg-emerald-500 text-white py-3 rounded-xl font-medium shadow-md active:scale-95 transition">
      + Registrar ingreso
    </button>
  </section>

  <!-- LISTA DE INGRESOS -->
  <section class="space-y-3">

    <div class="ingreso-item">
      <div class="icon bg-emerald-100 text-emerald-600">💼</div>
      <div class="flex-1">
        <p class="font-medium">Sueldo</p>
        <p class="text-xs text-slate-400">Hoy · 09:00</p>
      </div>
      <span class="monto">+ S/ 2,500.00</span>
    </div>

    <div class="ingreso-item">
      <div class="icon bg-blue-100 text-blue-600">🧾</div>
      <div class="flex-1">
        <p class="font-medium">Freelance</p>
        <p class="text-xs text-slate-400">05 Feb · 18:30</p>
      </div>
      <span class="monto">+ S/ 700.00</span>
    </div>

  </section>

</main>

<?php require __DIR__ . '/../layout/bottom-nav.php'; ?>

<style>
  .ingreso-item {
    display: flex;
    align-items: center;
    gap: 12px;
    background: rgba(255,255,255,.92);
    color: #0F2F5A;
    padding: 14px;
    border-radius: 1.25rem;
    box-shadow: 0 8px 20px rgba(0,0,0,.12);
  }

  .ingreso-item .icon {
    width: 42px;
    height: 42px;
    border-radius: 9999px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
  }

  .ingreso-item .monto {
    font-weight: 600;
    color: #16a34a;
    white-space: nowrap;
  }
</style>
