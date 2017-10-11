class UnilevelTree {

    constructor(ctx, images) {
        this._context = ctx;
        this._images = images;
        //------------------------------------------
        this._context.font = "15px Verdana";
        this._context.lineWidth = 2;
        this._context.fillStyle = "white";
        //------------------------------------------
        this._posInicial = {x: lvl1.width / 2-90, y: 20};
        this._nodeDimension = {w: 180, h: 50};
        this._nodeSmall = {w: 150, h: 50, fondo: "rgba(33,150,243,1)"};
        this._posiciones = {
            "1,1": {x: lvl1.width / 2 - 90, y: 50, hl: "2,1", hr: "2,2"},
            "2,1": {x: lvl1.width / 4 - 80, y: 150, hl: "3,1", hr: "3,2"},
            "2,2": {x: lvl1.width / 4 * 3 - 80, y: 150, hl: "3,3", hr: "3,4"},
        };
        this._nodesPos = [];
    }

    initTree(json) {
        this._nodesPos = [];
        var dimensions = {x: 0, d: 0};
        let paquete = this._paquete;
        let icon = this._icon;

        this.lvl1(dimensions);


        console.log(this._nodesPos);
    }

    lvl1(){
        var linesDraw = new LinesNode(this._context,this._posInicial);

        if (user !== json[0]["username"]) {
            var lvl1_1 = new TreeNode(this._context, {x: lvl1.width / 2-90, y: 60}, "root");
            // console.log("draw padre");
            // lvl1_1.SetPosition = this._posInicial;
            lvl1_1.createNode();
            lvl1_1.drawUserName(user);
            lvl1_1.drawPaquete(this._images.paquetes.silver);
            lvl1_1.drawIconInfo(this._images.iconInfo);
            // console.log(lvl1.width /2-90);
            // lvl1_1.drawLineRoot(this._posInicial, {x:this._posInicial.x,y:lvl1.height /2});
            linesDraw.LineRootU(this._posInicial, {x:this._posInicial.x,y:lvl1.height /2-75});
            this._nodesPos.push(lvl1-1);
        }

        var lvl1_2 = new TreeNode(this._context, this._posInicial, "user");
        // console.log("draw padre");
        this._posInicial = {x:this._posInicial.x,y:lvl1.height /2-45};
        lvl1_2.SetPosition = this._posInicial;
        console.log(this._posInicial);
        lvl1_2.createNode();
        lvl1_2.drawUserName(user);
        lvl1_2.drawPaquete(this._images.paquetes.gold);
        lvl1_2.drawIconInfo(this._images.iconInfo);
        console.log(lvl1.width /2-90);
        linesDraw.beeline({x: lvl1.width / 2+90, y: lvl1.height /2-20},{x:lvl1.width,y:lvl1.height /2-20});
        this._nodesPos.push(lvl1-2);

    }

    lvl2(json){
        var linesDraw = new LinesNode(this._context,{x:this._posInicial.x,y:this._posInicial.y+25});
        // SetPosition()={x:this._posInicial.x,y:this._posInicial.y+25};
        // this._posInicial = {x:this._posInicial.x,y:this._posInicial.y+25};
        for (let k in json) {
            let nombre = "tNode" + k;
            nombre = new TreeNode(this._context, this._posInicial, "user");
            console.log();
            nombre.SetPosition = this._posInicial;
            console.log(this._posInicial);
            nombre.createNode();
            nombre.drawUserName(user);
            nombre.drawPaquete(this._images.paquetes.gold);
            nombre.drawIconInfo(this._images.iconInfo);

            linesDraw
            linesDraw.beeline({x: 0, y: this._posInicial.y+25},{x:lvl2.width / 2-80,y:this._posInicial.y+25});
            this._nodesPos.push(lvl1-2);
            this._posInicial = {x:this._posInicial.x,y:this._posInicial.y+80};

        }
    }

    lvl3(json){
        var linesDraw = new LinesNode(this._context,this._posInicial);

        for (let k in json) {
            let nombre = "tNode" + k;
            nombre = new TreeNode(this._context, this._posInicial, "user");
            console.log();
            nombre.SetPosition = this._posInicial;
            console.log(this._posInicial);
            nombre.createNode();
            nombre.drawUserName(user);
            nombre.drawPaquete(this._images.paquetes.gold);
            nombre.drawIconInfo(this._images.iconInfo);
            // console.log(lvl1.width /2-90);
            // linesDraw.beeline({x: lvl1.width / 2+90, y: lvl1.height /2-20},{x:lvl1.width,y:lvl1.height /2-20});
            this._nodesPos.push(lvl1-2);
            this._posInicial = {x:this._posInicial.x,y:this._posInicial.y+80};
        }
    }


    getarrayNodes() {
        return this._nodesPos;
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
