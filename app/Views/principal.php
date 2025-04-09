<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Yaguareté Camp - Inicio</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/miestilo.css" rel="stylesheet" />
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" alt="Logo" width="60" height="60" />
            Yaguareté Camp
          </a>
          <span class="promo-envio"
            ><i class="fas fa-shipping-fast"></i> ¡Los primeros 3 envíos o
            compras +$70.000 tienen envío gratis!</span
          >

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <!-- Menú Productos -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  data-bs-toggle="dropdown"
                >
                  Productos
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li class="dropdown-header">Cañas de Pesca</li>
                  <li><a class="dropdown-item" href="#">Spinning</a></li>
                  <li><a class="dropdown-item" href="#">Baitcasting</a></li>
                  <li><a class="dropdown-item" href="#">Telescópicas</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="dropdown-header">Camping</li>
                  <li><a class="dropdown-item" href="#">Tiendas</a></li>
                  <li><a class="dropdown-item" href="#">Sacos de dormir</a></li>
                  <li><a class="dropdown-item" href="#">Iluminación</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="dropdown-header">Vestimenta</li>
                  <li><a class="dropdown-item" href="#">Ropa técnica</a></li>
                  <li><a class="dropdown-item" href="#">Calzado</a></li>
                  <li><a class="dropdown-item" href="#">Accesorios</a></li>
                </ul>
              </li>

              <!-- Menú Guías -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  data-bs-toggle="dropdown"
                >
                  Guías
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li>
                    <a class="dropdown-item" href="#">Tus primeros pasos</a>
                  </li>
                  <li><a class="dropdown-item" href="#">Pesca avanzada</a></li>
                  <li><a class="dropdown-item" href="#">Camping experto</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link text-white" href="#"
                  ><i class="fas fa-user"></i> Registrarse</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#"
                  ><i class="fas fa-sign-in-alt"></i> Ingresar</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">
                  <i class="fas fa-shopping-cart"></i> Carrito
                  <span class="badge bg-danger">3</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Sección Carrusel actualizada con controles e intervalo -->
    <section class="mb-5">
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
              src="assets/img/pescador.jpeg"
              class="d-block w-100"
              alt="Pesca"
            />
            <div class="carousel-caption">
              <h2 class="display-4">Equipamiento profesional de pesca</h2>
              <p class="lead">¡Hasta 30% OFF en cañas de alta gama!</p>
              <button class="btn btn-cta btn-lg">Ver Ofertas</button>
            </div>
          </div>

          <!-- Slide 2 (Camping) -->
          <div class="carousel-item">
            <img
              src="assets/img/carpa.jpeg"
              class="d-block w-100"
              alt="Camping"
            />
            <div class="carousel-caption">
              <h2 class="display-4">Equípate para la aventura</h2>
              <p class="lead">
                Tiendas y sacos de dormir con 25% OFF + Envío gratis
              </p>
              <button class="btn btn-cta btn-lg">Ver Colección</button>
            </div>
          </div>

          <!-- Slide 3 (Naturaleza) -->
          <div class="carousel-item">
            <img
              src="assets/img/rio.jpeg"
              class="d-block w-100"
              alt="Naturaleza"
            />
            <div class="carousel-caption">
              <h2 class="display-4">Conecta con la naturaleza</h2>
              <p class="lead">
                Equipamiento especializado para la flora y fauna de Corrientes
              </p>
              <button class="btn btn-cta btn-lg">Descubrir</button>
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

    <!-- Sección Destacados -->
    <section class="container mb-5">
      <h2 class="text-center mb-4">PRODUCTOS DESTACADOS</h2>
      <p class="text-muted text-center mb-4">
        Los productos que arrasan en ventas
      </p>

      <div class="row g-4">
        <!-- Tarjeta de producto ejemplo -->
        <div class="col-md-4">
          <div class="card card-producto h-100">
            <span class="badge badge-oferta">3 cuotas sin interés</span>
            <img src="assets/img/caña1.jpg" class="card-img-top" alt="Caña" />
            <div class="card-body">
              <h5 class="card-title">Caña Spinit Tempest 2.4 Mts</h5>
              <p class="card-text">Resistencia: 150-300 gramos</p>
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="text-success">$37.500</h4>
                <button class="btn btn-outline-primary">Ver más</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Más productos... -->
      </div>
    </section>

    <!-- Sección Ofertas Relámpago -->

    <section class="container mb-5">
      <h2 class="text-center mb-4">OFERTAS RELÁMPAGO</h2>

      <p class="text-muted text-center mb-4">
        Los productos a precios inigualables
      </p>

      <div class="row g-4">
        <div class="col-md-3">
          <div class="card card-producto h-100">
            <span class="badge bg-danger position-absolute top-0 end-0 m-2"
              >Finaliza en 07:05:20</span
            >

            <img
              src="assets/img/remera1.jpg"
              class="card-img-top"
              alt="Oferta"
            />

            <div class="card-body">
              <h5 class="card-title">Saco Dormir -20°C</h5>

              <p class="card-text">Ultraliviano para alta montaña</p>

              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="text-danger">$89.999</h4>

                  <small class="text-success">3 cuotas sin interés</small>
                </div>

                <button class="btn btn-outline-primary btn-sm">Ver más</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Repetir para más ofertas -->
      </div>
    </section>

    <!-- Sección FAQ -->
    <section class="container mb-5">
      <h2 class="text-center mb-4">Preguntas Frecuentes</h2>
      <div class="accordion">
        <div class="accordion-item">
          <h3 class="accordion-header">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#pregunta1"
            >
              ¿Cómo realizo una devolución?
            </button>
          </h3>
          <div id="pregunta1" class="accordion-collapse collapse show">
            <div class="accordion-body">Contenido de respuesta...</div>
          </div>
        </div>
        <!-- Más preguntas... -->
      </div>
    </section>

    <!-- Sección Ubicación -->
    <section class="container mb-5">
      <h2 class="text-center mb-4">Nuestra Ubicación</h2>
      <div class="row align-items-center">
        <!-- Mapa -->
        <div class="col-md-6">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56638.39909330691!2d-58.879156978320346!3d-27.47237419999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b6cb77957c3%3A0xc28183f39429d39c!2sCasinos%20del%20Litoral!5e0!3m2!1ses-419!2sar!4v1744171808524!5m2!1ses-419!2sar"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>

        <!-- Horarios -->
        <div class="col-md-6">
          <div class="bg-light p-4 rounded shadow">
            <h3 class="text-center mb-3">
              <i class="fas fa-clock me-2 text-primary"></i>Horarios de Atención
            </h3>
            <ul class="list-unstyled">
              <li class="d-flex align-items-center mb-2">
                <i class="fas fa-calendar-day text-success me-2"></i>
                <strong>Lunes a Viernes:</strong> 9:00 a 17:00 hs
              </li>
              <li class="d-flex align-items-center mb-2">
                <i class="fas fa-calendar-day text-warning me-2"></i>
                <strong>Sábado:</strong> 8:00 a 12:00 hs
              </li>
              <li class="d-flex align-items-center">
                <i class="fas fa-calendar-times text-danger me-2"></i>
                <strong>Domingo:</strong> Cerrado
              </li>
            </ul>
            <p class="text-center mt-3">
              <i class="fas fa-map-marker-alt text-danger me-2"></i>
              Visítanos en nuestra sucursal para más información.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Newsletter -->
    <section class="seccion-newsletter text-white">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h3>
              <i class="fas fa-envelope-open-text me-2"></i>Mantente informado
            </h3>
            <p>
              Recibe novedades, ofertas exclusivas y consejos para tus aventuras
            </p>
          </div>
          <div class="col-md-6">
            <form class="d-flex gap-2">
              <input
                type="email"
                class="form-control"
                placeholder="tucorreo@ejemplo.com"
              />
              <button class="btn btn-cta">Suscribirse</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h5>Botón de arrepentimiento</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Cancelar compra</a></li>
              <li><a href="#" class="text-white">Devoluciones</a></li>
            </ul>
          </div>

          <div class="col-md-3">
            <h5>Conócenos</h5>
            <ul class="list-unstyled">
              <li><a href="<?= base_url('sobreNosotros') ?>" class="text-white">Sobre nosotros</a></li>
            </ul>
          </div>

          <div class="col-md-3">
            <h5>Ayuda</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Envíos</a></li>
              <li><a href="#" class="text-white">Devoluciones</a></li>
              <li><a href="#" class="text-white">Garantía</a></li>
            </ul>
          </div>

          <div class="col-md-3 text-end">
            <button
              class="btn btn-cta rounded-pill shadow"
              data-bs-toggle="modal"
              data-bs-target="#contactoModal"
            >
              <i class="fas fa-envelope me-2"></i>Contacto
            </button>
            <p class="mt-2 text-white small">Comunícate con nosotros</p>
            <div class="d-flex gap-3 justify-content-end">
              <a href="#"><i class="fab fa-facebook fs-4 text-white"></i></a>
              <a href="#"><i class="fab fa-instagram fs-4 text-white"></i></a>
              <a href="#"><i class="fab fa-whatsapp fs-4 text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal Contacto -->
    <div class="modal fade" id="contactoModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-verde-selva text-white">
            <h5 class="modal-title">Deja tu consulta</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Nombre completo"
                  required
                />
              </div>
              <div class="mb-3">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Correo electrónico"
                  required
                />
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Asunto" />
              </div>
              <div class="mb-3">
                <input type="file" class="form-control" />
                <small class="text-muted"
                  >Adjunta comprobante si es necesario</small
                >
              </div>
              <div class="mb-3">
                <textarea
                  class="form-control"
                  rows="4"
                  placeholder="Tu mensaje..."
                  required
                ></textarea>
              </div>
              <div class="d-flex gap-2 justify-content-end">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Cancelar
                </button>
                <button type="submit" class="btn btn-cta">
                  Enviar mensaje
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
