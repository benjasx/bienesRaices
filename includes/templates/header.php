<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/index.php">
                    <img src="/build/img/logo.svg" alt="Logo">
                </a>
                <div class="navdark">
                    <div class="mobile-menu">
                        <img src="/build/img/barras.svg" alt="menu-Hamburgesas">
                    </div>
                    <nav class="navegacion">
                        <a href="/nosotros.php">Nosotros</a>
                        <a href="/anuncios.php">Anuncios</a>
                        <a href="/blog.php">Blog</a>
                        <a href="/contacto.php">Contacto</a>
                    </nav>

                    <div class="dark-mode-btn">
                        <img src="/build/img/dark-mode.svg" alt="Dark-Mode">
                    </div>
                </div>

            </div> <!-- Cierre de la barra -->
            <?php if ($inicio) { ?>
                <h1>Venta de casas y departamentos exclucivos de lujo 🏡</h1>
            <?php } ?>
        </div>
    </header>