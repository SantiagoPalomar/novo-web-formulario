<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Novo Parking</title>
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
</head>
<body>

    <header>
        <img src="{{ asset('images/Logo NOVO PARKING.png') }}" alt="Novo Parking" height="50">
    </header>

    <div class="container">
        <h2>Registro para Facturacion Electronica</h2>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="error-box">{{ session('error') }}</div>
        @endif

        <form method="POST" action="/novo-parking/formulario">
            @csrf

            <div class="form-group">
                <label>Tipo de Identificacion <span class="required">*</span></label>
                <select name="tipo_documento" id="tipo_documento" required onchange="cambiarFormulario()">
                    <option value="">Seleccione...</option>
                    <option value="CC" {{ old('tipo_documento') == 'CC' ? 'selected' : '' }}>CC - Cedula de Ciudadania</option>
                    <option value="CE" {{ old('tipo_documento') == 'CE' ? 'selected' : '' }}>CE - Cedula de Extranjeria</option>
                    <option value="DIE" {{ old('tipo_documento') == 'DIE' ? 'selected' : '' }}>DIE - Documento de identificacion extranjero</option>
                    <option value="NIC" {{ old('tipo_documento') == 'NIC' ? 'selected' : '' }}>NIC - NIT de otro Pais</option>
                    <option value="NIT" {{ old('tipo_documento') == 'NIT' ? 'selected' : '' }}>NIT - NIT</option>
                    <option value="NUIP" {{ old('tipo_documento') == 'NUIP' ? 'selected' : '' }}>NUIP - NUIP</option>
                    <option value="PS" {{ old('tipo_documento') == 'PS' ? 'selected' : '' }}>PS - Pasaporte</option>
                    <option value="RC" {{ old('tipo_documento') == 'RC' ? 'selected' : '' }}>RC - Registro Civil</option>
                    <option value="TE" {{ old('tipo_documento') == 'TE' ? 'selected' : '' }}>TE - Tarjeta de Extranjeria</option>
                    <option value="TI" {{ old('tipo_documento') == 'TI' ? 'selected' : '' }}>TI - Tarjeta de Identidad</option>
                </select>
                @error('tipo_documento') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Numero de Identificacion <span class="required">*</span></label>
                <div class="documento-row">
                    <input type="text" name="documento" id="documento" required placeholder="Ej: 1234567890" value="{{ old('documento') }}" oninput="calcularDigito()">
                    <div id="digito_container" class="hidden">
                        <span class="digito-guion">-</span>
                        <input type="text" name="digito_verificacion" id="digito_verificacion" readonly placeholder="0" class="digito-input">
                    </div>
                </div>
                @error('documento') <span class="error">{{ $message }}</span> @enderror
            </div>

            {{-- Campos persona natural --}}
            <div id="campos_persona">
                <div class="row">
                    <div class="form-group">
                        <label>Primer Nombre <span class="required">*</span></label>
                        <input type="text" name="primer_nombre" id="primer_nombre" value="{{ old('primer_nombre') }}">
                        @error('primer_nombre') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label>Segundo Nombre</label>
                        <input type="text" name="segundo_nombre" value="{{ old('segundo_nombre') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Primer Apellido <span class="required">*</span></label>
                        <input type="text" name="primer_apellido" id="primer_apellido" value="{{ old('primer_apellido') }}">
                        @error('primer_apellido') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label>Segundo Apellido</label>
                        <input type="text" name="segundo_apellido" value="{{ old('segundo_apellido') }}">
                    </div>
                </div>
            </div>

            {{-- Campo NIT --}}
            <div id="campos_nit" class="hidden">
                <div class="form-group">
                    <label>Razon Social <span class="required">*</span></label>
                    <input type="text" id="razon_social_input" name="primer_nombre" placeholder="Nombre de la empresa" value="{{ old('primer_nombre') }}">
                </div>
            </div>

            <div class="form-group">
                <label>Correo Electronico <span class="required">*</span></label>
                <input type="email" name="email" required placeholder="ejemplo@correo.com" value="{{ old('email') }}">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Telefono Principal</label>
                    <input type="tel" name="telefono_uno" placeholder="Ej: 3001234567" value="{{ old('telefono_uno') }}">
                </div>
                <div class="form-group">
                    <label>Telefono Secundario</label>
                    <input type="tel" name="telefono_dos" placeholder="Ej: 3001234567" value="{{ old('telefono_dos') }}">
                </div>
            </div>

            <div class="form-group">
                <label>Direccion</label>
                <input type="text" name="direccion" value="{{ old('direccion') }}">
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Departamento</label>
                    <input type="text" name="departamento" value="{{ old('departamento') }}">
                </div>
                <div class="form-group">
                    <label>Ciudad</label>
                    <input type="text" name="ciudad" value="{{ old('ciudad') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="checkbox-label">
                    <input type="checkbox" name="acepto_politicas" required>
                    Acepto el tratamiento de datos personales establecidos por Inversiones Novo SAS, con fines unicos de alojamiento y expedicion de documentos electronicos a nombre del emisor INVERSIONES NOVO S.A.S. 901.484.167-6, dando cumplimiento a lo dispuesto en la ley 1581 de 2012 y el Decreto Reglamentario 1377 de 2013 y lo consignado en el articulo 15 de nuestra Constitucion Politica.
                </label>
            </div>

            <div class="row-botones">
                <button type="submit" class="btn">Registrar</button>
                <button type="reset" class="btn btn-limpiar" onclick="limpiarFormulario()">Limpiar</button>
            </div>
        </form>
    </div>

    <footer>
        <div>
            <img src="{{ asset('images/Logo NOVO.png') }}" alt="Inversiones Novo SAS" height="40">
            <p>&copy; {{ date('Y') }} Inversiones Novo SAS</p>
        </div>
    </footer>

    <script src="{{ asset('js/formulario.js') }}"></script>
    <script>
        window.onload = function() {
            const tipo = document.getElementById('tipo_documento').value;
            if (tipo) {
                cambiarFormulario();
                calcularDigito();
            }
        }
    </script>
</body>
</html>