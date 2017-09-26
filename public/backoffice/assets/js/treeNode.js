
class TreeNode {
    constructor(context, position, bgcolor = "#2196F3", dimensions = {w: 180, h: 50}) {
        this._context = context;
        this._position = position;
        this._dimensions = dimensions;
        this._bgcolor = bgcolor;
        // this._context.fillStyle = this._bgcolor;
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
