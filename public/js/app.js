function cambiarClaseSegunAnchoPantalla(etiqueta) {
    var anchoPantalla = window.innerWidth;
    var div = document.getElementById(etiqueta);
    
    if (anchoPantalla > 768) {
        div.classList.remove('h-100');
        div.classList.add('vh-100');
    } else {
        div.classList.remove('vh-100');
        div.classList.add('h-100');
    }
}

// Llamar a la función cuando se cargue la página
window.onload = function() {
    cambiarClaseSegunAnchoPantalla('view-complete');
};

// Llamar a la función cuando se cambie el tamaño de la ventana
window.addEventListener('resize', function() {
    cambiarClaseSegunAnchoPantalla('view-complete');
});
