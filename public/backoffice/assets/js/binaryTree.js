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
    constructor(context, position, bgcolor = "$2196F3", dimensions = {w: 180, h: 50}) {
        this._context = context;
        this._position = position;
        this._dimensions = dimensions;
        this._bgcolor = bgcolor;

        this._context.fillStyle = this._bgcolor;
        this._context.fillRect(this._position.x, this._position.y, this._dimensions.w, this._dimensions.h);

        this._image = new Image();
    }

    set SetUsername(name) {
        this._username = name;
        this._context.fillText(this._username, this._position.x + 52, this._position.y + 25);
    }

    set SetImage(url) {
        this._image.onload = function () {
            this._context.drawImage(this._image, this._position.x, this._position.y);
        };
        this._image.src = url;
    }
}

class BinaryTree {

    constructor(ctx) {

        //------------------------------------------
        this._context.font = "15px Verdana";
        this._context.lineWidth = 2;
        this._context.fillStyle = "white";
        //------------------------------------------

        // imagen = new Image();
        // icon = new Image();
        this.ctx = ctx;
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
        this.ctx.lineWidth = 2;
        this.ctx.strokeStyle = "rgba(58,150,235,1)";
        this.ctx.beginPath();
        this.ctx.moveTo(x + 100, y + 50);   //baja inicio
        this.ctx.lineTo(x + 100, 110);   //baja final
        this.ctx.lineTo(x - 70, 110);    //izquierda
        this.ctx.quadraticCurveTo(x - 100, 110, x - 100, y + 100);
        this.ctx.stroke();
        var pl = {x: x - 100, y: y + 100};
        return (pl);
    }

    lineLeft2(x, y) {
        console.log("izquierda x=" + x);
        this.ctx.lineWidth = 2;
        this.ctx.strokeStyle = "rgba(58,150,235,1)";
        this.ctx.beginPath();
        this.ctx.moveTo(x, y + 50);   //baja inicio
        // this.ctx.fillRect(x,y+50,10,10);
        this.ctx.lineTo(x, y + 80);   //baja final
        this.ctx.lineTo(x - (x / 2 - 30), y + 80);    //izquierda
        this.ctx.quadraticCurveTo(x - (x / 2), y + 80, x - (x / 2), y + 100);
        this.ctx.stroke();
        var pl = {x: x - 100, y: y + 100};
        return (pl);
    }

    lineRight2(x, y) {
        this.ctx.beginPath();
        this.ctx.moveTo(x, y + 80);   //baja final
        this.ctx.lineTo(x + 100, y + 80);   //derecha
        this.ctx.quadraticCurveTo(x + 130, y + 80, x + 130, y + 100);
        this.ctx.stroke();
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
        /*icono.onload = function(){
         ctx.drawImage(icono, x + 50, y + 6);
         };*/
    }

}

// ctx.font = '20px glyphicon';
// ctx.fillText(String.fromCharCode(0x2a), 10, 50);


/*function createNode(x,y,color){
 ctx.fillStyle = color;
 ctx.fillRect(x,y,rectangulo.largo, rectangulo.alto);
 ctx.drawImage(imagen,x,y);
 ctx.font = "15px Verdana";
 ctx.lineWidth = 1;
 ctx.fillStyle = "white";
 ctx.fillText("user name",posInicial.x-130,190);
 }*/



//Path
/*ctx.beginPath();
 ctx.moveTo(50, 100);
 ctx.lineTo(100, 50);
 ctx.lineTo(150, 100);
 ctx.lineTo(100, 150);
 ctx.stroke();

 //Path
 ctx.beginPath();
 ctx.moveTo(200, 100);
 ctx.lineTo(250, 50);
 ctx.lineTo(300, 100);
 ctx.lineTo(250, 150);
 //			ctx.fill();
 ctx.closePath();
 ctx.stroke();

 //Path
 ctx.beginPath();
 ctx.moveTo(350, 100);
 ctx.lineTo(400, 50);
 ctx.lineTo(450, 100);
 ctx.lineTo(400, 150);
 ctx.fill();
 ctx.closePath();
 ctx.stroke();*/


