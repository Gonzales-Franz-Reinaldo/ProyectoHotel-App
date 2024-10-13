<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Client/public/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/client.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hotel_Reservas</title>
</head>

<body>
    <div class="container">
        <div class="container-encabezado">
            <div class="overlay">
                <div class="hotel">
                    <img src="https://www.shutterstock.com/image-vector/sucre-bolivia-round-travel-stamp-260nw-1892814940.jpg" alt="logo_hotel">
                    <div class="titulo"><a href="javascript:cargarPrincipal('./Client/src/views/inicio.html')">Hotel Sucre</a></div>
                </div>
                <div class="menu">
                    <div class="secciones"><a href="javascript:cargarPrincipal('./Client/src/views/inicio.html')">Inicio</a></div>
                    <div class="secciones"><a href="javascript:cargarContenido('./Client/src/models/promociones.php')">Promociones</a></div>
                    <div class="secciones"><a href="javascript:cargarInicioHabitaciones('./Client/src/models/tipos_habitaciones.php')">Habitaciones</a></div>
                    <div class="secciones"><a href="javascript:cargarContenido('./Client/src/models/about.php')">Acerca de Nosotros</a></div>
                </div>
            </div>

            <div class="roles">
                <div class="dropdown">
                    <button class="dropbtn">
                        <i class="bi bi-list"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ url('/admin') }}">Administración</a>
                        <a href="" id="openLoginModal">Tus Reservas</a>
                        <a href="javascript:cargarContenido('./Client/src/models/about.php')">Acerca de Nosotros</a>
                        <a href="#">Política de la Empresa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contenidos" id="contenidos">
        <!-- Contenido cargado dinámicamente aquí -->
    </div>

    <div class="container-pie">
        <footer>
            <p>© 2024 Hotel Sucre. Todos los derechos reservados.</p>
            <p>Teléfono: (555) 123-4567 | Email: info@hotelsucre.com</p>
            <p>Dirección: Av. Principal 123, Ciudad, País</p>
            <p><a href="#">Política de Privacidad</a> | <a href="#">Términos y Condiciones</a></p>
        </footer>
    </div>

    <!-- Ventana flotante de confirmación -->
    <div id="ventana-flotante" class="ventana-flotante ocultar">
        <div class="ventana-contenido">
            <i class="fas fa-check-circle icono-confirmacion"></i>
            <h2>Reserva realizada con éxito</h2>
            <p>Tu reserva ha sido registrada correctamente.</p>
        </div>
    </div>


    <!-- Ventana flotante para buscar reservas -->
    <div id="ventana-buscar-reserva" class="ventana-flotante ocultar">
        <div class="ventana-contenido">
            <!-- Botón de cierre "X" -->
            <button class="cerrar-ventana" onclick="cerrarVentanaBuscarReserva()">×</button>
            <i class="fas fa-search icono-buscar"></i>
            <h2>Buscar tus Reservas</h2>
            <form id="form-buscar-reserva">
                <label for="ci">Cédula de Identidad (CI):</label>
                <input type="text" id="ci" name="ci" required placeholder="Introduce tu CI...">
                <button type="button" onclick="buscarReservas()">Buscar Mis Reservas</button>
            </form>
        </div>
    </div>


    <script src="{{asset('js/client.js')}}"></script>
</body>

</html>
