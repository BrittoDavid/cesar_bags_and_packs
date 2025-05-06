const express = require('express');
const cors = require('cors');
const fs = require('fs');
const path = require('path');
const app = express();

app.use(cors());
app.use(express.json());
app.use(express.static('public'));

const INVENTARIO_PATH = path.join(__dirname, 'data', 'inventario.json');

// Leer inventario
function leerInventario() {
    return JSON.parse(fs.readFileSync(INVENTARIO_PATH));
}

// Guardar inventario actualizado
function guardarInventario(data) {
    fs.writeFileSync(INVENTARIO_PATH, JSON.stringify(data, null, 2));
}

// Ruta para procesar pedido
app.post('/api/pedido', (req, res) => {
    const pedido = req.body;
    const inventario = leerInventario();
    let factura = [];
    let errores = [];
    let carrito = [
        { id: "1", nombre: "Bolso elegante", precio: 250000, cantidad: 2 },
        { id: "2", nombre: "Bolso moderno", precio: 250000, cantidad: 1 }
      ];

    pedido.forEach(p => {
        const producto = inventario.find(i => i.id === p.id);
        if (producto && producto.stock >= p.cantidad) {
            producto.stock -= p.cantidad;
            factura.push({
                nombre: producto.nombre,
                precio: producto.precio,
                cantidad: p.cantidad,
                subtotal: producto.precio * p.cantidad
            });
        } else {
            errores.push(`No hay suficiente stock de ${producto?.nombre || 'producto desconocido'}`);
        }
    });

    if (errores.length > 0) {
        return res.status(400).json({ errores });
    }

    guardarInventario(inventario);

    // Calcular total
    const total = factura.reduce((sum, p) => sum + p.subtotal, 0);

    res.json({ factura, total });
});

const PORT = 3000;
app.listen(PORT, () => {
    console.log(`Servidor corriendo en http://localhost:${PORT}`);
});


  