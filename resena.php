<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Krusty Krab | Comentario.</title>
  <link rel="stylesheet" href="index.css" />
  <link rel="icon" href="img/sponge-icon.jpg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body style="background-color: #24252a">
  <header>

    <!-- Aqui va la Navbar -->
    <?php require 'php/navbar.php'; ?>

  </header>
  <div class="container">
    <h2>Deja una reseña</h2>
    <form id="reviewForm">
      <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" placeholder="Tú nombre" />
      </div>
      <div class="mb-3">
        <label for="rating" class="form-label">Calificación</label>
        <select class="form-select" id="rating">
          <option value="1">1 Estrella</option>
          <option value="2">2 Estrellas</option>
          <option value="3">3 Estrellas</option>
          <option value="4">4 Estrellas</option>
          <option value="5">5 Estrellas</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="comment" class="form-label">Reseña</label>
        <textarea id="comment" class="form-control" placeholder="Escribe tú reseña aquí" rows="5"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <div id="reviewsSection">
      <h2>Reseñas</h2>
      <ul id="reviewsList"></ul>
    </div>
  </div>

  <div class="modal" id="confirmationModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">¡Reseña completa!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Muchas gracias por tu reseña. 😃</p>
        </div>
        <div class="modal-footer">
          <button type="button" id="closeModalButton" class="btn btn-success">
            Cerrar
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Aquí esta el footer-->
  <?php require 'php/footer.php'; ?>

  <script src="JS/validacion-resena.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>