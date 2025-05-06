document.addEventListener("DOMContentLoaded", function () {
    const botonModoOscuro = document.getElementById("btn-modo-oscuro");
    const body = document.body;
    const tarjetas = document.querySelectorAll(".product-card");

    // Aplicar modo oscuro si ya estaba activado antes
    if (localStorage.getItem("modo-oscuro") === "activado") {
        activarModoOscuro();
    }

    botonModoOscuro.addEventListener("click", function () {
        if (body.classList.contains("modo-oscuro")) {
            desactivarModoOscuro();
        } else {
            activarModoOscuro();
        }
    });

    function activarModoOscuro() {
        body.classList.add("modo-oscuro");
        tarjetas.forEach(card => card.classList.add("oscuro"));
        localStorage.setItem("modo-oscuro", "activado");
    }

    function desactivarModoOscuro() {
        body.classList.remove("modo-oscuro");
        tarjetas.forEach(card => card.classList.remove("oscuro"));
        localStorage.setItem("modo-oscuro", "desactivado");
    }
});