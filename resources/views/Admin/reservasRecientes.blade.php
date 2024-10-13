<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="reservas-pendientes">

    <h1>Reservas Pendientes</h1>

    <div class="buscar-reservas">
        <!-- Formulario para búsqueda -->
        <form id="formBusqueda" action="javascript:void(0);" onsubmit="return realizarBusqueda2();">
            <div class="input-contenedor">
                <span class="icono-busqueda">
                    <i class="fa fa-search"></i> <!-- Icono de Font Awesome -->
                </span>
                <input type="text" id="busquedaDatos" name="busquedaGeneral" placeholder="Buscar por el dato.." class="input-busqueda">
            </div>

            <!-- Campo de fecha para buscar por fecha de reserva -->
            <div class="fecha-reserva">
                <label for="fechaReserva">Fecha Reserva:</label>
                <input type="date" id="fechaReserva" name="fechaReserva" class="input-fecha">
            </div>

            <!-- Botón de búsqueda -->
            <button type="submit" class="btn-buscar">Buscar</button>
        </form>


        <!-- Opciones de ordenación -->
        <div class="opciones-ordenacion">
            <!-- Selector de tipo de habitación -->
            <select id="tipoHabitacion" class="select-ordenar" name="tipoHabitacion" onchange="ordenarPorTipoHabitacion2()">
                <option value="">Ordenar por tipo de habitación</option>
                <option value="Simple">Simple</option>
                <option value="Especial">Especial</option>
                <option value="Familiar">Familiar</option>
                <option value="Matrimonial">Matrimonial</option>
            </select>

            <!-- Selector de ordenación por fecha de modificación -->
            <select id="ordenarTipo" class="select-ordenar" onchange="ordenarPorTipo2()">
                <option value="">Agrupar por..</option>
                <option value="fecha_recerva">Fecha de reserva</option>
                <option value="numero_personas">Numero de personas</option>
                <option value="proxima_reserva">Reservas Próximas</option>
                <option value="fecha_salida">Fecha de salida</option>
            </select>

        </div>
    </div>

        <div class="reservas-container">
            @if(count($reservas) == 0)
                <h2>No hay reservas pendientes</h2>
            @endif
            @php 
                $nro = 1;
            @endphp
            @foreach($reservas as $reserva)
                <div class="reserva-card">

                    <h2 class="text_reserva">Reserva # {{$nro}}</h2>
                    <div class="datos-reserva">
                        <div class="datos">
                            <h2>Datos personales</h2>
                            <p><strong>Nombre:</strong> {{$reserva->nombre}}</p>
                            <p><strong>Apellido:</strong> {{$reserva->apellido}}</p>
                            <p><strong>CI:</strong> {{$reserva->ci}}</p>
                            <p><strong>Correo:</strong> {{$reserva->correo}}</p>
                            <p><strong>Teléfono:</strong> {{$reserva->telefono}}</p>
                            <p><strong>Nacionalidad:</strong> {{$reserva->nacionalidad}}</p>
                            <p class="numero_personas"><strong>Número de Personas:</strong> {{$reserva->numero_personas}}</p>
                        </div>

                        <div class="detalles-reserva">
                            <h2>Detalles de reserva</h2>
                            <p><strong>Fecha de reserva:</strong> {{$reserva->fecha_de_reserva}}</p>
                            <p class="proxima_reserva"><strong>Fecha de Ingreso:</strong> {{$reserva->fecha_ingreso}}</p>
                            <p class="fecha_salida"><strong>Fecha de Salida:</strong> {{$reserva->fecha_salida}}</p>
                            <p><strong>Número de Habitación:</strong> {{$reserva->habitacion->num_habitacion}}</p>
                            <p><strong>Tipo de Habitación:</strong>{{$reserva->habitacion->tipo_hab}}</p>
                            <p><strong>Número de días:</strong> {{$reserva->numero_noches}}</p>
                            <p><strong>Estado:</strong> {{$reserva->estado}}</p>
                        </div>

                        <div class="acciones">
                            <button class="confirm-btn" onclick="confirmarReserva({{$reserva->id}})">Aceptar</button>
                            <button class="cancel-btn" onclick="rechazarReserva({{$reserva->id}})">Rechazar</button>
                        </div>
                    </div>
                </div>
                @php
                    $nro++;
                @endphp
            @endforeach
        </div>
</div>