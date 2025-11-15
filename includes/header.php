<?php
if (!isset($pageTitle)) {
    $pageTitle = "Mi sitio en PHP con Docker";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <header class="site-header">
        <div class="container header-inner">
            <!-- Logo o nombre del sitio -->
            <a href="index.php" class="logo">Academia web</a>

            <!-- Botón hamburguesa para móvil -->
            <button class="nav-toggle" aria-label="Abrir menú">
                ☰
            </button>

            <nav class="main-nav">
                <a href="index.php">Inicio</a>
                <a href="acerca.php">Acerca de</a>
                <a href="cursos.php">Cursos</a>
                <a href="galleria.php">Galeria</a>
            </nav>
        </div>
    </header>