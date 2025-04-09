<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Cambiar esto para que coincida exactamente con el enlace
$routes->get('sobreNosotros', 'SobreNosotros::index');