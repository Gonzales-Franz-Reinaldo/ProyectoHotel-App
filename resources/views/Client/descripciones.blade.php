<meta name="csrf-token" content="{{ csrf_token() }}">

@if (isset($promocion))
    <div class="detalle-promocion">
        <div class="volver-atras">
            <a onclick="cargarPromociones()">
                <i class="fas fa-arrow-left"></i> Volver a Promociones
            </a>
        </div>
        <h2>{{ htmlspecialchars($promocion->tipo_promocion) }}</h2>
        <img src="{{ asset('images/promociones/' . $promocion->imagen) }}" alt="Imagen de la promoción">

        <p class="descripcion-completa">{{ htmlspecialchars($promocion->descripcion_completa) }}</p>
        <p><strong>Descuento:</strong> {{ htmlspecialchars($promocion->descuento) }}%</p>
        <p><strong>Válida desde:</strong> {{ htmlspecialchars($promocion->fecha_inicio) }} hasta {{ htmlspecialchars($promocion->fecha_final) }}</p>
        <div class="boton_consulta">
            <a href="javascript:void(0);" onclick="cargarConsultas('/client/consultas')">Consultar</a>
        </div>
    </div>
@else
    <p>Detalles no disponibles.</p>
@endif

<style>
    .detalle-promocion {
        padding: 30px; /* Más padding para espacio interior */
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 12px; /* Bordes más redondeados */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: 20px auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: 'Arial', sans-serif;
    }

    .detalle-promocion h2 {
        color: #333;
        font-size: 2rem;
        margin-bottom: 15px;
    }

    .detalle-promocion img {
        max-width: 100%; /* Imagen más pequeña */
        height: auto;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .detalle-promocion p {
        color: #555;
        line-height: 1.6;
        margin: 10px 0;
        text-align: justify; /* Texto justificado */
    }

    .detalle-promocion p strong {
        color: #333;
    }

    .boton_consulta a {
        display: inline-block;
        padding: 12px 25px; /* Botón más grande */
        color: #ffffff;
        text-decoration: none;
        font-size: 1rem;
        font-weight: bold;
        text-align: center;
        border-radius: 6px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        background: linear-gradient(45deg, #B0E0E6, #FF7F50); /* Mezcla de Azul Pastel y Coral */
    }

    .boton_consulta a:hover {
        background: linear-gradient(45deg, #FF7F50, #B0E0E6); /* Rotar los colores al pasar el cursor */
        color: #333; /* Letra en gris oscuro */
        transform: scale(1.05);
    }

    .volver-atras {
        margin-bottom: 15px;
        text-align: left; /* Alineado a la izquierda */
        width: 100%; /* Para ocupar todo el ancho del contenedor */
    }

    .volver-atras a {
        color: #555; /* Gris oscuro */
        text-decoration: none; /* Sin subrayado */
        font-size: 1rem; /* Tamaño de fuente */
        font-weight: bold; /* Negrita */
        transition: color 0.3s ease; /* Transición suave de color */
    }

    .volver-atras a:hover {
        color: #FF7F50; /* Cambia a coral al pasar el cursor */
    }
</style>