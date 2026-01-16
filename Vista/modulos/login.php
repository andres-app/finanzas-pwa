<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Location: dashboard");
    exit;
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Login | Mis Finanzas.pe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#0F2F5A',
            secondary: '#153E75',
            accent: '#F2B705'
          }
        }
      }
    }
  </script>
</head>

<body class="min-h-screen bg-primary flex items-center justify-center">

  <div class="w-full max-w-md bg-secondary rounded-2xl shadow-2xl p-8">

    <!-- Logo -->
    <div class="text-center mb-6">
      <h1 class="text-3xl font-bold text-white">Mis Finanzas.pe</h1>
      <p class="text-blue-200 mt-2">
        Ahorra carajo
      </p>
    </div>

    <!-- Form -->
    <<form class="space-y-5" method="POST">

      <div>
        <label class="text-sm text-blue-200">Usuario</label>
        <input
          type="text"
          name="usuario"
          placeholder="Ingresa tu usuario"
          class="w-full mt-1 h-12 px-4 rounded-xl bg-[#0B2447] text-white border border-blue-900 focus:outline-none focus:ring-2 focus:ring-accent"
          required
        />
      </div>

      <div>
        <label class="text-sm text-blue-200">Contraseña</label>
        <input
          type="password"
          name="password"
          placeholder="********"
          class="w-full mt-1 h-12 px-4 rounded-xl bg-[#0B2447] text-white border border-blue-900 focus:outline-none focus:ring-2 focus:ring-accent"
          required
        />
      </div>

      <button
        type="submit"
        class="w-full h-12 rounded-xl bg-accent text-primary font-semibold text-lg hover:brightness-110 active:scale-95 transition"
      >
        Iniciar sesión
      </button>
    </form>

    <!-- Footer -->
    <p class="text-center text-xs text-blue-300 mt-6">
      © 2026 Appsauri · Todos los derechos reservados
    </p>

  </div>

</body>
</html>
