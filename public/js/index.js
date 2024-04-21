const contenedorTarjetas = document.getElementById('productos-container');

function crearTarjetasProductosInicios(items){
    items.forEach(producto => {
        const nuevoProducto = document.createElement("div");
        nuevoProducto.classList = 'tarjeta-producto';
        nuevoProducto.innerHTML = `
        <div class="card">
        <div class="card-img-top">
        <img src=${producto.imagen}>
        </div>
        <div class="d-flex justify-content-center text-warning">
        ${producto.puntuacion}
        </div>
        <div class="card-body text-center">
        <p>${producto.nombre}</p>
        <p>${producto.precio}</p>
        <button class="add-cart">Agregar al carrito</button>
        </div>
        </div>
        `

        contenedorTarjetas.appendChild(nuevoProducto);
    });
};

crearTarjetasProductosInicios(productos);