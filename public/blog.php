<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
// Evita que el navegador guarde esta página en caché
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitalis | Blog</title>
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/blog.css">
</head>
<body>

<aside class="sidebar">
    <a href="home.php" class="logo">VITALIS</a>
    <nav>
        <ul>
            <li><a href="home.php">🏠 Inicio</a></li>
            <li class="active"><a href="blog.php">📝 Blog</a></li>
            <li><a href="consejos.php">🔍 Consejos</a></li>
            <li><a href="salud.php">💚 Salud</a></li>
            <li><a href="bienestar.php">❤️ Bienestar</a></li>
            <li><a href="perfil.php">👤 Mi Perfil</a></li>
            <li><a href="notificaciones.php">🔔 Notificaciones</a></li>
        </ul>
    </nav>
</aside>

<div class="page-body">

    <input type="text" placeholder="¿Qué estás buscando?" class="search">

    <div class="blog-layout">
        <main class="main">

            <div class="post">
                <h4>Maria López · 3h</h4>
                <h3>10 Superalimentos para Mejorar tu Salud</h3>
                <p>Descubre cuáles son los superalimentos que pueden potenciar tu salud y bienestar.</p>
                <div class="tags">
                    <span>#Nutrición</span>
                    <span>#Superalimentos</span>
                </div>
            </div>

            <div class="post">
                <h4>Andrea Cárdenas · 3h</h4>
                <h3>5 Ejercicios para Fortalecer el Core</h3>
                <p>Descubre una rutina efectiva para tonificar tu core.</p>
                <div class="tags">
                    <span>#Ejercicio</span>
                    <span>#Core</span>
                    <span>#Superación</span>
                </div>
            </div>

            <div class="post">
                <h4>Felipe Angeles · 4h</h4>
                <h3>Mindfulness: Guía para Principiantes</h3>
                <p>Aprende cómo iniciar en mindfulness.</p>
                <div class="tags">
                    <span>#Bienestar</span>
                    <span>#Mindfulness</span>
                </div>
            </div>

        </main>

        <aside class="right">
            <div class="card">
                <h3>Tendencias</h3>
                <ul>
                    <li>🥗 Nutrición Saludable</li>
                    <li>🏋️ Ejercicio en Casa</li>
                    <li>🧘 Meditación</li>
                    <li>📋 Hábitos Saludables</li>
                </ul>
            </div>
            <div class="card">
                <h3>A quién seguir</h3>
                <p>Carlos Herrera</p>
                <p>Laura Díaz</p>
            </div>
        </aside>
    </div>

</div>

</body>
</html>