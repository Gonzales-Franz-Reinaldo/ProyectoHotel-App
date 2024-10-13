
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepcionista</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <!-- Incluir jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <!-- Incluir la versión más reciente de html2canvas -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>


    <link rel="stylesheet" href="{{asset('css/administracion.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>

<body>
    <div class="container">
        <div class="container-menu">
            <div class="perfil-hotel">
                <img src="../../public/images/logo_hotel.png" alt="hotel">
                <h2>Hotel Sucre</h2>
            </div>
            <hr>
            <div class="menu-opciones">
                <div class="opciones"><a href="">Habitaciones</a></div>
                <div class="opciones"><a href="javascript:void(0);" onclick="cargarContenido('/admin/reservas')">Reservas</a></div>
                <div class="opciones"><a href="">Clientes</a></div>
                <!-- <div class="opciones"><a href="">Reportes</a></div> -->
                <div class="opciones"><a href="">Administración</a></div>
            </div>
        </div>

        <div class="container-main">
            <div class="menu-navegacion">
                <a href="" class="home-link">
                    <i class="fas fa-home"></i> Home
                </a>

                <div class="perfil">
                    <img src="https://www.pngmart.com/files/21/Admin-Profile-Vector-PNG-File.png" alt="admin">
                    <h2>Carlos Perz</h2>
                    <p><strong>Turno: Mañana</strong></p>
                </div>
                <p><a href="../../../Database/cerrar_sesion.php">Cerrar Sesión</a></p>
            </div>



            <!-- EN ESTA PARTE SE CARGARÁN LOS CONTENIDOS -->
            <div class="contenido" id="contenido">
            <div class="welcome-section">
                    <h1>Bienvenido, Carlo Montero!</h1>
                    <p>Estamos encantados de tenerte aquí. Esperamos que tengas un excelente turno de mañana.</p>
                    <div class="stats-container">
                        <div class="stat-card">
                            <i class="fas fa-bed"></i>
                            <h3>Habitaciones Disponibles</h3>
                            <p>10</p>
                        </div>
                        <div class="stat-card">
                            <i class="fas fa-calendar-check"></i>
                            <h3>Reservas Confirmadas</h3>
                            <p>5</p>
                        </div>
                        <div class="stat-card">
                            <i class="fas fa-user-clock"></i>
                            <h3>Clientes Esperando Check-in</h3>
                            <p>3</p>
                        </div>
                    </div>
                    <div class="services-description">
                        <h2>Servicios del Hotel Sucre</h2>
                        <p>Ofrecemos una variedad de servicios para hacer de la estadía de nuestros clientes una experiencia inolvidable. Desde habitaciones cómodas y bien equipadas hasta un servicio de restaurante gourmet, piscina, gimnasio y más. ¡Explora todo lo que tenemos para ofrecer!</p>
                    </div>
                </div>
            </div>

            <footer>
                <p>© 2024 Hotel SUCRE. Todos los derechos reservados.</p>
            </footer>
        </div>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>