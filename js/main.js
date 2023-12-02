document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    loginForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevenir el envío del formulario
        // Redirigir a la página deseada
        window.location.href = './logeado.html'; // Reemplaza con la URL deseada
    });
});
