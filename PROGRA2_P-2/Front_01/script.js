function validarFormulario() {
    let nombre = document.getElementById("nombre").value.trim();
    let correo = document.getElementById("correo").value.trim();

    // Validar si los campos están vacíos
    if (nombre === "" || correo === "") {
        alert("Por favor, completa todos los campos.");
        return false; // Evita el envío del formulario
    }

    // Validar el formato del correo
    if (!correo.includes("@") || !correo.includes(".")) {
        alert("Por favor, ingresa un correo electrónico válido.");
        return false; // Evita el envío del formulario
    }

    // Si todo está correcto
    alert("Formulario enviado correctamente.");
    return true; // Permite el envío del formulario
}
