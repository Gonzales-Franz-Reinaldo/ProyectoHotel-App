<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Sucre - Inicio</title>
    <link rel="stylesheet" href="./Client/public/css/styles.css" />
  </head>
  <body>
    <div class="contenido_principal">
      <h2 class="titulo-central">Hotel Sucre</h2>
      
      <!-- Primer Bloque de Texto e Imagen (Imagen a la derecha) -->
      <div class="bloque-contenido">
        <div class="texto-cuadro rotado-derecha">
          <p>
            Bienvenido al Hotel Sucre. Situado en el corazón vibrante de la ciudad,
            el Hotel Grand Vista ofrece una experiencia de lujo sin igual,
            combinando confort moderno con la calidez de un servicio excepcional.
            Nuestro hotel es la elección perfecta para aquellos que buscan una
            estancia sofisticada y conveniente, ya sea para un viaje de negocios,
            una escapada romántica, o unas vacaciones en familia.
          </p>
        </div>
        <div class="imagen-contenido derecha">
          <div
            class="image-circle"
            style="background-image: url(https://www.cataloniahotels.com/es/blog/wp-content/uploads/2018/04/fachada-hotel-4-estrellas-otorgadas.jpg);"
          ></div>
        </div>
      </div>

      <!-- Segundo Bloque de Texto e Imagen (Imagen a la izquierda) -->
      <div class="bloque-contenido inverso">
       
        <div class="texto-cuadro rotado-izquierda">
          <p>
            <strong>Habitaciones Lujosas:</strong> Nuestras habitaciones, decoradas
            con un estilo contemporáneo y toques de elegancia, ofrecen un refugio
            cómodo y sereno. Elige entre una variedad de opciones, desde acogedoras
            habitaciones estándar hasta suites de lujo con vistas panorámicas de la
            ciudad. Cada habitación está equipada con camas de alta calidad, sábanas
            de algodón egipcio, y una selección de almohadas para garantizar una
            noche de descanso reparador.
          </p>
        
        </div>

        <div class="imagen-contenido izquierda">
          <div
            class="image-circle"
            style="background-image: url(https://www.escapadah.com/u/fotografias/m/2022/5/2/f960x540-4186_78261_5050.jpg);"
          ></div>
        </div>
        <div class="imagen-contenido izquierda">
          <div
            class="image-circle"
            style="background-image: url(https://img.freepik.com/fotos-premium/vista-habitaciones-hotel-noche-vistas-playa_795881-11673.jpg);"
          ></div>
        </div>
      </div>

      <!-- Tercer Bloque de Texto e Imagen (Imagen a la izquierda) -->
      <div class="bloque-contenido inverso">
        <div class="imagen-contenido izquierda">
          <div
            class="image-circle"
            style="background-image: url('./Client/public/images/contenido3.jpg');"
          ></div>
        </div>
        <div class="texto-cuadro rotado-derecha">
          <p>
            <strong>Restaurante Gourmet:</strong> Disfruta de una experiencia
            culinaria de primer nivel en nuestro restaurante gourmet, donde nuestros
            chefs expertos preparan una variedad de platos internacionales y locales
            utilizando ingredientes frescos y de alta calidad. Desde un desayuno
            nutritivo hasta una cena elegante, nuestro restaurante ofrece un menú
            variado en un ambiente sofisticado.
          </p>
        </div>
      </div>

      <!-- Cuarto Bloque de Texto e Imagen (Imagen a la derecha) -->
      <div class="bloque-contenido">
        <div class="texto-cuadro rotado-izquierda">
          <p>
            <strong>Centro de Bienestar y Spa:</strong> Relájate y rejuvenece en
            nuestro centro de bienestar, que cuenta con un gimnasio completamente
            equipado, una sauna, y un spa de servicio completo. Ofrecemos una gama
            de tratamientos y masajes diseñados para revitalizar tu cuerpo y mente.
          </p>
        </div>
        <div class="imagen-contenido derecha">
          <div
            class="image-circle"
            style="background-image: url('./Client/public/images/contenido4.jpg');"
          ></div>
        </div>
      </div>
    </div>
  </body>
</html>

<style>
  /* Importar Tipografías */
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');

/* Variables de Colores */
:root {
    --cream-color: #FFF9E3;  /* Crema */
    --pastel-blue: #B0E0E6;  /* Azul Pastel */
    --coral-color: #FF7F50;  /* Coral */
    --light-gray: #D3D3D3;  /* Gris Claro */
    --dark-gray: #333; /* Gris Oscuro */
    --light-color: #FFF; /* Blanco */
}

/* Estilos Globales */
body {
    margin: 0;
    
    background-color: var(--cream-color);
    background-image: url(); /* Añade aquí tu imagen de fondo local */
    background-size: cover;
    background-repeat: no-repeat;
    color: var(--light-gray);
    line-height: 1.6;
}

.titulo-central {
  font-family: 'Cormorant Garamond', serif;
    color:#FF7F50;
    font-size: 48px;
    text-align: center;
    margin-top: -20px;
    margin-bottom: 20px;
}

.contenido_principal {
    max-width: 1400px; /* Más ancho */
    margin: 0 auto;
    padding: 30px;
    display: flex;
    flex-direction: column;
}

.bloque-contenido {
    display: flex;
    align-items: flex-start;
    margin-bottom: -10px;
}

.bloque-contenido.inverso {
    flex-direction: row-reverse;
}

.texto-cuadro {
    width: 60%; /* Más ancho */
    height:50%;
    padding: 70px;
    background-color: rgba(15, 81, 136, 0.8);
    border-radius: 10px;
    box-shadow: 4px 8px 12px rgba(0, 0, 0, 10);
    position: relative;
    margin: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.texto-cuadro:hover {
    transform: scale(1.02) rotate(2deg);
    box-shadow: 8px 12px 16px rgba(0, 0, 0, 0.5);
}

.rotado-derecha {
    transform: rotate(-2deg);
}

.rotado-izquierda {
    transform: rotate(2deg);
}

.imagen-contenido {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
}

.imagen-contenido.derecha {
    margin-left: auto; /* Alinear a la derecha */
}

.imagen-contenido.izquierda {
    margin-right: auto; /* Alinear a la izquierda */
}

.image-circle {
    width: 300px; /* Más grande */
    height: 300px; /* Más grande */
    border-radius: 50%;
    background-size: cover;
    background-position: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

.image-circle:hover {
    transform: scale(1.10);
}

/* Ajustes de la Pantalla */
@media screen and (max-width: 768px) {
    .bloque-contenido {
        flex-direction: column;
    }

    .bloque-contenido.inverso {
        flex-direction: column;
    }

    .texto-cuadro, .imagen-contenido {
        max-width: 100%;
        text-align: center;
    }

    .image-circle {
        width: 200px;
        height: 200px;
    }
}

</style>