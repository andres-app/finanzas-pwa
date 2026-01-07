<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title><?= $titulo ?? 'Chanchito' ?></title>

  <!-- Viewport / PWA -->
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />

  <!-- PWA -->
  <link rel="manifest" href="<?= BASE_URL ?>/manifest.json">
  <meta name="theme-color" content="#0F2F5A">

  <!-- iOS PWA -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="apple-mobile-web-app-title" content="Chanchito">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#0F2F5A'
          }
        }
      }
    }
  </script>

  <!-- GLOBAL STYLES + TRANSITIONS -->
  <style>
    html, body {
      height: 100%;
      margin: 0;
      -webkit-tap-highlight-color: transparent;
    }

    /* ===== PAGE TRANSITION ===== */
    .page {
      opacity: 0;
      transform: translateY(12px);
      animation: pageEnter .35s ease-out forwards;
    }

    @keyframes pageEnter {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* ===== iOS BOTTOM TAB BAR ===== */
    .ios-tabbar {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      height: 84px;
      background: rgba(255,255,255,.95);
      backdrop-filter: blur(14px);
      border-top: 1px solid rgba(0,0,0,.08);
      display: flex;
      justify-content: space-around;
      align-items: center;
      z-index: 50;
    }

    .tab {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 4px;
      font-size: 0.7rem;
      color: #94a3b8;
      text-decoration: none;
      transition: transform .15s ease;
    }

    .tab .icon {
      width: 24px;
      height: 24px;
      stroke: currentColor;
      fill: none;
      stroke-width: 1.8;
    }

    .tab.active {
      color: #0F2F5A;
    }

    .tab.active .icon {
      stroke-width: 2.2;
    }

    .tab:active {
      transform: scale(.92);
    }

    .has-bottom-nav {
      padding-bottom: 100px;
    }
  </style>

  <!-- SERVICE WORKER -->
  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('<?= BASE_URL ?>/service-worker.js');
      });
    }
  </script>

  <!-- PAGE EXIT TRANSITION -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('a').forEach(link => {
        const href = link.getAttribute('href');
        if (!href || !href.startsWith('<?= BASE_URL ?>')) return;

        link.addEventListener('click', e => {
          e.preventDefault();
          const page = document.querySelector('.page');
          if (!page) {
            window.location = href;
            return;
          }

          page.style.opacity = '0';
          page.style.transform = 'translateY(-12px)';
          page.style.transition = 'all .25s ease-in';

          setTimeout(() => {
            window.location = href;
          }, 250);
        });
      });
    });
  </script>

</head>

<body class="bg-primary text-white flex flex-col min-h-screen has-bottom-nav">

<!-- HEADER -->
<header class="px-5 py-4 flex justify-between items-center shrink-0">
  <h1 class="text-xl font-semibold tracking-tight">
    <?= $appName ?? 'Chanchito' ?>
  </h1>
  <span class="text-sm text-blue-200">
    Hola, <?= $usuario ?? 'Usuario' ?>
  </span>
</header>
