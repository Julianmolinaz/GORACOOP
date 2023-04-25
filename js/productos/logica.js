function getProductos(producto) {

console.log(producto)
    switch (producto.id) {
        case 1:
            return [new Producto(producto.id, "R.T.M")];
            break;
        case 2:
            return [new Producto(producto.id, "SOAT")];
            break;
        case 3:
            return [
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "R.T.M"),
            ];
            break;
        case 13:
            return [
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "R.T.M"),
            ];
            break;
        case 14:
            return [
                new Producto(producto.id, "SOAT"),
            ];
            break;
        case 15:
            return [
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "SOAT"),
            ];
            break;
        case 16:
            return [
                new Producto(producto.id, "R.T.M"),
                new Producto(producto.id, "R.T.M"),
            ];
            break;
        case 17:
            return [
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "R.T.M"),
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "R.T.M"),
            ];
            break;
        case 18:
            return [
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "R.T.M"),
            ];
            break;
        case 19:
            return [
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "R.T.M"),
                new Producto(producto.id, "R.T.M"),
            ];
            break;
        case 20:
            return [
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "SOAT"),
            ];
            break;
        case 21:
            return [
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "R.T.M"),
            ];
            break;
        case 22:
            return [
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "R.T.M"),
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "R.T.M"),
            ];
            break;
        case 23:
            return [
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "R.T.M"),
                new Producto(producto.id, "R.T.M"),
            ];
            break;
	case 24:
            return [
                new Producto(producto.id, "SOAT"),
                new Producto(producto.id, "SOAT"),
            ];
            break;
        default:
            return false;
            break;
    }
}
