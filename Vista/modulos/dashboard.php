<?php
$titulo = 'Inicio | Mis Finanzas';
$appName = 'Mis Finanzas';
$usuario = 'Andres';

require __DIR__ . '/../layout/header.php';
?>

<main class="page flex-1 flex items-center px-5">
<div class="grid grid-cols-2 gap-5 w-full max-w-md mx-auto">

  <a href="<?= BASE_URL ?>/gastos" class="apple-card bg-emerald-100/80 text-emerald-700">
    <div class="icon">💸</div>
    <span>Gastos</span>
  </a>

  <a href="<?= BASE_URL ?>/ingresos" class="apple-card bg-amber-100/80 text-amber-700">
    <div class="icon">💰</div>
    <span>Ingresos</span>
  </a>

  <a href="<?= BASE_URL ?>/ahorro" class="apple-card bg-sky-100/80 text-sky-700">
    <div class="icon">🏦</div>
    <span>Ahorro</span>
  </a>

  <a href="<?= BASE_URL ?>/reportes" class="apple-card bg-violet-100/80 text-violet-700">
    <div class="icon">📊</div>
    <span>Reportes</span>
  </a>

  <a href="<?= BASE_URL ?>/categorias" class="apple-card bg-slate-100/80 text-slate-700">
    <div class="icon">🗂️</div>
    <span>Categorías</span>
  </a>

  <a href="<?= BASE_URL ?>/logout" class="apple-card bg-rose-100/80 text-rose-700">
    <div class="icon">🚪</div>
    <span>Salir</span>
  </a>

</div>

</main>

<?php require __DIR__ . '/../layout/bottom-nav.php'; ?>

<style>
.apple-card {
  aspect-ratio: 1 / 1;
  border-radius: 2rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-weight: 500;
  text-align: center;
  backdrop-filter: blur(6px);
  box-shadow:
    0 10px 30px rgba(0,0,0,.12),
    inset 0 1px 0 rgba(255,255,255,.6);
  transition: transform .2s ease, box-shadow .2s ease;
}


  .apple-card .icon {
    font-size: 4.2rem;
    margin-bottom: .6rem;
  }

  .apple-card span {
    font-size: 1.05rem;
  }

  .apple-card:active {
    transform: scale(.96);
  }
</style>
