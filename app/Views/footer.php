<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <!-- Sección Conócenos -->
            <div class="col-md-4">
                <h5>Conócenos</h5>
                <ul class="list-unstyled">
                    <li><a href="<?= base_url('sobreNosotros') ?>" class="text-white">Sobre nosotros</a></li>
                    <li><a href="<?= base_url('termYCondiciones') ?>" class="text-white">Términos y condiciones</a></li>
                    <li><a href="<?= base_url('comercializacion') ?>" class="text-white">Comercialización</a></li>
                    <li><a href="<?= base_url('contacto') ?>" class="text-white">Contacto</a></li>
                </ul>
            </div>

            <!-- Sección Métodos de Pago -->
            <div class="col-md-4 text-center">
                <h5>Métodos de Pago</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="https://www.visa.com.ar" target="_blank">
                            <img src="assets/img/metodos_pago/visa.png" alt="Visa" class="img-fluid me-2 logo-hover" style="width: 70px;">
                        </a>
                        <a href="https://www.mastercard.com.ar" target="_blank">
                            <img src="assets/img/metodos_pago/mastercard.png" alt="MasterCard" class="img-fluid me-2 logo-hover" style="width: 70px;">
                        </a>
                        <a href="https://www.mercadopago.com.ar" target="_blank">
                            <img src="assets/img/metodos_pago/mercadopago.png" alt="Mercado Pago" class="img-fluid me-2 logo-hover" style="width: 120px;">
                        </a>
                        <a href="https://www.pagofacil.com.ar" target="_blank">
                            <img src="assets/img/metodos_pago/pagoFacil.png" alt="Pago Facil" class="img-fluid me-2 logo-hover" style="width: 50px;">
                        </a>
                </ul>
            </div>

            <!-- Sección Formulario de Contacto y Redes Sociales -->
            <div class="col-md-4 text-end">
                <button
                    class="btn btn-cta rounded-pill shadow mb-3"
                    data-bs-toggle="modal"
                    data-bs-target="#contactoModal"
                >
                    <i class="fas fa-envelope me-2"></i>Contacto
                </button>
                <p class="mt-2 text-white small">Comunícate con nosotros</p>
                <div class="d-flex gap-3 justify-content-end mb-3">
                    <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
                        <i class="fab fa-facebook fs-4 text-white"></i>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
                        <i class="fab fa-instagram fs-4 text-white"></i>
                    </a>
                    <a href="https://wa.me/549123456789" target="_blank" aria-label="WhatsApp">
                        <i class="fab fa-whatsapp fs-4 text-white"></i>
                    </a>
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nombre completo" required />
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Correo electrónico" required />
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Asunto" />
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" />
                            <small class="text-muted">Adjunta comprobante si es necesario</small>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Tu mensaje..." required></textarea>
                        </div>
                        <div class="d-flex gap-2 justify-content-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-cta">Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</footer>