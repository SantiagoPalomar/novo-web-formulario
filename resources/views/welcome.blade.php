<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inversiones Novo S.A.S</title>
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>

@include('partials.navbar')

<!-- HERO -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-content">
    <h1>Innovación que impulsa
      <span>Compromiso que respalda</span>
    </h1>
    <p>Proveemos productos de calidad para la salud y el bienestar</p>
    <a href="/productos" class="btn-hero">Nuestros Productos</a>
  </div>
  <svg class="hero-wave" viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,30 C360,70 1080,0 1440,35 L1440,60 L0,60 Z" fill="#f5f6f8"/>
    <path d="M0,42 C400,10 900,60 1440,30 L1440,60 L0,60 Z" fill="#00a5b0" opacity="0.18"/>
  </svg>
</section>

<!-- PRODUCTOS Y SERVICIOS -->
<section class="section-products">
  <h2>Nuestros productos y servicios</h2>
  <div class="products-grid">

    <a href="/productos" class="product-card">
      <img src="{{ asset('images/welcome/jeringa.svg') }}" alt="jeringa" width="64" height="64">
      <span>Insumos<br>médico-quirúrgicos</span>
    </a>

    <a href="/productos" class="product-card">
      <img src="{{ asset('images/welcome/odontologia.svg') }}" alt="odontologia" width="64" height="64">
      <span>Instrumental<br>odontológico</span>
    </a>

    <a href="/productos" class="product-card">
      <img src="{{ asset('images/welcome/herramientas.svg') }}" alt="electrodomesticos" width="64" height="64">
      <span>Electrodomésticos<br>y herramientas</span>
    </a>

    <a href="/productos" class="product-card">
      <img src="{{ asset('images/welcome/medicamento.svg') }}" alt="insumos" width="64" height="64">
      <span>Insumos<br>esterilización y EPP</span>
    </a>

    <a href="/formulario" class="product-card">
      <img src="{{ asset('images/welcome/novo.svg') }}" alt="novo parking" width="64" height="64">
      <span>Novo<br>Parking</span>
    </a>

    <a href="/productos" class="product-card">
      <img src="{{ asset('images/welcome/papeleria.svg') }}" alt="cafeteria" width="64" height="64">
      <span>Papelería, aseo<br>y cafetería</span>
    </a>

  </div>
</section>

<!-- CONTÁCTANOS -->
<section id="contacto" class="section-contact">
  <div class="contact-left">
    <h2>Contáctanos</h2>
    <p>Necesitas más información sobre nuestros<br>productos o servicios</p>
    <p class="contact-phone"> 1234567890 </p>
  </div>
  <div class="contact-right"></div>
</section>

@include('partials.footer')

</body>
</html>
