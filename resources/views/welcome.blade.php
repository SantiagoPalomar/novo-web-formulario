<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inversiones Novo SAS</title>
    <link rel="stylesheet" href="{{ asset('css/inversiones.css') }}">
</head>
<body>

    <header>
        <img src="{{ asset('images/Logo NOVO.png') }}" alt="Inversiones Novo SAS" height="50">
    </header>

    <div class="subheader">
        <span class="subheader-texto">Nuestras lineas de negocio:</span>
        <a href="/novo-parking" class="novo-parking-link">
            <img src="{{ asset('images/Logo NOVO PARKING.png') }}" alt="Novo Parking" class="novo-parking-logo">
        </a>
    </div>

    <main>
        <div class="container">
            <div class="empresa-info">
                <h2>INVERSIONES NOVO SAS</h2>
                <p class="nit">NIT: 901.484.167-6</p>
            </div>

            <div class="cards">
                <div class="card">
                    <h3>VISION</h3>
                    <p>Para el 2028, Novo Logistics sera un operador logistico de referencia para la industria medica, conectando a proveedores con las instituciones y proporcionando las soluciones optimas para nuestros clientes.</p>
                </div>
                <div class="card">
                    <h3>MISION</h3>
                    <p>Novo Logistics se dedica a buscar soluciones integrales a las necesidades de nuestros clientes, comercializando insumos a traves de aliados estrategicos y marcas reconocidas de las lineas: medico-quirurgicos, odontologicos, de laboratorio clinico, elementos de bio proteccion, equipos medicos, insumos de limpieza, desinfeccion y otros insumos de necesidad basica para la operacion de las instituciones prestadoras de salud.</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div>
            <img src="{{ asset('images/Logo NOVO.png') }}" alt="Inversiones Novo SAS" height="40">
            <p>&copy; {{ date('Y') }} Inversiones Novo SAS</p>
        </div>
    </footer>

</body>
</html>