<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
        }

        .productos-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }


        .producto-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.2s ease;
        }

        .producto-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgb(0 0 0 / 0.15);
        }

        .producto-nombre {
            font-weight: bold;
            font-size: 1.1rem;
            margin-bottom: 8px;
            color: #007bff;
        }

        .producto-categoria {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 12px;
        }

        .producto-descripcion {
            font-size: 0.9rem;
            margin-bottom: 12px;
            color: #333;
            flex-grow: 1;
        }

        .producto-precio {
            font-weight: bold;
            font-size: 1.1rem;
            color: #28a745;
            margin-bottom: 5px;
        }

        .producto-stock {
            font-size: 0.85rem;
            color: #888;
        }
    </style>
</head>
<body>
    <?php
        include('includes/header.php')
    ?>
    <main>
        <h1 class="titulo">Productos de Mercadroga</h1>

        <div class="productos-container">
            <?php
                include('data/productos.php');
                foreach ($productos as $id => $producto): ?>
                    <div class="producto-card">
                        <div class="producto-nombre"><?= htmlspecialchars($producto['nombre']) ?></div>
                        <div class="producto-categoria"><?= htmlspecialchars($producto['categoria']) ?></div>
                        <div class="producto-descripcion"><?= htmlspecialchars($producto['descripcion']) ?></div>
                        <div class="producto-precio">$<?= number_format($producto['precio'], 2) ?></div>
                        <div class="producto-stock"><?= $producto['stock'] ?> disponibles</div>
                    </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>