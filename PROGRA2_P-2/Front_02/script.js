// Mostrar u ocultar el boton al hacer scroll
window.onscroll = function() {
    const btn = document.getElementById("btnArriba");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        btn.style.display = "block";
    }
    else {
        btn.style.display = "none";
    }
};

// Volver al inicio hacer clic
document.getElementById("btnArriba").addEventListener("click", function() {
window.scrollTo({
    top: 0,
    behavior: "smooth"
});
});