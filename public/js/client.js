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

function cargarPromociones() {
    var contenido = document.getElementById('contenidos'); 
    fetch('/client/promociones')
        .then(response => response.text())
        .then(html => {
            contenido.innerHTML = html;
        })
        .catch(error => console.log('Error al cargar las promociones:', error));
}

// funcion para mostrar una promocion especifica con el show mandando el id
function cargarDetalles(id) {
    fetch(`/client/descripciones/${id}`)
        .then(response => response.text())
        .then(html => {
            document.getElementById('contenidos').innerHTML = html;
        })
        .catch(error => console.error('Error al mostrar la promoción:', error));
}

/* function cargarDetalles(id) {
    var contenido = document.getElementById('contenidos'); 
    fetch('/client/descripciones/'+id)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la solicitud: ' + response.statusText);
            }
            return response.text();
        })
        .then(html => {
            contenido.innerHTML = html; 
        })
        .catch(error => console.error('Error al cargar los detalles:', error));
}
 */

function cargarConsultas(url) {
    var contenido = document.getElementById('contenidos'); 
    fetch(url) 
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la respuesta de la consulta');
            }
            return response.text();
        })
        .then(html => {
            contenido.innerHTML = html;
        })
        .catch(error => console.log('Error al cargar la consulta:', error));
}