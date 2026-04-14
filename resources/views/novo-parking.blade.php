<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Parking - Inversiones Novo SAS</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>

    <header>
        <img src="{{ asset('images/Logo NOVO PARKING.png') }}" alt="Novo Parking" height="50">
    </header>

    <main>
        <div class="container">
            <div class="empresa-info">
                <h2>INVERSIONES NOVO SAS</h2>
                <p class="nit">NIT: 901.484.167-6</p>
            </div>

            <div class="descripcion">
                <p>Ofrecemos servicios integrales de administracion de parqueaderos para satisfacer las necesidades de estacionamiento de su proyecto. Nuestro enfoque se centra en la eficiencia operativa, la seguridad y la satisfaccion del cliente.</p>
            </div>

            <a href="/novo-parking/formulario" class="btn">Registro Facturacion Electronica</a>
        </div>
    </main>

    <footer>
        <div>
            <img src="{{ asset('images/Logo NOVO.png') }}" alt="Inversiones Novo SAS" height="50">
            <p>&copy; {{ date('Y') }} Inversiones Novo SAS</p>
        </div>
    </footer>

</body>
</html>