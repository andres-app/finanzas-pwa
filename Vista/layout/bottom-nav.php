<?php
// Detecta módulo actual desde el router (?url=...)
$path = $_GET['url'] ?? 'dashboard';
$moduloActual = explode('/', trim($path, '/'))[0];

// Helper: devuelve "active" si coincide
function isActive($m, $actual) {
  return $m === $actual ? 'active' : '';
}
?>

<nav class="ios-tabbar">

  <a href="<?= BASE_URL ?>/dashboard" class="tab <?= isActive('dashboard', $moduloActual) ?>">
    <svg viewBox="0 0 24 24" class="icon">
      <path d="M3 12L12 3l9 9M5 10v10h5v-6h4v6h5V10" />
    </svg>
    <span>Home</span>
  </a>

  <a href="<?= BASE_URL ?>/ahorro" class="tab <?= isActive('ahorro', $moduloActual) ?>">
    <svg viewBox="0 0 24 24" class="icon">
      <path d="M12 8c-2.2 0-4 1.2-4 2.7S9.8 13.5 12 13.5s4 1.2 4 2.7S14.2 19 12 19M12 4v16" />
    </svg>
    <span>Ahorros</span>
  </a>

  <a href="<?= BASE_URL ?>/reportes" class="tab <?= isActive('reportes', $moduloActual) ?>">
    <svg viewBox="0 0 24 24" class="icon">
      <path d="M4 12h16M10 18l2-2 2 2" />
    </svg>
    <span>Reportes</span>
  </a>

  <a href="<?= BASE_URL ?>/perfil" class="tab <?= isActive('perfil', $moduloActual) ?>">
    <svg viewBox="0 0 24 24" class="icon">
      <path d="M12 12a4 4 0 100-8 4 4 0 000 8zm-7 8a7 7 0 0114 0" />
    </svg>
    <span>Perfil</span>
  </a>

</nav>
