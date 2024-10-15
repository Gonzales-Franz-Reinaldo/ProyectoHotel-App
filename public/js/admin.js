function cargarContenido(url){
    var contenido = document.getElementById('contenido');
    fetch(url)
        .then(response => response.text())
        .then(html => {
            contenido.innerHTML = html;
        })
        .catch(error => console.log('Error al cargar el contenido:', error));
}



function cargarReservas(url) {
    var reservaContenido = document.getElementById('reserva-contenido');
    fetch(url)
        .then(response => response.text())
        .then(html => {
            reservaContenido.innerHTML = html; 
        })
        .catch(error => console.error('Error al cargar las reservas:', error));
}


function confirmarReserva(id) {
    fetch(`/admin/reservas/confirmar/${id}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if(data.success) {
            alert('Reserva confirmada');
            cargarReservasRecientes('admin/reservasRecientes');
        }
    })

}


function rechazarReserva(id) {
    fetch(`/admin/reservas/rechazar/${id}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if(data.success) {
            alert('Reserva cancelada');
            cargarReservasRecientes('admin/reservasRecientes');
        }
    })

}   



function realizarBusqueda() {
    const busquedaDatos = document.getElementById('busquedaDatos').value;
    const fechaReserva = document.getElementById('fechaReserva').value;
    const tipoHabitacion = document.getElementById('tipoHabitacion').value;
    const ordenarTipo = document.getElementById('ordenarTipo').value;

    fetch('{{ route("admin.reservasRecientesFilters") }}?busquedaGeneral=' + busquedaDatos + '&fechaReserva=' + fechaReserva + '&tipoHabitacion=' + tipoHabitacion + '&ordenarTipo=' + ordenarTipo)
        .then(response => response.json())
        .then(data => {
            document.getElementById('reservas-container').innerHTML = data.html;
        })
        .catch(error => console.error('Error:', error));

    return false;
}