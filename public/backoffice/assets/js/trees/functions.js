function pintaGrid(disX, disY, color) {
    ctx.strokeStyle = color;
    ctx.lineWidth = 0.5;

    for (var i = disX + 0.5; i < canvas.width; i += disX) {
        ctx.beginPath();
        ctx.moveTo(i, 0);
        ctx.lineTo(i, ctx.canvas.height);
        ctx.stroke();
    }

    for (var i = disY + 0.5; i < canvas.height; i += disY) {
        ctx.beginPath();
        ctx.moveTo(0, i);
        ctx.lineTo(ctx.canvas.width, i);
        ctx.stroke();
    }
}

function ajusta(xx, yy) {
    var posCanvas = canvas.getBoundingClientRect();
    var x = xx - posCanvas.left;
    var y = yy - posCanvas.top;
    return {x: x, y: y}
}

function selecciona(e) {
    var pos = ajusta(e.clientX, e.clientY);
    console.log(pos);
    var x = pos.x;
    var y = pos.y;
    var tecla;
    var bandera = false;
    for (var i = 0; i < info_array.length; i++) {
        tecla = info_array[i];
        if (tecla.x > 0) {
            if ((x > tecla.x) && (x < tecla.x + tecla.ancho) && (y > tecla.y) && (y < tecla.y + tecla.alto)) {
                break;
            }
        }
    }
    if (i < info_array.length) {
        alert(i);
    }
}