<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="mono" content="width=device-width, initial-scale=1.0" />
  <title>Krusty Krab | Inicio.</title>
  <script src="JS/toast.js"></script>
  <script src="JS/carrito.js"></script>
  <link rel="icon" href="img/sponge-icon.jpg" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" href="cards.css" />
  <link rel="stylesheet" href="owl.carousel.min.css" />
  <link rel="stylesheet" href="owl.theme.default.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body style="background-color: #24252a">
  <div class="alert alert-info alert-dismissible fade show" style="margin: 0%; text-align: center" role="alert">
    ¡INICIA SESIÓN!
    <strong>Para así tener una mejor experiencia en la página.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  <!-- Esta es la NavBar -->
  <?php require 'php/navbar.php'; ?>

  <main>
    <!-- Aqui estan las cards de los productos-->
    <div class="card-container row row-cols-1 row-cols-md-2 row-cols-lg-3 g-0 py-5 mt-5">
      <div class="card" style="width: 24rem">
        <img src="img/krabby-patty.jpg" alt="Krabby Patty" />
        <div class="card-body">
          <h3 class="card-title">Krabby Patty</h3>
          <p>
            Esta es la mejor hamburguesa del mundo. La gran Krabby Patty es
            una de las mejores hamburguesas ya que cuenta con los mejores
            ingredientes de fondo de bikini.
          </p>
          <p>Precio: $6800</p>
          <button class="producto-Agregar" data-producto="Krabby Patty">
            Agregar
          </button>
        </div>
      </div>
      <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 14">
        <div id="toast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <strong class="me-auto">Aviso</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">Su producto se ha agregado al carrito.</div>
        </div>
      </div>
      <div class="card" style="width: 24rem">
        <img src="img/chum-burger.webp" alt="Krabby Patty" />
        <div class="card-body">
          <h3 class="card-title">Chum-burger</h3>
          <p>
            A ver... No creo que estes pensando en comprar esto, verdad? Esta
            es una de las hamburguesas de nuestro "amigo" Plankton, y bueno,
            la imagen habla por si sola.. no creo que deberias comerla.
          </p>
          <p>Precio: $7890</p>
          <button class="producto-Agregar">Agregar</button>
        </div>
      </div>
      <div class="card" style="width: 24rem">
        <img src="img/Plab-patty.webp" alt="Krabby Patty" />
        <div class="card-body">
          <h3>Plab Patty</h3>
          <p>
            La Plab Patty es una de las creaciones hechas por Don Cangrejo y
            Plankton antes de ser rivales, esta hamburguesa es perfecta para
            comer con algun amigo, ya que se siente el sabor de la amistad en
            ella.
          </p>
          <p>Precio: $5950</p>
          <button class="producto-Agregar">Agregar</button>
        </div>
      </div>
      <div class="card" style="width: 24rem">
        <img src="img/pizza.jpg" alt="Krabby Patty" />
        <div class="card-body">
          <h3>Pizza Patty</h3>
          <p>
            De la mano de nuestro amigo Calamardo nos trae la exquisita Pizza
            Patty, la combinacion que todo humano desea. Una PIZZA y una
            HAMBURGUESA JUNTAS.
          </p>
          <p>Precio: $6890</p>
          <button class="producto-Agregar">Agregar</button>
        </div>
      </div>
      <div class="card" style="width: 24rem">
        <img src="img/noodle-patty.png" alt="Krabby Patty" />
        <div class="card-body">
          <h3>Noodle Patty</h3>
          <p>
            Esta es una hamburguesa un tanto peculiar, juntamos el sabor de
            los deliciosos fideos junto a nuestro delicioso pan de
            hamburguesa.
          </p>
          <p>Precio: $5950</p>
          <button class="producto-Agregar">Agregar</button>
        </div>
      </div>
      <div class="card" style="width: 24rem">
        <img src="img/Burrito-Patty.webp" alt="Krabby Patty" />
        <div class="card-body">
          <h3>Burrito Patty</h3>
          <p>
            Esta es una de las combinaciones culinarias mas raras del local,
            juntamos el sabor de los burritos mexicanos y las hamburguesas en
            un solo producto.
          </p>
          <p>Precio: $10450</p>
          <button class="producto-Agregar">Agregar</button>
        </div>
      </div>
      <div class="card" style="width: 24rem">
        <img src="img/Jim-Patty.webp" alt="Krabby Patty" />
        <div class="card-body">
          <h3>Jim Patty</h3>
          <p>
            Esta es otra de las mejores hamburguesas que ofrecemos, esta fue
            creada por Jim, uno de los mejores trabajadores de Don Cangrejo.
          </p>
          <p>Precio: $7990</p>
          <button class="producto-Agregar">Agregar</button>
        </div>
      </div>
      <div class="card" style="width: 24rem">
        <img src="img/Jelly-Patty.webp" alt="Krabby Patty" />
        <div class="card-body">
          <h3>Jelly Patty</h3>
          <p>
            Una hamburguesa un tanto peculiar, con los ingredientes tipicos de
            una Crangreburguer normal, pero con un toque dulce de mermelada.
          </p>
          <p>Precio: $8480</p>
          <button class="producto-Agregar">Agregar</button>
        </div>
      </div>
      <div class="card" style="width: 24rem">
        <img src="img/Kelp.webp" alt="Krabby Patty" />
        <div class="card-body">
          <h3>Kelp Shake</h3>
          <p>
            No te puede faltar una de estas a la hora de comerte un
            hamburguesa, una de los mejores bebibles de fondo de bikini.
          </p>
          <p>Precio: $5440</p>
          <button class="producto-Agregar">Agregar</button>
        </div>
      </div>
    </div>
  </main>
  
  <?php require 'php/carrusel.php'; ?>

  <?php require 'php/footer.php'; ?>

  <!-- Aquí estan los scripts-->
  <script src="JS/jquery.min.js"></script>
  <script src="JS/owl.carousel.min.js"></script>
  <script src="JS/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>