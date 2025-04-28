<!-- Sección Carrusel ajustada a pantalla completa -->
<section class="carousel-section">
  <div
    id="mainCarousel"
    class="carousel slide"
    data-bs-ride="carousel"
    data-bs-interval="5000"
  >
    <!-- Indicadores -->
    <div class="carousel-indicators">
      <button
        type="button"
        data-bs-target="#mainCarousel"
        data-bs-slide-to="0"
        class="active"
      ></button>
      <button
        type="button"
        data-bs-target="#mainCarousel"
        data-bs-slide-to="1"
      ></button>
      <button
        type="button"
        data-bs-target="#mainCarousel"
        data-bs-slide-to="2"
      ></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
      <!-- Slide 1 (Pesca) -->
      <div class="carousel-item active">
        <img
          src="<?= base_url('assets/img/imagenes_pagina/pescador.png') ?>"
          class="d-block w-100"
          alt="Pesca"
        />
        <div class="carousel-caption">
          <h2 class="display-4">Equipamiento de pesca</h2>
          <p class="lead">¡Hasta 30% OFF en cañas de alta gama!</p>
          <button class="btn btn-cta btn-lg" onclick="location.href='#ofertas-relampago'">Ver Ofertas</button>
        </div>
      </div>

      <!-- Slide 2 (Camping) -->
      <div class="carousel-item">
        <img
          src="<?= base_url('assets/img/imagenes_pagina/carpa.png') ?>"
          class="d-block w-100"
          alt="Camping"
        />
        <div class="carousel-caption">
          <h2 class="display-4">Equipos para la aventura</h2>
          <p class="lead">
            Tiendas y sacos de dormir con 25% OFF
          </p>
          <button class="btn btn-cta btn-lg" onclick="location.href='#productos-destacados'">Ver Colección</button>
        </div>
      </div>

      <!-- Slide 3 (Naturaleza) -->
      <div class="carousel-item">
        <img
          src="<?= base_url('assets/img/imagenes_pagina/paisaje.png') ?>"
          class="d-block w-100"
          alt="Naturaleza"
        />
        <div class="carousel-caption">
          <h2 class="display-4">Conecta con la naturaleza</h2>
          <p class="lead">
            Equipamiento especializado para la flora y fauna de Corrientes
          </p>
          <button class="btn btn-cta btn-lg" onclick="location.href='#ofertas-relampago'">Descubrir</button>
        </div>
      </div>
    </div>

    <!-- Controles de navegación -->
    <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#mainCarousel"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#mainCarousel"
      data-bs-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>
</section>
<br>
<!-- Sección Productos Destacados -->
<section class="container mb-5" id="productos-destacados">
  <h2 class="text-center mb-4">PRODUCTOS DESTACADOS</h2>
  <p class="text-muted text-center mb-4">
    Los productos que arrasan en ventas
  </p>

  <div class="row g-4">
    <div class="col-6 col-md-6 col-lg-4">
      <div class="card card-producto h-100">
        <span class="badge badge-oferta">3 cuotas sin interés</span>
        <img src="assets/img/productos_ejemplo/caña1.png" class="card-img-top" alt="Caña" />
        <div class="card-body">
          <div class="card-text-container">
            <h5 class="card-title">Caña Spinit Tempest 2.4 Mts</h5>
            <p class="card-text">Resistencia: 150-300 gramos</p>
          </div>
          <div class="card-action-container">
            <h4 class="text-success">$37.500</h4>
            <div class="btn-container">
              <button class="btn btn-productos">Ver más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-4">
      <a href="<?= base_url('producto') ?>" class="card-link">
        <div class="card card-producto h-100">
          <span class="badge badge-oferta">6 cuotas sin interés</span>
          <img src="assets/img/productos_ejemplo/caña2.png" class="card-img-top" alt="Caña" />
          <div class="card-body">
            <div class="card-text-container">
              <h5 class="card-title">Caña completa</h5>
              <p class="card-text">Material: fibra de vidrio</p>
            </div>
            <div class="card-action-container">
              <h4 class="text-success">$50.500</h4>
              <div class="btn-container">
                <button class="btn btn-productos">Ver más</button>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-6 col-lg-4">
      <div class="card card-producto h-100">
        <span class="badge badge-oferta">3 cuotas sin interés</span>
        <img src="assets/img/productos_ejemplo/carpa1.png" class="card-img-top" alt="Carpa" />
        <div class="card-body">
          <div class="card-text-container">
            <h5 class="card-title">Carpa completa</h5>
            <p class="card-text">Capacidad: 2 personas</p>
          </div>
          <div class="card-action-container">
            <h4 class="text-success">$71.500</h4>
            <div class="btn-container">
              <button class="btn btn-productos">Ver más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-4">
      <div class="card card-producto h-100">
        <span class="badge badge-oferta">3 cuotas sin interés</span>
        <img src="assets/img/productos_ejemplo/carpa2.png" class="card-img-top" alt="Carpa" />
        <div class="card-body">
          <div class="card-text-container">
            <h5 class="card-title">Carpa completa + accesorios</h5>
            <p class="card-text">Capacidad: 4 personas</p>
          </div>
          <div class="card-action-container">
            <h4 class="text-success">$112.500</h4>
            <div class="btn-container">
              <button class="btn btn-productos">Ver más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-4">
      <div class="card card-producto h-100">
        <span class="badge badge-oferta">6 cuotas sin interés</span>
        <img src="assets/img/productos_ejemplo/bota1.png" class="card-img-top" alt="Caña" />
        <div class="card-body">
          <div class="card-text-container">
            <h5 class="card-title">Bota de aventura</h5>
            <p class="card-text">Material: cuero y goma</p>
          </div>
          <div class="card-action-container">
            <h4 class="text-success">$78.500</h4>
            <div class="btn-container">
              <button class="btn btn-productos">Ver más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-4">
      <div class="card card-producto h-100">
        <span class="badge badge-oferta">3 cuotas sin interés</span>
        <img src="assets/img/productos_ejemplo/mochila1.png" class="card-img-top" alt="Caña" />
        <div class="card-body">
          <div class="card-text-container">
            <h5 class="card-title">Mochila de aventura</h5>
            <p class="card-text">Capacidad: 70 litros</p>
          </div>
          <div class="card-action-container">
            <h4 class="text-success">$125.500</h4>
            <div class="btn-container">
              <button class="btn btn-productos">Ver más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Primera sección con efecto paralaje -->
