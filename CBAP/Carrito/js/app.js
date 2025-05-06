document.addEventListener("DOMContentLoaded", () => {
    const carrito = [];
    const btnsAgregar = document.querySelectorAll(".agregar-carrito");
    const modal = document.getElementById("jsModalCarrito");
    const cerrarModal = document.querySelector(".jsModalClose");
    const carritoLista = document.getElementById("carrito-lista");
    const subtotal = document.getElementById("subtotal");
    const total = document.getElementById("total");

    btnsAgregar.forEach(btn => {
        btn.addEventListener("click", () => {
            const nombre = btn.getAttribute("data-nombre");
            const precio = parseInt(btn.getAttribute("data-precio"));
            const img = btn.getAttribute("data-img");

            carrito.push({ nombre, precio, img });
            actualizarCarrito();
            abrirModal();
        });
    });

    cerrarModal.addEventListener("click", () => {
        modal.style.display = "none";
    });

    function abrirModal() {
        modal.style.display = "flex";
    }

    function actualizarCarrito() {
        carritoLista.innerHTML = "";
        let suma = 0;

        carrito.forEach((item, index) => {
            suma += item.precio;

            const div = document.createElement("div");
            div.classList.add("modal__item");
            div.innerHTML = `
                <div class="modal__thumb">
                    <img src="${item.img}" alt="${item.nombre}">
                </div>
                <div class="modal__text-product">
                    <p>${item.nombre}</p>
                    <p><strong>$${item.precio.toLocaleString()}</strong></p>
                    <button class="quitar" data-index="${index}">Eliminar</button>
                </div>
            `;
            carritoLista.appendChild(div);
        });

        subtotal.textContent = `$${suma.toLocaleString()}`;
        total.textContent = `$${suma.toLocaleString()}`;

        document.querySelectorAll(".quitar").forEach(btn => {
            btn.addEventListener("click", () => {
                const index = btn.getAttribute("data-index");
                carrito.splice(index, 1);
                actualizarCarrito();
            });
        });
    }
});
