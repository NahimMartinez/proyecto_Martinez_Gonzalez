<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Yaguareté Camp - Inicio</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/miestilo.css" rel="stylesheet" />
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Caveat:wght@400;700&display=swap" rel="stylesheet">
    <style>
      /* Fuente handwriting para el título */
      .handwriting-font {
        font-family: 'Kaushan Script', cursive;
        font-size: 1.3rem;
        text-shadow: 1px 1px 1px #000;
      }
      
      /* Nueva animación de brillo que aparece y desaparece */
      @keyframes highlight-fade {
        0% { color: #FFEB3B; text-shadow: 1px 1px 1px #000; }
        50% { color: #FFF176; text-shadow: 0 0 5px #FFF59D, 0 0 10px #FFD600; }
        100% { color: #FFEB3B; text-shadow: 1px 1px 1px #000; }
      }
      
      @keyframes shipping-move {
        0% { transform: translateX(-2px); }
        50% { transform: translateX(2px); }
        100% { transform: translateX(-2px); }
      }
      
      /* Aplicamos la nueva animación */
      .highlight-fade {
        animation: highlight-fade 3s ease-in-out infinite;
      }
      
      .highlight-fade .fas.fa-shipping-fast {
        display: inline-block;
        animation: shipping-move 2s infinite;
      }
      
      /* Estilos base del navbar responsivo */
      .navbar-custom {
        width: 100% !important;
        padding: 0.25rem 0.75rem;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      }
      
      /* Espaciador para compensar el navbar fijo */
      .navbar-spacer {
        height: 80px; /* Ajusta este valor según la altura de tu navbar */
      }
      
      /* Reducciones para hacer el navbar más compacto */
      .navbar-brand-wrapper {
        padding: 0.25rem 0;
        z-index: 1;
      }
      
      .navbar-brand {
        padding: 0;
        margin-right: 0.5rem;
      }
      
      /* Mejoras a la distribución de las pestañas */
      .nav-spacing .nav-item {
        margin: 0 0.3rem;
      }
      
      .nav-spacing .nav-link {
        padding: 0.4rem 0.6rem;
        transition: background-color 0.3s;
        border-radius: 4px;
      }
      
      .nav-spacing .nav-link:hover {
        background-color: rgba(255,255,255,0.1);
      }
      
      /* Estilo para el título del logo */
      .navbar-brand {
        flex-direction: row;
        align-items: center;
      }
      
      /* Estilos para la versión desktop y tablets */
      @media (min-width: 768px) {
        .navbar-brand-wrapper {
          margin-left: 0;
          margin-right: auto;
        }
        
        .shipping-banner {
          margin-left: 10px;  /* Espacio reducido entre título y leyenda */
        }
        
        /* Ajustar espaciador para pantallas más grandes */
        .navbar-spacer {
          height: 70px;
        }
      }
      
      /* Media queries para tablets y dispositivos medianos */
      @media (max-width: 991.98px) and (min-width: 768px) {
        .shipping-banner {
          padding-top: 0;
          justify-content: flex-start;
        }
        .promo-envio {
          font-size: 0.7em !important;
        }
        .navbar-collapse {
          width: 100%;
        }
        .navbar-toggler {
          z-index: 2;
        }
      }
      
      /* Ajustes específicos para iPad mini */
      @media only screen and (min-width: 768px) and (max-width: 820px) {
        .navbar-brand-wrapper {
          max-width: 450px;
        }
        .handwriting-font {
          font-size: 1.1rem;
        }
      }
      
      /* Ajustes específicos para iPad Air */
      @media only screen and (min-width: 820px) and (max-width: 912px) {
        .navbar-brand-wrapper {
          max-width: 350px;
        }
      }
      
      /* Ajustes para móviles - centrado */
      @media (max-width: 767.98px) {
        .navbar-brand-wrapper {
          width: 100%;
          align-items: center !important;
          margin: 0 auto;
        }
        
        .navbar-brand {
          flex-direction: column;
          text-align: center;
          margin-right: 0;
        }
        
        .logo-text {
          margin-top: 2px;
          margin-left: 0 !important;
          font-size: 1.1rem;
        }
        
        .shipping-banner {
          width: 100%;
          justify-content: center;
          margin-left: 0 !important;
        }
        
        .promo-envio {
          font-size: 0.65em !important;
        }
        
        /* Ajustar espaciador para móviles */
        .navbar-spacer {
          height: 100px;
        }
      }
    </style>
  </head>
  <body>
    <header></header>