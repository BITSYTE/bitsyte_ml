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
            "0,1": {x: canvas.width / 2 - 90, y: 50, hl: "1,1", hr: "1,2"},
            "1,1": {x: canvas.width / 4 - 80, y: 150, hl: "2,1", hr: "2,2"},
            "1,2": {x: canvas.width / 4 * 3 - 80, y: 150, hl: "2,3", hr: "2,4"},
            "2,1": {x: canvas.width / 8 - 80, y: 250, hl: "3,1", hr: "3,2"},
            "2,2": {x: canvas.width / 8 * 3 - 80, y: 250, hl: "3,3", hr: "3,4"},
            "2,3": {x: canvas.width / 8 * 5 - 80, y: 250, hl: "3,5", hr: "3,6"},
            "2,4": {x: canvas.width / 8 * 7 - 80, y: 250, hl: "3,7", hr: "3,8"},
            "3,1": {x: 0, y: 340, hl: "no", hr: "no"},
            "3,2": {x: canvas.width / 8 + 5, y: 340, hl: "no", hr: "no"},
            "3,3": {x: canvas.width / 8 * 2 + 5, y: 350, hl: "no", hr: "no"},
            "3,4": {x: canvas.width / 8 * 3 + 5, y: 350, hl: "no", hr: "no"},
            "3,5": {x: canvas.width / 8 * 4 + 5, y: 350, hl: "no", hr: "no"},
            "3,6": {x: canvas.width / 8 * 5 + 5, y: 350, hl: "no", hr: "no"},
            "3,7": {x: canvas.width / 8 * 6 + 5, y: 350, hl: "no", hr: "no"},
            "3,8": {x: canvas.width / 8 * 7 + 5, y: 350, hl: "no", hr: "no"}
        };
        this._posiciones2 = [
            {id:"0,1", x: canvas.width / 2 - 90, y: 50, hl: "1,1", hr: "1,2"},
            {id:"1,1", x: canvas.width / 4 - 80, y: 150, hl: "2,1", hr: "2,2"},
            {id:"1,2", x: canvas.width / 4 * 3 - 80, y: 150, hl: "2,3", hr: "2,4"},
            {id:"2,1", x: canvas.width / 8 - 80, y: 250, hl: "3,1", hr: "3,2"},
            {id:"2,2", x: canvas.width / 8 * 3 - 80, y: 250, hl: "3,3", hr: "3,4"},
            {id:"2,3", x: canvas.width / 8 * 5 - 80, y: 250, hl: "3,5", hr: "3,6"},
            {id:"2,4", x: canvas.width / 8 * 7 - 80, y: 250, hl: "3,7", hr: "3,8"},
            {id:"3,1", x: 0, y: 340, hl: "no", hr: "no"},
            {id:"3,2", x: canvas.width / 8 + 5, y: 340, hl: "no", hr: "no"},
            {id:"3,3", x: canvas.width / 8 * 2 + 5, y: 350, hl: "no", hr: "no"},
            {id:"3,4", x: canvas.width / 8 * 3 + 5, y: 350, hl: "no", hr: "no"},
            {id:"3,5", x: canvas.width / 8 * 4 + 5, y: 350, hl: "no", hr: "no"},
            {id:"3,6", x: canvas.width / 8 * 5 + 5, y: 350, hl: "no", hr: "no"},
            {id:"3,7", x: canvas.width / 8 * 6 + 5, y: 350, hl: "no", hr: "no"},
            {id:"3,8", x: canvas.width / 8 * 7 + 5, y: 350, hl: "no", hr: "no"}
        ];
        this._nodesPos = [];
    }

    getarrayNodes() {
        return this._nodesPos;
    }

    initTree(users) {
        this._nodesPos = [];
        var dimensions = {x: 0, d: 0};
        let paquete = this._paquete;
        let icon = this._icon;

        if (user !== users[0]["username"]) {
            var tNodeF = new TreeNode(this._context, this._posInicial, "root");
            // console.log("draw padre");
            tNodeF.SetPosition = this._posInicial;
            tNodeF.createNode(dimensions);
            tNodeF.drawUserName(user, dimensions);
            tNodeF.drawPaquete(this._paquete, this._posInicial.x, this._posInicial.y, dimensions);
            tNodeF.drawIconInfo(this._icon, this._posInicial.x, this._posInicial.y, dimensions);
            // console.log(this._posiciones["1,1"]);
            tNodeF.drawLineRoot(this._posInicial, this._posiciones["0,1"]);
            this._nodesPos.push(tNodeF);
        }

        let nodes =this._posiciones2;
        console.log("nodes");
        console.log(nodes);
        for (let k in users) {
            // console.log("indice =" + k, "position =" + users[k]["position"]);
            let nombre = "tNode" + k;                 // CREA EL NOMBRE DEL OBJETO
            /******          se crea el objeto.       ****/
            nombre = new TreeNode(this._context, this._posInicial, users[k]["type"], users[k]["paquete"]);

            let asdpos = users[k]["position"][0]+","+users[k]["position"][1];
            console.log(asdpos);
            console.log("nodes despues");
            // console.log(pos);
            for (let i in this._posiciones2) {
                console.log(this._posiciones2[i]);
                if(this._posiciones2[i]['id'] === asdpos+"") {
                    console.log("entro if");
                    nodes.splice(i,1);
                }
            }
            this.makeAdd(nodes);

            let pos = this._posiciones[asdpos];    // se obtiene la posicion del nodo
            // console.log(users[k]["type"]);
            //se checa si el nodo es de nivel 4 para cambiar el tipo de linea
            if (pos["hl"] !== "no" && users[k]["type"] === "user") {
                // console.log(users[k]);
                // console.log(pos["hl"]);

                let fin_l = this._posiciones[pos["hl"]];
                nombre.lineLeft(pos, fin_l);
                let fin_r = this._posiciones[pos["hr"]];
                nombre.lineRight(pos, fin_r);
                dimensions = {x: 0, d: 0};
            } else if (pos["hl"] === "no") {
                if (users[k]["type"] === "user") {
                    let nodeMore = "NodeMore" + k;
                    nodeMore = new TreeNode(this._context, {x: pos.x, y: pos.y + 75}, "viewMore", "root");
                    // nombre.drawLineViewMore(pos, this._icon_plus);
                    nodeMore.setDimensions = {w: 25, h: 25};
                    nodeMore.SetUsername = users[k]["username"];
                    nodeMore.createNodeViewMore(this._icon_plus);
                    this._nodesPos.push(nodeMore);
                }
                nombre.setDimensions = {w: 150, h: 50};
                pos = {x: pos.x + 15, y: pos.y};
            }

            // se checa que tipo de usuario es para cambiar el color y los iconos
            if (users[k]["type"] === "user") {
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
            nombre.SetUsername = users[k]["username"];
            nombre.SetImage = paquete;
            nombre.drawIconInfo(icon);
            this._nodesPos.push(nombre);
        }
        console.log("nodes despues");
        console.log(nodes);
        this.makeAdd(nodes);
        console.log(this._nodesPos);
    }

    makeAdd(nodes) {
        for (let i in nodes) {
            console.log(nodes[i]);
            /*if(nodes[i]['id'] === asdpos+"") {
                console.log("entro if");
                nodes.splice(i,1);
            }*/
        }
    }

    selecciona(e, csr) {
        let pos = ajusta(e.clientX, e.clientY);
        // console.log(pos);
        this._nodesPos.map(function (item) {
            if (pos.x > item._position.x && pos.x < item._position.x + 180 && pos.y > item._position.y && pos.y < item._position.y + 50) {
                console.log("click en nodo");
                console.log(item);
                // console.log($("#boton").click());
                if (item._type === "add") {
                    let users;
                    $.ajax({
                        method: "POST",
                        url: "/ajax",
                        data: {username: item._username, paquete: item._paquete, _token: csr},
                        success: function (result) {
                            let campos = "";
                            let route = "";
                            let users = JSON.parse(result);
                            console.log(users);
                            if (users.length === 0) {
                                console.log("vacio");
                                $("#modal-body-add").html();
                                $("#add-route").html();
                                campos = "<span>Nota:</span>\n" +
                                    "                                <p>\n" +
                                    "                                    To add a user. you have to first register it.<br>\n" +
                                    "                                    Click in continue .\n" +
                                    "                                </p>";
                                $("#modal-body-add").html(campos);
                                $("#add-route").html(route);
                                // $('#add').trigger("click")
                            } else if (users.length === 1) {
                                console.log("uno");
                                $("#modal-body-add").html();
                                campos = "<span>Nota:</span>\n" +
                                    "                                <p>\n" +
                                    "                                    confirm that you want to add the user: <strong>" + users[0].username + "</strong>  here.<br>\n" +
                                    "                                    Click in continue .\n" +
                                    "                                </p>";
                                $("#modal-body-add").html(campos);
                                // $('#add').trigger("click")
                            } else {
                                console.log("lleno");
                                $("#modal-body-add").html();
                                campos = "<div class=\"list-group\">";
                                for (let k in users) {
                                    console.log(k + "users =" + users[k].username);
                                    campos += "<a href=\"#\" class=\"list-group-item list-group-item-action\">" + users[k].username + "</a>"
                                }
                                campos += "</div>";
                                $("#modal-body-add").html(campos);
                                // $('#add').trigger("click")
                            }
                        },
                        error: function (httpReq, status, exception) {
//                    alert(status+"-"+exception);
                            console.log(status + "-" + exception);
                            $("#modal-body-add").html();
                            campos = "<span> ERROR REFRESH THE PAGE TRY LETER </span>";
                            $("#modal-body-add").html(campos);
                        }
                    });
                    $('#add').trigger("click")
                } else if(item._type === "user"){
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
                                "<label for=\"email\">username: " + user.username + "</label>\n" +
                                // "<input type=\"text\" class=\"form-control\" id=\"email\" placeholder=\"\">\n" +
                                "</fieldset>\n" +
                                "<br>\n" +
                                "<fieldset class=\"form-group floating-label-form-group\">\n" +
                                "<label for=\"title\">" + "paquete: " + user.paquete + "</label>\n" +
                                // "<input type=\"password\" class=\"form-control\" id=\"title\" placeholder=\"Password\">\n" +
                                "</fieldset>\n" +
                                "<br>\n" +
                                "<fieldset class=\"form-group floating-label-form-group\">\n" +
                                "<label for=\"title1\">dato extra: " + user.algo + "</label>\n" +
                                // "<textarea class=\"form-control\" id=\"title1\" rows=\"3\" placeholder=\"Description\"></textarea>\n" +
                                "</fieldset>";
                            $("#modal-body").html(campos);
                            $('#boton').trigger("click")
                        },
                        error: function (httpReq, status, exception) {
//                    alert(status+"-"+exception);
                            console.log(status + "-" + exception);
                        }
                    });
                }else{
                    alert("cargar siguiente arbol");
                }
            }
        });
    }
}

class event {

    eventAdd(result) {

    }

}
