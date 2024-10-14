@extends('layouts.app')

@section('content')
<section id="promotions">
    <h1>Promociones Especiales</h1>
    <div class="promotion-grid">
        @foreach ($promociones as $promocion)
            <div class="promotion-card">
                <div class="promotion-header">
                    <h3>{{ $promocion->tipo_promocion }}</h3>
                </div>
                <div class="promotion-image">
                    <img src="{{ asset('images/promociones/' . $promocion->imagen) }}" alt="Imagen de la promoción">
                </div>
                <div class="promotion-body">
                    <p>{{ $promocion->descripcion }}</p>
                </div>
                <div class="promotion-footer">
                    <a href="{{ route('promocion.detalle', $promocion->id) }}" class="boton_detalles">Ver Detalles</a>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Estilos en línea -->
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
        background-color: #EAF1F1;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        box-sizing: border-box;
    }

    .promotion-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .promotion-card {
        background-color: #ffffff;
        border: 1px solid #dee2e6;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 40px;
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
        width: 500px;
        height: 350px;
        margin-bottom: 10px;
        border-radius: 8px;
    }

    .promotion-header h3 {
        font-size: 20px;
        color: #2c3e50;
        margin-bottom: 10px;
        text-align: center;
    }

    .promotion-body p {
        color: #333;
        font-size: 1rem;
        margin: 8px 0;
        text-align: justify;
    }

    .promotion-footer {
        margin-top: auto;
        display: flex;
        gap: 15px;
        justify-content: center;
    }

    .promotion-footer a {
        display: inline-block;
        padding: 10px 20px;
        margin: 5px;
        border-radius: 6px;
        color: #ffffff;
        text-decoration: none;
        font-size: 1rem;
        font-weight: bold;
        text-align: center;
        transition: background-color 0.3s ease, transform 0.3s ease;
        background: linear-gradient(45deg, #B0E0E6, #FF7F50);
    }

    .promotion-footer a:hover {
        background: linear-gradient(45deg, #FF7F50, #B0E0E6);
        color: #333;
        transform: scale(1.05);
    }
</style>
@endsection
