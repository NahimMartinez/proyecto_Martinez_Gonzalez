<!-- Sección Carrusel ajustada a pantalla completa -->
    <section class="mb-5 carousel-section">
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
              <h2 class="display-4">Equipamiento de pesca</h2>
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
              <h2 class="display-4">Equipos para la aventura</h2>
              <p class="lead">
                Tiendas y sacos de dormir con 25% OFF
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
            <p class="texto-destacado">
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







