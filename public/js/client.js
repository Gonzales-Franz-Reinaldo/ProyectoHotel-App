function cargarContenido(){
    var contenido = document.getElementById('contenidos');
    fetch('/client')
        .then(response => response.text())
        .then(html => {
            contenido.innerHTML = html;
        })
        .catch(error => console.log('Error al cargar el contenido:', error));
}

// aplicar setTimeout
setTimeout(cargarContenido, 200);

/* function cargarPromociones() {
        var contenido = document.getElementById("contenido");

        fetch('{{ route('promociones.index') }}')
            .then(response => response.text())
            .then(data => {
                contenido.innerHTML = data;
            })
            .catch(error => console.error('Error al cargar el contenido:', error));
}


function cargarDetallesPromocion(id) {
    var contenido = document.getElementById("contenido");

    fetch('{{ route('promociones.detalle', '') }}/' + id)
        .then(response => response.text())
        .then(data => {
            contenido.innerHTML = data;
        })
        .catch(error => console.error('Error al cargar el contenido:', error));
} */