<section class="seccion-paralaje" style="background-image: url('<?= base_url('assets/img/imagenes_pagina/paralaje1.png') ?>');">
  <div class="contenido-paralaje">
    <h3>Experiencias únicas en la naturaleza</h3>
    <p>Descubre nuestros productos de alta calidad para tus aventuras al aire libre</p>
    <a class="btn btn-transparente" onclick="location.href='#productos-destacados'">Explorar equipamiento</a>
  </div>
</section>

<!-- Sección Ofertas Relámpago -->

<section id="ofertas-relampago" class="container mb-5">
  <h2 class="text-center mb-4">OFERTAS RELÁMPAGO</h2>

  <p class="text-muted text-center mb-4">
    Los productos a precios inigualables
  </p>
  <div class="row g-4">
    <div class="col-6 col-md-3">
      <div class="card card-producto h-100">
        <span class="badge bg-danger position-absolute top-0 end-0 m-2" id="timer-1">
          Finaliza en 07:05:20
        </span>
        <img src="assets/img/productos_ejemplo/remera1.png" class="card-img-top" alt="Oferta" />
        <div class="card-body">
          <div class="card-text-container">
            <h5 class="card-title">Campera de pesca</h5>
            <p class="card-text">Ultraliviana y comoda</p>
          </div>
          <div class="card-action-container">
            <h4 class="text-danger">$89.999</h4>
            <small class="text-success d-block">3 cuotas sin interés</small>
            <div class="btn-container">
              <button class="btn btn-productos">Ver más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card card-producto h-100">
        <span class="badge bg-danger position-absolute top-0 end-0 m-2" id="timer-2">
          Finaliza en 06:45:10
        </span>
        <img src="assets/img/productos_ejemplo/remera2.png" class="card-img-top" alt="Oferta" />
        <div class="card-body">
          <div class="card-text-container">
            <h5 class="card-title">Campera camuflada</h5>
            <p class="card-text">Proteccion contra los rayos del sol</p>
          </div>
          <div class="card-action-container">
            <h4 class="text-danger">$99.999</h4>
            <small class="text-success d-block">3 cuotas sin interés</small>
            <div class="btn-container">
              <button class="btn btn-productos">Ver más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card card-producto h-100">
        <span class="badge bg-danger position-absolute top-0 end-0 m-2" id="timer-3">
          Finaliza en 05:30:00
        </span>
        <img src="assets/img/productos_ejemplo/carpa3.png" class="card-img-top" alt="Oferta" />
        <div class="card-body">
          <div class="card-text-container">
            <h5 class="card-title">Carpa completa</h5>
            <p class="card-text">Con capacidad para 5 personas</p>
          </div>
          <div class="card-action-container">
            <h4 class="text-danger">$120.999</h4>
            <small class="text-success d-block">3 cuotas sin interés</small>
            <div class="btn-container">
              <button class="btn btn-productos">Ver más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card card-producto h-100">
        <span class="badge bg-danger position-absolute top-0 end-0 m-2 " id="timer-4">
          Finaliza en 04:15:50
        </span>
        <img src="assets/img/productos_ejemplo/caja1.png" class="card-img-top" alt="Oferta" />
        <div class="card-body">
          <div class="card-text-container">
            <h5 class="card-title">Caja de pesca Vintage</h5>
            <p class="card-text">Capacidad: 15 litros</p>
          </div>
          <div class="card-action-container">
            <h4 class="text-danger">$47.850</h4>
            <small class="text-success d-block">3 cuotas sin interés</small>
            <div class="btn-container">
              <button class="btn btn-productos">Ver más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Segunda sección con efecto paralaje -->
<section class="seccion-paralaje" style="background-image: url('<?= base_url('assets/img/imagenes_pagina/paralaje2.png') ?>');">
  <div class="contenido-paralaje">
    <h3>Conecta con la naturaleza</h3>
    <p>El mejor equipamiento para tus expediciones de pesca y aventura</p>
    <a onclick="location.href='#productos-destacados'" class="btn btn-transparente">Ver colección</a>
  </div>
</section>

<?php include 'ubicacionHorarios.php'; ?>

<!-- Newsletter -->
<section class="seccion-newsletter text-white">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h3>
          <i class="fas fa-envelope-open-text me-2"></i>Mantente informado
        </h3>
        <p class="texto-destacado">
          Recibe novedades, ofertas exclusivas y consejos para tus aventuras
        </p>
      </div>
      <div class="col-md-6">
        <form class="d-flex gap-2">
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="Ingresa tu correo electrónico"
            pattern="^[^@\s]+@[^@\s]+\.[^@\s]+$" 
            title="Por favor, ingresa un correo válido"
            required
          >
          <button class="btn btn-cta">Suscribirse</button>
        </form>
      </div>
    </div>
  </div>
</section>







