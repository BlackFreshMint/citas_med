document.addEventListener("DOMContentLoaded", function() {
    var siButton = document.getElementById("siButton");
    var contenidoAdicional = document.getElementById("contenidoAdicional");

    siButton.addEventListener("click", function() {
        if (contenidoAdicional.style.display === "none") {
            contenidoAdicional.style.opacity = "0"; // Oculta la información actual
            setTimeout(function() {
                contenidoAdicional.style.display = "block"; // Muestra la información nueva
                setTimeout(function() {
                    contenidoAdicional.style.opacity = "1"; // Activa la animación de despliegue suave
                }, 10);
            }, 300); // Ajusta el tiempo de transición en milisegundos
        } else {
            contenidoAdicional.style.opacity = "0"; // Oculta la información actual gradualmente
            setTimeout(function() {
                contenidoAdicional.style.display = "none";
            }, 300); // Ajusta el tiempo de transición en milisegundos
        }
    });
});