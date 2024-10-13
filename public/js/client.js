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