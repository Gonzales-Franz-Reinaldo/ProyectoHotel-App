<div class="historial-reservas">
    <h1>Historial de Reservas Confirmadas</h1>

    <div class="buscar-reservas">
        <!-- Formulario para búsqueda -->
        <form id="formBusqueda" action="javascript:void(0);" onsubmit="return realizarBusqueda();">
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
            <select id="tipoHabitacion" class="select-ordenar" name="tipoHabitacion" onchange="ordenarPorTipoHabitacion()">
                <option value="">Ordenar por tipo de habitación</option>
                <option value="Simple">Simple</option>
                <option value="Especial">Especial</option>
                <option value="Familiar">Familiar</option>
                <option value="Matrimonial">Matrimonial</option>
            </select>

            <!-- Selector de ordenación por fecha de modificación -->
            <select id="ordenarTipo" class="select-ordenar" name="ordenarTipo" onchange="ordenarPorTipo()">
                <option value="">Ver reservas por..</option>
                <option value="fecha_confirm">Fecha de confirmación</option>
                <option value="fecha_ingreso">Fecha de entrada</option>
                <option value="fecha_salida">Fecha de salida</option>
            </select>
        </div>
    </div>

        <div class="reservas-lista">
        @if(count($reservas) == 0)
                <h2>No hay reservas pendientes</h2>
            @endif
            @php 
                $nro = 1;
            @endphp
            @foreach($reservas as $reserva)
                <div class="reserva-card">
                    <h2>Reserva #{{$nro}}</h2>
                    <div class="detalles">
                        <div class="datos">
                            <p><strong>Fecha de reserva: </strong> {{$reserva->fecha_de_reserva}}</p>
                            <p class="fecha_ingreso"><strong>Fecha de Ingreso: </strong> {{$reserva->fecha_ingreso}}</p>
                            <p class="fecha_salida"><strong>Fecha de Salida: </strong> {{$reserva->fecha_salida}}</p>
                            <p><strong>Tipo de Habitación: </strong> {{$reserva->habitacion->tipo_hab}}</p>
                            <p><strong>Número de Personas: </strong> {{$reserva->numero_personas}}</p>
                            <p><strong>Estado: </strong> {{$reserva->estado}}</p>
                            <p class="fecha_confirm"><strong>F.Confirm: </strong>{{$reserva->fecha_confirm}}</p>
                        </div>
                        <div class="cliente">
                            <i class="fa-solid fa-user"></i>
                            <p><strong>Nombre:</strong> {{$reserva->nombre}} {{$reserva->apellido}}</p>

                        </div>
                    </div>
                    <div class="acciones">
                        <!-- validar si la reserva tiene factura -->
                        <h2>Operacion</h2>
                    </div>
                </div>
                @php
                    $nro++;
                @endphp
            @endforeach
       </div>
</div>