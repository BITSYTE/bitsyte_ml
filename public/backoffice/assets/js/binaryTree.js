/*function start(img) {
 console.log(img);
 var canvas = document.getElementById("miCanvas");
 if (canvas && canvas.getContext) {
 var ctx = canvas.getContext("2d");
 if (ctx) {
 /!*ctx.lineWidth = 2;
 ctx.strokeStyle = "black";
 ctx.fillStyle = "red";*!/

 var png = new Image();

 png.src = img;

 png.onload = function () {
 var patron = ctx.createPattern(png,"repeat");
 ctx.fillStyle = patron;
 ctx.fillRect(0,0,canvas.Width,canvas.height);
 // ctx.strokeRect(350,50,100,100);
 };



 // ctx.fillStyle = "rgba(19,52,149,1)";

 // ctx.fillRect(350,50,100,50);
 // ctx.strokeRect(350,50,100,50);

 } else {
 alert("NO cuentas con CANVAS");
 }
 }
 }*/


class TreeNode {
    constructor(context, position, bgcolor = "#2196F3", dimensions = {w: 180, h: 50}) {
        this._context = context;
        this._position = position;
        this._dimensions = dimensions;
        this._bgcolor = bgcolor;
        this._context.fillStyle = this._bgcolor;
        // this._context.fillRect(this._position.x, this._position.y, this._dimensions.w, this._dimensions.h);
        this._image = new Image();
        this._context.setLineDash([]);
    }

    set SetPosition(position) {
        this._position = position
    }

    set SetbgColor(bgcolor) {
        this._bgcolor = bgcolor
    }

    set SetDash(lineDash) {
        this._context.setLineDash([]);
    }

    set SetUsername(name) {
        this._context.fillStyle = "#FFFFFF";
        this._username = name;
        this._context.font = "12px Verdana";
        this._context.fillText(this._username, this._position.x + 52, this._position.y + 25);
    }

    set SetImage(url) {
        // var context = this._context;
        this._image.src = url;
        this._image.onload = (function () {
            this._context.drawImage(this._image, this._position.x, this._position.y);
        }).bind(this);
        console.log(this._position.x, this._position.y);
        console.log(this._context.drawImage);
    }

    createNode(d) {
        console.log("create");
        console.log(this._position);
        this._context.fillStyle = this._bgcolor;
        this._context.fillRect(this._position.x+d.x, this._position.y, this._dimensions.w - d.d, this._dimensions.h);
    }

    drawUserName(username,d){
        this._context.fillStyle = "#FFFFFF";
        this._context.font = "12px Verdana";
        this._context.fillText(username, this._position.x+d.x + 45, this._position.y + 25);
    }

    drawPaquete(url, x, y,d) {
        console.log(this._position);
        var image = new Image();
        var context = this._context;
        image.src = url;
        image.onload = function () {
            context.drawImage(image, x +d.x+ 5, y + 5, 35, 35);
        };
    }

    drawIconInfo(url, x, y,d) {
        var icono = new Image();
        var context = this._context;
        icono.src = url;
        icono.onload = function () {
            context.drawImage(icono, x + 155-d.x, y + 25, 20, 20);
        };
    }

    lineLeft(inicio, fin) {
        this._context.lineWidth = 2;
        this._context.strokeStyle = "rgba(58,150,235,1)";
        this._context.beginPath();
        this._context.moveTo(inicio.x + 90, inicio.y + 50);   //baja inicio
        this._context.lineTo(inicio.x + 90, inicio.y + 75);   //baja final
        this._context.lineTo(fin.x + 120, inicio.y + 75);    //izquierda
        this._context.quadraticCurveTo(fin.x + 90, inicio.y + 75, fin.x + 90, fin.y);
        this._context.stroke();
    }

    lineRight(inicio, fin) {
        this._context.lineWidth = 2;
        this._context.strokeStyle = "rgba(58,150,235,1)";
        this._context.beginPath();
        this._context.moveTo(inicio.x + 90, inicio.y + 50);   //baja inicio
        this._context.lineTo(inicio.x + 90, inicio.y + 75);   //baja final
        this._context.lineTo(fin.x + 60, inicio.y + 75);   //derecha
        this._context.quadraticCurveTo(fin.x + 90, inicio.y + 75, fin.x + 90, fin.y);
        this._context.stroke();
    }

    drawLineRoot(inicio,fin) {
        this._context.lineWidth = 2;
        this._context.strokeStyle = "rgba(58,150,235,1)";
        this._context.setLineDash([10, 5]);
        this._context.beginPath();
        this._context.moveTo(inicio.x + 90, inicio.y + 50);   //baja inicio
        this._context.lineTo(inicio.x + 90, inicio.y + 70);   //baja final
        this._context.lineTo(fin.x + 60, fin.y+30);   //derecha
        this._context.stroke();
        this._context.save();
    }

    drawLineViewMore(inicio,url) {
        this._context.lineWidth = 2;
        this._context.strokeStyle = "rgba(58,150,235,1)";
        this._context.beginPath();
        this._context.moveTo(inicio.x + 90, inicio.y + 50);   //baja inicio
        this._context.lineTo(inicio.x + 90, inicio.y + 75);   //baja final
        this._context.stroke();
        this.drawIconPlus(url,inicio.x + 90,inicio.y + 75);
    }

    drawIconPlus(url, x, y) {
        var icon_plus = new Image();
        var context = this._context;
        icon_plus.src = url;
        icon_plus.onload = function () {
            context.drawImage(icon_plus, x-12, y, 25, 25);
        };
    }

}

