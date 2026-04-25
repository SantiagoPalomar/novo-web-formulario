<nav>
  <a class="nav-logo" href="/">
    <img src="{{ asset('images/logos/logo-inversiones-novo.svg') }}" alt="Inversiones Novo SAS" height="40">
  </a>
  <ul class="nav-links">
    <li><a href="/" @class(['nav-active' => ($active ?? '') === 'inicio'])>Inicio</a></li>
    <li><a href="/quienes-somos" @class(['nav-active' => ($active ?? '') === 'nosotros'])>Nosotros</a></li>
    <li><a href="/productos" @class(['nav-active' => ($active ?? '') === 'productos'])>Productos</a></li>
    <li><a href="/formulario" @class(['nav-active' => ($active ?? '') === 'parking'])>Novo Parking</a></li>
    <li><a href="/#contacto">Contacto</a></li>
  </ul>
  <div class="nav-search">
    <svg viewBox="0 0 24 24"><circle cx="10.5" cy="10.5" r="6.5"/><line x1="15.5" y1="15.5" x2="22" y2="22"/></svg>
  </div>
</nav>
