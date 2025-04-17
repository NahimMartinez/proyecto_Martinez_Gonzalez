<nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?= base_url('#') ?>">
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
              <a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#registroModal">
                  <i class="fas fa-user"></i> Registrarse
              </a>
          </li>

          <!-- Modal de Registro -->
          <div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header bg-verde-selva text-white">
                          <h5 class="modal-title" id="registroModalLabel">Crear una cuenta</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                      </div>
                      <div class="modal-body">
                          <form>
                              <div class="mb-3">
                                  <label for="nombre" class="form-label">Nombre completo</label>
                                  <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre completo" required>
                              </div>
                              <div class="mb-3">
                                  <label for="email" class="form-label">Correo electrónico</label>
                                  <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" required>
                              </div>
                              <div class="mb-3">
                                  <label for="password" class="form-label">Contraseña</label>
                                  <input type="password" class="form-control" id="password" placeholder="Crea una contraseña" required>
                              </div>
                              <div class="mb-3">
                                  <label for="confirmPassword" class="form-label">Confirmar contraseña</label>
                                  <input type="password" class="form-control" id="confirmPassword" placeholder="Confirma tu contraseña" required>
                              </div>
                              <button type="submit" class="btn btn-cta w-100">Registrarse</button>
                          </form>
                      </div>
                      <div class="modal-footer">
                          <p class="text-center w-100">¿Ya tienes una cuenta? <a href="#" class="text-verde-selva" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">Inicia sesión</a></p>
                      </div>
                  </div>
              </div>
          </div>
          <li class="nav-item">
            <a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="fas fa-sign-in-alt"></i> Ingresar
            </a>
        </li>

        <!-- Modal de Iniciar Sesión -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-verde-selva text-white">
                        <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="loginEmail" placeholder="Ingresa tu correo electrónico" required>
                            </div>
                            <div class="mb-3">
                                <label for="loginPassword" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="loginPassword" placeholder="Ingresa tu contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-cta w-100">Iniciar Sesión</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p class="text-center w-100">¿No tienes una cuenta? <a href="#" class="text-verde-selva" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registroModal">Regístrate</a></p>
                    </div>
                </div>
            </div>
        </div>
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