/****************************************************************************************/
class BinaryTree {

    constructor(ctx) {
        this._context = ctx;
        //------------------------------------------
        this._context.font = "15px Verdana";
        this._context.lineWidth = 2;
        this._context.fillStyle = "white";
        //------------------------------------------
        this.posInicial = {x: 300, y: 50};
        this.rectangulo = {largo: 180, alto: 50};
        this.rectangulo2 = {largo: 150, alto: 50, fondo: "rgba(33,150,243,1)"};
    }

    createNode(x, y, color, paquete, icon, ctx) {
        ctx.lineWidth = 1;
        ctx.fillStyle = color;
        ctx.fillRect(x, y, this.rectangulo.largo, this.rectangulo.alto);
        this.pinta(paquete, icon, ctx, x, y);
        ctx.font = "15px Verdana";
        ctx.lineWidth = 2;
        ctx.fillStyle = "white";
        ctx.fillText("user name", x + 52, y + 25);
        ctx.strokeRect(x, y, this.rectangulo.largo, this.rectangulo.alto);
    }

    createNodeS(x, y, color, paquete, icon, ctx) {
        ctx.lineWidth = 1;
        ctx.fillStyle = color;
        ctx.fillRect(x, y, this.rectangulo2.largo, this.rectangulo2.alto);
        this.pinta2(paquete, icon, ctx, x, y);
        ctx.font = "15px Verdana";
        ctx.lineWidth = 2;
        ctx.fillStyle = "white";
        ctx.fillText("user name", x + 40, y + 25);
        // ctx.strokeRect(x,y,this.rectangulo.largo, this.rectangulo.alto);
    }

    createNodeHijo(x, y, color, paquete, icon, ctx) {
        ctx.fillStyle = color;
        ctx.fillRect(x - 90, y, this.rectangulo.largo, this.rectangulo.alto);
        this.pinta2(paquete, icon, ctx, x, y);
        ctx.font = "15px Verdana";
        ctx.lineWidth = 2;
        ctx.fillStyle = "white";
        ctx.fillText("user name", x - 38, y + 25);
    }

    lineLeft(x, y) {
        this._context.lineWidth = 2;
        this._context.strokeStyle = "rgba(58,150,235,1)";
        this._context.beginPath();
        this._context.moveTo(x + 100, y + 50);   //baja inicio
        this._context.lineTo(x + 100, 110);   //baja final
        this._context.lineTo(x - 70, 110);    //izquierda
        this._context.quadraticCurveTo(x - 100, 110, x - 100, y + 100);
        this._context.stroke();
        var pl = {x: x - 100, y: y + 100};
        return (pl);
    }

    lineLeft2(x, y) {
        console.log("izquierda x=" + x);
        this._context.lineWidth = 2;
        this._context.strokeStyle = "rgba(58,150,235,1)";
        this._context.beginPath();
        this._context.moveTo(x, y + 50);   //baja inicio
        // this.ctx.fillRect(x,y+50,10,10);
        this._context.lineTo(x, y + 80);   //baja final
        this._context.lineTo(x - (x / 2 - 30), y + 80);    //izquierda
        this._context.quadraticCurveTo(x - (x / 2), y + 80, x - (x / 2), y + 100);
        this._context.stroke();
        var pl = {x: x - 100, y: y + 100};
        return (pl);
    }

    lineRight2(x, y) {
        this._context.beginPath();
        this._context.moveTo(x, y + 80);   //baja final
        this._context.lineTo(x + 100, y + 80);   //derecha
        this._context.quadraticCurveTo(x + 130, y + 80, x + 130, y + 100);
        this._context.stroke();
        var pI = {x: x + 300, y: y + 100};
        return (pI);
    }

    lineRight(x, y) {
        this.ctx.beginPath();
        this.ctx.moveTo(x + 100, y + 80);   //baja final
        this.ctx.lineTo(x + 260, y + 80);   //derecha
        this.ctx.quadraticCurveTo(x + 300, y + 80, x + 300, y + 100);
        this.ctx.stroke();
        var pI = {x: x + 300, y: y + 100};
        return (pI);
    }

    pinta(paquete, icon, ctx, x, y) {
        // ctx.fillStyle = colorDelante;
        // ctx.fillRect(carta.x, carta.y, carta.ancho, carta.largo);
        var imagen = new Image();
        var icono = new Image();
        imagen.src = paquete;
        icono.src = icon;
        imagen.onload = function () {
            ctx.drawImage(imagen, x, y);
        };
        icono.onload = function () {
            ctx.drawImage(icono, x + 155, y + 25, 20, 20);
        };
    }

    pinta2(paquete, icon, ctx, x, y) {
        var imagen = new Image();
        var icono = new Image();
        imagen.src = paquete;
        icono.src = icon;
        imagen.onload = function () {
            ctx.drawImage(imagen, x, y + 5, 35, 35);
            // ctx.drawImage(icono, x + 115, y+15);
        };
        icono.onload = function () {
            ctx.drawImage(icono, x + 125, y + 25, 20, 20);
        };
    }

    pinta3(paquete, icon, ctx, x, y) {
        // ctx.fillStyle = colorDelante;
        // ctx.fillRect(carta.x, carta.y, carta.ancho, carta.largo);
        var imagen = new Image();
        var icono = new Image();
        imagen.src = paquete;
        icono.src = icon;
        imagen.onload = function () {
            ctx.drawImage(imagen, x - 90, y);
            ctx.drawImage(icono, x + 50, y + 6);
        };
    }
}

