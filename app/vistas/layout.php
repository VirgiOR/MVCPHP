<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechZone - Tienda de Informática</title>
    <link rell='stylesheet' href="../../public/asset/estilos.css">
</head>
<body>
    <header>
        <h1> TechZone - Tu tienda de Informática</h1>
        <nav>
            <ul>
                <li><a  href="/">Inicio</a></li>
            </ul>
        </nav>
        <div class="botones-login">
            <a href="/registro">Registrarse</a>
        </div>
</header>
<main>
    <?php include($vista); ?>

</main>
<footer>
    <p>$copy;  <?=date('Y') ?> TechZone. Todos los derechos reservados. >/p>
</footer>


    
</body>
</html>