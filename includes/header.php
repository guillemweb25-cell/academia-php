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
    <link rel="stylesheet" href="css/lightbox.css">
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <a href="index.php" class="logo">Academia web</a>
    
            <button class="nav-toggle" aria-label="Abrir menú">
                ☰
            </button>
    
            <nav class="main-nav">
                <a href="acerca.php">Acerca de</a>
                <a href="cursos.php">Cursos</a>
                <a href="galleria.php">Galeria</a>
            </nav>
        </div>
    </header>
    <section class="container site-content">

