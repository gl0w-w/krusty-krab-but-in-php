<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Krusty Krab | Carrito.</title>
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" href="cards.css" />
  <link rel="stylesheet" href="compra.css" /> <!-- Nueva hoja de estilo para compra.html -->
  <link rel="icon" href="img/sponge-icon.jpg" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&family=Reddit+Mono:wght@200..900&display=swap" rel="stylesheet" />
  <script src="JS/carrito.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #24252a">

  <!-- Esta es la NavBar -->
  <?php require 'php/navbar.php'; ?>

  <div class="custom-div">
    <button type="button" class="boton-comprar" data-bs-toggle="modal" data-bs-target="#exampleModal">
      comprar
    </button>
  </div>
  <button class="boton-vaciar-carrito">vaciar carrito</button>
  </div>
  <div>
    <p class="Total-compra-txt">Total de compras:</p>
  </div>

  <div class="carrito-productos" id="productos-en-carrito-container"></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>