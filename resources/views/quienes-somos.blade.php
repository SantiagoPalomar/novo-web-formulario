<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>¿Quiénes Somos? – Inversiones Novo S.A.S</title>
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quienes-somos.css') }}">
</head>
<body>

@include('partials.navbar', ['active' => 'nosotros'])

<!-- BREADCRUMB -->
<div class="breadcrumb">
  <a href="/">Inicio</a> &nbsp;/&nbsp;
  <span class="current">Nosotros</span>
</div>

<!-- HERO -->
<section class="qs-hero">
  <div class="qs-hero-content">
    <h1>¿Quiénes somos?</h1>
  </div>
  <div class="qs-hero-img-wrapper">
    <img class="qs-hero-img" src="/images/quienes-somos/quienes-somos-hero.jpg" alt="Quiénes somos">
  </div>
</section>

<!-- SOBRE NOSOTROS -->
<section class="qs-about">
  <div class="qs-about-text">
    <h2>Sobre Inversiones Novo S.A.S</h2>
    <p>
      <strong>Inversiones Novo S.A.S</strong> es una sociedad comercial constituida bajo el régimen común,
      cuyo objeto principal es operar como intermediario logístico especializado en el sector de la salud.
    </p>
    <p>
      Nos dedicamos a la <strong>intermediación, negociación, gestión de compras y cadena de
      abastecimiento</strong>, distribución y almacenamiento, así como a la importación y exportación de
      insumos y equipos de odontología, asistenciales y activos fijos, entre otros.
    </p>
    <p>
      Conectamos a proveedores con instituciones prestadoras de servicios de salud, clínicas,
      hospitales y consultorios, garantizando productos de <strong>alta calidad</strong> con el respaldo
      de aliados estratégicos y marcas reconocidas.
    </p>
  </div>
</section>

<!-- NUESTROS VALORES -->
<section class="qs-valores">
  <h2>Nuestros Valores</h2>
  <div class="valores-grid">

    <div class="valor-card">
      <div class="valor-icon">
        <img src="/images/quienes-somos/icono-honestidad.png" alt="Honestidad" width="40" height="40">
      </div>
      <span>Honestidad</span>
    </div>

    <div class="valor-card">
      <div class="valor-icon">
        <img src="/images/quienes-somos/icono-compromiso.png" alt="Compromiso" width="40" height="40">
      </div>
      <span>Compromiso</span>
    </div>

    <div class="valor-card">
      <div class="valor-icon">
        <img src="/images/quienes-somos/icono-armonia.png" alt="Armonía" width="40" height="40">
      </div>
      <span>Armonía</span>
    </div>

    <div class="valor-card">
      <div class="valor-icon">
        <img src="/images/quienes-somos/icono-innovacion.png" alt="Innovación" width="40" height="40">
      </div>
      <span>Innovación</span>
    </div>

    <div class="valor-card">
      <div class="valor-icon">
        <img src="/images/quienes-somos/icono-equilibrio.png" alt="Equilibrio" width="40" height="40">
      </div>
      <span>Equilibrio</span>
    </div>

  </div>
</section>

<!-- MISIÓN Y VISIÓN -->
<section class="qs-mision">
  <div class="mv-wrapper">

    <div class="mv-card">
      <div class="mv-icon">
        <img src="/images/quienes-somos/Mision.png" alt="Misión" width="36" height="36">
      </div>
      <h3>Nuestra Misión</h3>
      <p>
        Inversiones Novo S.A.S se dedica a buscar soluciones integrales a las necesidades de nuestros
        clientes, comercializando insumos a través de aliados estratégicos y marcas reconocidas de las
        líneas: médico-quirúrgicos, odontológicos, de laboratorio clínico, elementos de bio protección,
        equipos médicos, insumos de limpieza, desinfección y otros insumos de necesidad básica para la
        operación de las instituciones prestadoras de salud.
      </p>
    </div>

    <div class="mv-diamond">
      <div class="mv-diamond-inner"></div>
    </div>

    <div class="mv-card">
      <div class="mv-icon">
        <img src="/images/quienes-somos/Vision.png" alt="Visión" width="36" height="36">
      </div>
      <h3>Nuestra Visión</h3>
      <p>
        Para el 2028, Inversiones Novo S.A.S será un operador logístico de referencia para la industria
        médica, conectando a proveedores con las instituciones y proporcionando las soluciones óptimas
        para nuestros clientes.
      </p>
    </div>

  </div>
</section>

@include('partials.footer')

</body>
</html>
