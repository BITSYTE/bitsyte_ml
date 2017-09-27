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

class BinaryTree {

    constructor(ctx, paquete, adduser, icon, icon_plus) {
        this._context = ctx;
        this._paquete = paquete;
        this._adduser = adduser;
        this._icon = icon;
        this._icon_plus = icon_plus;
        //------------------------------------------
        this._context.font = "15px Verdana";
        this._context.lineWidth = 2;
        this._context.fillStyle = "white";
        //------------------------------------------
        this._posInicial = {x: 10, y: 10};
        this._node = {w: 180, h: 50};
        this._nodeSmall = {w: 150, h: 50, fondo: "rgba(33,150,243,1)"};
        this._posiciones = {
            "1,1": {x: canvas.width / 2 - 90, y: 50, hl: "2,1", hr: "2,2"},
            "2,1": {x: canvas.width / 4 - 80, y: 150, hl: "3,1", hr: "3,2"},
            "2,2": {x: canvas.width / 4 * 3 - 80, y: 150, hl: "3,3", hr: "3,4"},
            "3,1": {x: canvas.width / 8 - 80, y: 250, hl: "4,1", hr: "4,2"},
            "3,2": {x: canvas.width / 8 * 3 - 80, y: 250, hl: "4,3", hr: "4,4"},
            "3,3": {x: canvas.width / 8 * 5 - 80, y: 250, hl: "4,5", hr: "4,6"},
            "3,4": {x: canvas.width / 8 * 7 - 80, y: 250, hl: "4,7", hr: "4,8"},
            "4,1": {x: 0, y: 340, hl: "no", hr: "no"},
            "4,2": {x: canvas.width / 8 + 5, y: 340, hl: "no", hr: "no"},
            "4,3": {x: canvas.width / 8 * 2 + 5, y: 350, hl: "no", hr: "no"},
            "4,4": {x: canvas.width / 8 * 3 + 5, y: 350, hl: "no", hr: "no"},
            "4,5": {x: canvas.width / 8 * 4 + 5, y: 350, hl: "no", hr: "no"},
            "4,6": {x: canvas.width / 8 * 5 + 5, y: 350, hl: "no", hr: "no"},
            "4,7": {x: canvas.width / 8 * 6 + 5, y: 350, hl: "no", hr: "no"},
            "4,8": {x: canvas.width / 8 * 7 + 5, y: 350, hl: "no", hr: "no"}
        };
        this._nodesPos = [];
    }

    initTree(json) {
        var dimensions = {x: 0, d: 0};
        let paquete = this._paquete;
        let icon = this._icon;

        if (user !== json[0]["username"]) {
            var tNodeF = new TreeNode(this._context, this._posInicial,"root");
            // console.log("draw padre");
            tNodeF.SetPosition = this._posInicial;
            tNodeF.createNode(dimensions);
            tNodeF.drawUserName(user, dimensions);
            tNodeF.drawPaquete(this._paquete, this._posInicial.x, this._posInicial.y, dimensions);
            tNodeF.drawIconInfo(this._icon, this._posInicial.x, this._posInicial.y, dimensions);
            // console.log(this._posiciones["1,1"]);
            tNodeF.drawLineRoot(this._posInicial, this._posiciones["1,1"]);
            this._nodesPos.push(tNodeF);
        }

        for (let k in json) {
            // console.log("indice =" + k, "position =" + json[k]["position"]);
            let nombre = "tNode" + k;                 // CREA EL NOMBRE DEL OBJETO
            /******          se crea el objeto.       ****/
            nombre = new TreeNode(this._context, this._posInicial, json[k]["type"],json[k]["paquete"]);

            let pos = this._posiciones[json[k]["position"]];    // se obtiene la posicion del nodo
            //se checa si el nodo es de nivel 4 para cambiar el tipo de linea
            if (pos["hl"] !== "no" && json[k]["type"] === "user") {
                let fin_l = this._posiciones[pos["hl"]];
                nombre.lineLeft(pos, fin_l);
                let fin_r = this._posiciones[pos["hr"]];
                nombre.lineRight(pos, fin_r);
                dimensions = {x: 0, d: 0};
            } else if (pos["hl"] === "no" ) {
                if (json[k]["type"] === "user"){
                    nombre.drawLineViewMore(pos, this._icon_plus);
                }
                nombre.setDimensions= {w: 150, h: 50};
                pos = {x:pos.x+15, y: pos.y};
            }

            // se checa que tipo de usuario es para cambiar el color y los iconos
            if (json[k]["type"] === "user") {
                nombre.SetbgColor = "#2196F3";
                paquete = this._paquete;
                icon = this._icon;
            } else {
                nombre.SetbgColor = "#1bb04a";
                paquete = this._adduser;
                icon = "";
            }
            //se dibuja el nodo
            nombre.SetPosition = pos;
            nombre.createNode();
            nombre.SetUsername = json[k]["username"];
            nombre.SetImage = paquete;
            nombre.drawIconInfo(icon);
            this._nodesPos.push(nombre);
        }

    }

    arrayNodes() {
        return this._nodesPos;
    }

    selecciona(e) {
        let pos = ajusta(e.clientX, e.clientY);
        console.log(pos);
        this._nodesPos.map(function (item) {
            if (pos.x > item._position.x && pos.x < item._position.x + 180 && pos.y > item._position.y && pos.y < item._position.y + 50) {
                console.log(item);
                console.log("click en nodo");
                // console.log($("#boton").click());
                $.ajax({
                    method: "POST",
                    url: "/ajax",
                    data: {username: item._username, paquete: item._paquete, _token: csr},
                    success: function (result) {
                        var user = JSON.parse(result);
                        console.log(user);
                        // var tam = Object.keys(obj.postalLocation).length;
                        var tam = Object.keys(user).length;
                        // var tam = result.length;
                        console.log(tam);
                        let campos = "";
                       campos += "<fieldset class=\"form-group floating-label-form-group\">\n" +
                           "<label for=\"email\">username: "+user.username+"</label>\n" +
                           // "<input type=\"text\" class=\"form-control\" id=\"email\" placeholder=\"\">\n" +
                           "</fieldset>\n" +
                           "<br>\n" +
                           "<fieldset class=\"form-group floating-label-form-group\">\n" +
                           "<label for=\"title\">"+"paquete: "+user.paquete+"</label>\n" +
                           // "<input type=\"password\" class=\"form-control\" id=\"title\" placeholder=\"Password\">\n" +
                           "</fieldset>\n" +
                           "<br>\n" +
                           "<fieldset class=\"form-group floating-label-form-group\">\n" +
                           "<label for=\"title1\">dato extra: "+user.algo+"</label>\n" +
                           // "<textarea class=\"form-control\" id=\"title1\" rows=\"3\" placeholder=\"Description\"></textarea>\n" +
                           "</fieldset>";
                        $("#modal-body").html(campos);
                    },
                    error: function (httpReq, status, exception) {
//                    alert(status+"-"+exception);
                        console.log(status + "-" + exception);
                    }
                });
                $('#boton').trigger("click")
            }
        });
    }
}

