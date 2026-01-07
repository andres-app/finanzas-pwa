<?php
$titulo = 'Inicio | Chanchito';
$appName = 'Chanchito';
$usuario = 'Andres';

require __DIR__ . '/../layout/header.php';
?>

<main class="page flex-1 flex items-center px-5">
  <div class="grid grid-cols-2 gap-5 w-full max-w-md mx-auto">

    <a href="<?= BASE_URL ?>/gastos" class="apple-card bg-emerald-400">
      <div class="icon">💸</div>
      <span>Gastos</span>
    </a>

    <a  class="apple-card bg-yellow-400 text-primary">
      <div class="icon">💰</div>
      <span>Ingresos</span>
    </a>

    <a  class="apple-card bg-blue-400">
      <div class="icon">🏦</div>
      <span>Ahorro</span>
    </a>

    <a  class="apple-card bg-purple-500">
      <div class="icon">📊</div>
      <span>Reportes</span>
    </a>

    <a  class="apple-card bg-sky-400">
      <div class="icon">🗂️</div>
      <span>Categorías</span>
    </a>

    <a  class="apple-card bg-red-500">
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
    box-shadow:
      0 20px 40px rgba(0,0,0,.25),
      inset 0 1px 0 rgba(255,255,255,.25);
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