/*
 <script>
 window.onload = function () {
 var canvas = document.getElementById("miCanvas");
 if (canvas && canvas.getContext) {
 var ctx = canvas.getContext("2d");
 if (ctx) {
 console.log(canvas.width);
 console.log(canvas.width / 2);
 /!****************
 VARIABLES
 *****************!/
 var i;
 var raiz = {fondo: "rgba(19,52,149,1)"};
 var lvl1 = {fondo: "rgba(19,52,149,1)"};
 var lvl2 = {fondo: "rgba(19,52,149,1)"};
 var lvl3 = {fondo: "rgba(19,52,149,1)"};
 var add = {fondo: "rgba(19,52,149,1)"};
 var imagen = new Image();
 var icon = new Image();
 var posInicial = {x: canvas.width / 2 - 90, y: 50};
 var rectangulo = {largo: 180, alto: 50};
 var json = {
 "users": [
 {"nombre": "asdru", "paquete": "gold", "id": "1", "padre": "0"},
 {"nombre": "John", "paquete": "gold", "id": "2", "padre": "1"},
 {"nombre": "jose", "paquete": "gold", "id": "2", "padre": "1"}
 ]
 };
 console.log(json);
 /!*****************
 FUNCIONES
 ******************!/
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

 function procesaImagen() {
 //                        limpiar();
 ctx.drawImage(imagen, posInicial.x, posInicial.y);
 ctx.drawImage(icon, posInicial.x + 140, posInicial.y + 6);
 }

 function limpiar() {
 //                        var w = imagen.width;
 //                        var h = imagen.height;
 ctx.clearRect(250, 10, w, h);
 }

 function printImg(paquete, x, y) {
 // ctx.fillStyle = colorDelante;
 // ctx.fillRect(carta.x, carta.y, carta.ancho, carta.largo);
 var imagen = new Image();
 imagen.src = paquete;
 imagen.onload = function () {
 ctx.drawImage(imagen, x, y);
 }
 }

 icon.src = "{{asset('backoffice/images/icons/info-ico-azul.png')}}";
 imagen.src = "{{asset('backoffice/images/circulo1.png')}}";
 var paquete = "{{asset('backoffice/images/circulo1.png')}}";

 pintaGrid(20, 20, "gray");
 /!******************************!/
 var arbol = new BinaryTree(ctx);
 arbol.createNode(0, 0, raiz.fondo, paquete, ctx);

 imagen.onload = function (e) {
 //                        ctx.fillRect(350,100,canvas.width, canvas.height);
 ctx.fillStyle = raiz.fondo;
 ctx.fillRect(posInicial.x, posInicial.y, rectangulo.largo, rectangulo.alto);
 //                        ctx.strokeRect(posInicial.x,posInicial.y,rectangulo.largo,rectangulo.alto);
 procesaImagen();
 ctx.font = "15px Verdana";
 ctx.lineWidth = 1;
 ctx.fillStyle = "white";
 ctx.fillText("user name", posInicial.x + 50, posInicial.y + 30);
 //                        ctx.strokeText("CANVAS",posInicial.x+50,posInicial.y+35);
 };

 var x = 0;
 var y = 0;
 for (i = 0; i <= 3; i++) {
 //                        pinta(paquete,x,y);
 //                        y=y+60;
 }

 ctx.lineWidth = 2;
 ctx.strokeStyle = "rgba(58,150,235,1)";
 ctx.beginPath();
 ctx.moveTo(posInicial.x + 100, 100);   //baja inicio
 ctx.lineTo(posInicial.x + 100, 130);   //baja final
 ctx.lineTo(posInicial.x - 70, 130);    //izquierda
 ctx.quadraticCurveTo(posInicial.x - 100, 130, posInicial.x - 100, 160);
 ctx.stroke();

 ctx.beginPath();
 ctx.moveTo(posInicial.x + 100, 130);   //baja final
 ctx.lineTo(posInicial.x + 260, 130);   //derecha
 ctx.quadraticCurveTo(posInicial.x + 300, 130, posInicial.x + 300, 160);
 ctx.stroke();

 ctx.fillStyle = raiz.fondo;
 ctx.fillRect(posInicial.x - 180, 160, rectangulo.largo, rectangulo.alto);
 //                    procesaImagen2();
 ctx.drawImage(imagen, 0, 0);
 ctx.drawImage(imagen, posInicial.x - 130, 190);
 ctx.font = "15px Verdana";
 ctx.lineWidth = 1;
 ctx.fillStyle = "white";
 ctx.fillText("user name", posInicial.x - 130, 190);

 } else {
 alert("NO cuentas con CANVAS")
 }
 ;
 }
 };
 {{--var img = "{{ asset('backoffice/images/circulo1.png') }}";--}}
 {{--window.onload = start(img);--}}
 console.log("asd2");
 </script>*/
