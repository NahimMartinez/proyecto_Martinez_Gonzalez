<nav class="navbar navbar-expand-lg navbar-custom w-100 fixed-top">
        <div class="container-fluid px-2">
          <div class="d-flex justify-content-between align-items-center w-100">
            <!-- Wrapper para logo y promoción -->
            <div class="navbar-brand-wrapper">
              <div class="d-flex align-items-center flex-md-row flex-column">
                <a class="navbar-brand d-flex align-items-center" href="<?= base_url('#') ?>">
                  <img src="assets/img/logo.png" alt="Logo" width="50" height="50" />
                  <span class="logo-text text-white ms-2 handwriting-font">Yaguareté Camp</span>
                </a>
                
                <!-- Leyenda de envío gratis (sin separador) -->
                <div class="shipping-banner d-flex align-items-center ms-md-3">
                  <span class="promo-envio highlight-fade" style="color: #FFEB3B; font-style: italic; font-size: 0.8em; text-shadow: 1px 1px 1px #000; display: inline-block;">
                    <i class="fas fa-shipping-fast"></i> ¡Compras +$70k tienen envío gratis!
                  </span>
                </div>
              </div>
            </div>
            
            <!-- Botón hamburguesa siempre a la derecha -->
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>

          <!-- Menú colapsable -->
          <div class="collapse navbar-collapse mt-2" id="navbarNav">
            <ul class="navbar-nav ms-auto nav-spacing">
              <!-- Menú Productos -->
              <li class="nav-item dropdown mx-1">
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
              <li class="nav-item dropdown mx-1">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  data-bs-toggle="dropdown"
                >
                  Guías
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li>
                    <a class="dropdown-item" href="https://tpwd.texas.gov/publications/pwdpubs/media/pwd_bk_k0700_0639e.pdf">Tus primeros pasos</a>
                  </li>
                  <li><a class="dropdown-item" href="https://www.guiadecamping.com/manual_camping.htm">Camping</a></li>
                </ul>
              </li>

              <!-- Menú Usuario -->
              <li class="nav-item dropdown mx-1">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  data-bs-toggle="dropdown"
                >
                  <i class="fas fa-user-circle"></i> <span class="d-lg-none">Mi Cuenta</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                      <i class="fas fa-sign-in-alt me-2"></i> Iniciar Sesión
                    </a>
                  </li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#registroModal">
                      <i class="fas fa-user-plus me-2"></i> Registrarse
                    </a>
                  </li>
                </ul>
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

              <li class="nav-item mx-1">
                <a class="nav-link text-white d-flex align-items-center" href="#">
                  <div class="position-relative me-1">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge bg-danger position-absolute top-0 start-100 translate-middle badge-pill">3</span>
                  </div>
                  <span class="ms-1">Carrito</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Espaciador para compensar el navbar fijo -->
      <div class="navbar-spacer"></div>
      </header>