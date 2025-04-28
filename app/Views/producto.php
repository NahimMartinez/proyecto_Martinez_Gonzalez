<body>
  <div class="container my-5">
    <div class="row">
      <!-- Imagen del producto -->
      <div class="col-md-6">
        <img src="assets/img/caña2.png" class="img-fluid" alt="Producto">
      </div>
      <!-- Detalles del producto -->
      <div class="col-md-6">
        <h1 class="mb-3">Caña completa</h1>
        <p class="text-muted">Categoría: <strong>Cañas</strong></p>
        <h2 class="text-success mb-3">$50.500</h2>
        <p class="mb-4">
        Material: fibra de vidrio
        </p>
        <div class="d-flex gap-3">
          <button class="btn btn-primary btn-lg">Añadir al Carrito</button>
          <button class="btn btn-outline-secondary btn-lg">Volver</button>
        </div>
      </div>
    </div>
    <!-- Productos relacionados -->
    <div class="mt-5">
      <h3 class="mb-4">Productos Relacionados</h3>
      <div class="row g-4">
        <div class="col-md-3">
          <div class="card">
            <img src="<?= base_url('assets/img/relacionado1.png') ?>" class="card-img-top" alt="Relacionado">
            <div class="card-body">
              <h5 class="card-title">Producto Relacionado 1</h5>
              <p class="text-success">$49.999</p>
              <button class="btn btn-sm btn-primary">Ver más</button>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="<?= base_url('assets/img/relacionado2.png') ?>" class="card-img-top" alt="Relacionado">
            <div class="card-body">
              <h5 class="card-title">Producto Relacionado 2</h5>
              <p class="text-success">$59.999</p>
              <button class="btn btn-sm btn-primary">Ver más</button>
            </div>
          </div>
        </div>
        <!-- Añadir más productos -->
      </div>
    </div>
  </div> 
</body>

