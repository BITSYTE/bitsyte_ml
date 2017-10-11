class UnilevelTree {

    constructor(ctx, images) {
        this._context = ctx;
        this._images = images;
        this._band = false;
        //------------------------------------------
        this._context.font = "15px Verdana";
        this._context.lineWidth = 2;
        this._context.fillStyle = "white";
        //------------------------------------------
        this._posInicial = {x: lvl1.width / 2 - 90, y: 20};
        this._nodeDimension = {w: 180, h: 50};
        this._nodeSmall = {w: 150, h: 50, fondo: "rgba(33,150,243,1)"};
        this._posiciones = {
            "1,1": {x: lvl1.width / 2 - 90, y: 50, hl: "2,1", hr: "2,2"},
            "2,1": {x: lvl1.width / 4 - 80, y: 150, hl: "3,1", hr: "3,2"},
            "2,2": {x: lvl1.width / 4 * 3 - 80, y: 150, hl: "3,3", hr: "3,4"},
        };
        this._nodesPos = [];
        this._nodesLvl3 = [];
        this._linesDraw = new LinesNode(this._context, {x: this._posInicial.x, y: this._posInicial.y + 25});
    }

    initTree(json) {
        this._nodesPos = [];
        var dimensions = {x: 0, d: 0};
        let paquete = this._paquete;
        let icon = this._icon;

        this.lvl1(dimensions);


        console.log(this._nodesPos);
    }

    lvl1() {
        var linesDrawR = new LinesNode(this._context, this._posInicial);

        if (user !== json[0]["username"]) {
            var lvl1_1 = new TreeNode(this._context, {x: lvl1.width / 2 - 90, y: 60}, "root");
            // console.log("draw padre");
            // lvl1_1.SetPosition = this._posInicial;
            lvl1_1.createNode();
            lvl1_1.drawUserName(user);
            lvl1_1.drawPaquete(this._images.paquetes.silver);
            lvl1_1.drawIconInfo(this._images.iconInfo);
            // console.log(lvl1.width /2-90);
            // lvl1_1.drawLineRoot(this._posInicial, {x:this._posInicial.x,y:lvl1.height /2});
            linesDrawR.LineRootU(this._posInicial, {x: this._posInicial.x, y: lvl1.height / 2 - 75});
            // this._nodesPos.push(lvl1-1);
        }

        var lvl1_2 = new TreeNode(this._context, this._posInicial, "user");
        this._posInicial = {x: this._posInicial.x, y: lvl1.height / 2 - 45};
        lvl1_2.SetPosition = this._posInicial;
        lvl1_2.createNode();
        lvl1_2.drawUserName(user);
        lvl1_2.drawPaquete(this._images.paquetes.gold);
        lvl1_2.drawIconInfo(this._images.iconInfo);

        linesDrawR.beeline({x: lvl1.width / 2 + 90, y: lvl1.height / 2 - 20}, {x: lvl1.width, y: lvl1.height / 2 - 20});
        // this._nodesPos.push(lvl1-2);

    }

    lvl2(json) {

        // SetPosition()={x:this._posInicial.x,y:this._posInicial.y+25};
        // this._posInicial = {x:this._posInicial.x,y:this._posInicial.y+25};
        for (let k in json) {
            let nombre = "tNode" + k;

            nombre = new TreeNode(this._context, this._posInicial, "user");
            nombre.SetPosition = this._posInicial;
            nombre.createNode();
            nombre.drawUserName(user);
            nombre.drawPaquete(this._images.paquetes.gold);
            nombre.drawIconInfo(this._images.iconInfo);

            this._linesDraw.beeline({x: 0, y: this._posInicial.y + 25}, {x: lvl2.width / 2 - 80, y: this._posInicial.y + 25});
            this._nodesPos.push(nombre);
            this._posInicial = {x: this._posInicial.x, y: this._posInicial.y + 80};

        }
        // console.log(this._nodesPos);
        /*this._nodesPos.map(function (item){
            console.log(item);
        });*/
    }

    lvl3(json) {
        var linesDraw3 = new LinesNode(this._context, this._posInicial);

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
            this._nodesLvl3.push(nombre);
            this._posInicial = {x: this._posInicial.x, y: this._posInicial.y + 80};
        }
    }


    getarrayNodes() {
        return this._nodesPos;
    }

    ajusta2(xx, yy) {
        var posCanvas = lvl2.getBoundingClientRect();
        var x = xx - posCanvas.left;
        var y = yy - posCanvas.top;
        return {x: x, y: y}
    }

    selecciona(e) {
        let pos = this.ajusta2(e.clientX, e.clientY);
        console.log(pos);
        this._nodesPos.map(function (item) {
            // console.log(item);
            console.log("map");
            if (pos.x > item._position.x && pos.x < item._position.x + 180 && pos.y > item._position.y && pos.y < item._position.y + 50) {
                console.log("click en nodo");
                console.log(item);
                // IF BAND IS FALSE NO NODE SELECTED AND CHARGE YOUR CHILDS
                if(this._band === false){
                    this._band = true;
                    this._context.save();
                    desactivScroll();
                    this._linesDraw.beeline({x:item._position.x+180,y:item._position.y+25},{x:lvl2.width , y:item._position.y+25},'#2196F3');
                    this._linesDraw.beeline({x:lvl2.width,y:0},{x:lvl2.width , y:lvl2.height},'#2196F3');

                }else {
                    this._band = false;
                    this._context.restore();
                    activeScroll();
                    // this._linesDraw.beeline({x:item._position.x+180,y:item._position.y+25},{x:lvl2.width , y:item._position.y+25},'#FFFFFF');
                    // this._linesDraw.beeline({x:lvl2.width,y:0},{x:lvl2.width , y:lvl2.height},'#FFFFFF');
                }


                // console.log($("#boton").click());
                // this.lvl3(json);
            }
        }.bind(this));
    }
}

function activeScroll() {
    $('.easyScroll_scroll_vertical').css('visibility', 'visible');
    // $('#wrap2').css('border-right', 'none');
}

function desactivScroll() {
    $('.easyScroll_scroll_vertical').css('visibility', 'hidden');
    // $('#wrap2').css('border-right', '3px solid');
}
