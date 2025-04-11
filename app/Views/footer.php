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
            <ul class="list-unstyled">
              <li><a href="<?= base_url('termYCondiciones') ?>" class="text-white">Términos y condiciones</a></li>
            </ul>
            <ul class="list-unstyled">
              <li><a href="<?= base_url('comercializacion') ?>" class="text-white">Comercialización</a></li>
            </ul>
            <ul class="list-unstyled">
              <li><a href="<?= base_url('contacto') ?>" class="text-white">Contacto</a></li>
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
    </footer>
    </body>
    </html>