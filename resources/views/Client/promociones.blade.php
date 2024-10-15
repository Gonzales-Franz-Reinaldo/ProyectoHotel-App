<section id="promotions">
    <h1>Promociones Especiales</h1>

    <div class="promotion-grid">
        @if (count($promociones) > 0)
            @foreach($promociones as $promocion)
                <div class="promotion-card">
                    <!-- Título de la promoción -->
                    <div class="promotion-header">
                        <h3>{{ htmlspecialchars($promocion->tipo_promocion) }}</h3>
                    </div>

                    <!-- Imagen de la promoción -->
                    <div class="promotion-image">
                           <img src="{{ asset('images/promociones/' . $promocion->imagen) }}" alt="Imagen de la promoción">

                    </div>

                    <!-- Descripción -->
                    <div class="promotion-body">
                        <p>{{ htmlspecialchars($promocion->descripcion) }}</p>
                    </div>

                    <!-- Acciones: Ver detalles -->
                    <div class="promotion-footer">
                        
                        <a href="javascript:void(0);" onclick="cargarDetalles({{$promocion->id}})">Ver Detalles</a>
                        <a href="javascript:void(0);" onclick="cargarConsultas('/client/consultas')">Consultar</a>
                           
                    </div>
                </div>
            @endforeach
        @else
            <p>No hay promociones disponibles en este momento.</p>
        @endif
    </div>

</section>

<!-- <script>
    function cargarConsultas(url) {
        // Lógica para manejar la carga de la consulta
        console.log("Consultando en URL:", url);
        // Aquí puedes implementar la lógica AJAX o redirección según tu necesidad
    }
</script>
 -->

 <style>
    #promotions {
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 12px;
    max-width: 1200px;
    margin: 0 auto;
}

#promotions h1 {
    text-align: center;
    margin: 0;
    font-size: 24px;
    color: #37393B;
    font-family: 'Roboto', sans-serif;
    background-color: #EAF1F1; /* Azul Pastel */
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    box-sizing: border-box;
}

.promotion-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Dos columnas */
    gap: 20px; /* Espacio entre las tarjetas */
}

.promotion-card {
    background-color: #ffffff;
    border: 1px solid #dee2e6;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px; /* Ajustado para un mejor diseño */
    margin-bottom: 30px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.promotion-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.promotion-image img {
    width: 100%; /* Ajustar al 100% del contenedor */
    height: auto; /* Mantener la proporción de la imagen */
    max-height: 350px; /* Altura máxima para mantener el diseño */
    margin-bottom: 10px;
    border-radius: 8px;
}

.promotion-header h3 {
    font-size: 20px;
    color: #2c3e50; /* Color gris oscuro */
    margin-bottom: 10px;
    text-align: center;
}

.promotion-body p {
    color: #333;
    font-size: 1rem;
    margin: 8px 0;
    text-align: justify; /* Texto justificado */
}

.promotion-footer {
    margin-top: auto;
    display: flex;
    justify-content: center;
}

.promotion-footer a {
    display: inline-block;
    padding: 10px 20px; /* Botones más grandes */
    margin: 5px;
    border-radius: 6px;
    color: #ffffff;
    text-decoration: none;
    font-size: 1rem; /* Tamaño de fuente más grande */
    font-weight: bold;
    text-align: center;
    transition: background-color 0.3s ease, transform 0.3s ease;
    background: linear-gradient(45deg, #B0E0E6, #FF7F50); /* Mezcla de Azul Pastel y Coral */
}

.promotion-footer a:hover {
    background: linear-gradient(45deg, #FF7F50, #B0E0E6); /* Rotar los colores al pasar el cursor */
    color: #333; /* Letra en gris oscuro */
    transform: scale(1.05);
}

 </style>