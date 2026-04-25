<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Productos – Inversiones Novo S.A.S</title>
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
  <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
</head>
<body>

@include('partials.navbar', ['active' => 'productos'])

<!-- BREADCRUMB -->
<div class="breadcrumb">
  <a href="/">Inicio</a> &nbsp;/&nbsp;
  <span class="current">Productos</span>
</div>

<!-- ENCABEZADO -->
<div class="page-header">
  <h1>Productos</h1>
  <p>Ofrecemos una amplia variedad de productos de alta calidad, ideales para clínicas, hospitales, consultorios y otros centros de salud.</p>
</div>

<div class="divider"></div>

<!-- GALERÍA -->
<section class="section-products-page">

  <div class="products-page-header">
    <h2>Nuestros Productos</h2>
    <span class="products-count">9 productos</span>
  </div>

  <div class="products-gallery">

    <div class="product-tile">
      <img class="product-tile-img" src="{{ asset('images/Productos/producto1.png') }}" alt="Guantes de Nitrilo">
      <div class="product-tile-body">
        <p class="product-tile-name">Guantes de Nitrilo</p>
      </div>
    </div>

    <div class="product-tile">
      <img class="product-tile-img" src="{{ asset('images/Productos/producto2.png') }}" alt="Jeringas Desechables">
      <div class="product-tile-body">
        <p class="product-tile-name">Jeringas Desechables</p>
      </div>
    </div>

    <div class="product-tile">
      <img class="product-tile-img" src="{{ asset('images/Productos/producto3.png') }}" alt="Esfigmomanómetro Digital">
      <div class="product-tile-body">
        <p class="product-tile-name">Esfigmomanómetro Digital</p>
      </div>
    </div>

    <div class="product-tile">
      <img class="product-tile-img" src="{{ asset('images/Productos/producto4.png') }}" alt="Termómetro Infrarrojo">
      <div class="product-tile-body">
        <p class="product-tile-name">Termómetro Infrarrojo</p>
      </div>
    </div>

    <div class="product-tile">
      <img class="product-tile-img" src="{{ asset('images/Productos/producto5.png') }}" alt="Vendas Elásticas">
      <div class="product-tile-body">
        <p class="product-tile-name">Vendas Elásticas</p>
      </div>
    </div>

    <div class="product-tile">
      <img class="product-tile-img" src="{{ asset('images/Productos/producto6.png') }}" alt="Mascarillas N95">
      <div class="product-tile-body">
        <p class="product-tile-name">Mascarillas N95</p>
      </div>
    </div>

    <div class="product-tile">
      <img class="product-tile-img" src="{{ asset('images/Productos/producto7.png') }}" alt="Equipo de Infusión">
      <div class="product-tile-body">
        <p class="product-tile-name">Equipo de Infusión</p>
      </div>
    </div>

    <div class="product-tile">
      <img class="product-tile-img" src="{{ asset('images/Productos/producto8.png') }}" alt="Electrodos Desechables">
      <div class="product-tile-body">
        <p class="product-tile-name">Electrodos Desechables</p>
      </div>
    </div>

    <div class="product-tile">
      <img class="product-tile-img" src="{{ asset('images/Productos/producto9.png') }}" alt="Bata Quirúrgica">
      <div class="product-tile-body">
        <p class="product-tile-name">Bata Quirúrgica</p>
      </div>
    </div>

  </div>

</section>

@include('partials.footer')

</body>
</html>
