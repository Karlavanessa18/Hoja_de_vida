<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi página</title>
</head>
<body>

    <?php
        $nombre = "Karla Lopez";
        $profesion = "Estudiante Ingeniería de Sistemas";
        $edad = 20;
        $habilidades = [
            "HTML",
            "CSS",
            "JAVA",
            "JAVASCRIP",
        ]
    ?>

    <h1><?php echo $nombre; ?></h1>
    <h2><?php echo $profesion; ?></h2>

    <p>
        <?php echo "Soy " . $nombre . " y soy " . $profesion; ?>
    </p>

    <?php if ($edad >= 18): ?>
        <p>Disponible para trabajar</p>
    <?php else: ?>
        <p>Menor de edad - No puede trabajar</p>
    <?php endif; ?>

</body>
</html>