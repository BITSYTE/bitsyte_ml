class UnilevelTree {

    constructor( images, lvl1) {
        // this._context = ctx;
        this._images = images;
        this._band = false;
        //------------------------------------------
        /*this._context.font = "15px Verdana";
        this._context.lineWidth = 2;
        this._context.fillStyle = "white";*/
        //------------------------------------------
        this._posInicial = {x: lvl1.width / 2 - 90, y: 20};
        this._nodeDimension = {w: 180, h: 50};
        this._nodeSmall = {w: 150, h: 50, fondo: "rgba(33,150,243,1)"};
        /*this._posiciones = {
            "1,1": {x: lvl1.width / 2 - 90, y: 50, hl: "2,1", hr: "2,2"},
            "2,1": {x: lvl1.width / 4 - 80, y: 150, hl: "3,1", hr: "3,2"},
            "2,2": {x: lvl1.width / 4 * 3 - 80, y: 150, hl: "3,3", hr: "3,4"},
        };*/
        this._nodesPos = [];
        this._nodesLvl3 = [];
        // this._linesDraw = new LinesNode(this._context, {x: this._posInicial.x, y: this._posInicial.y + 25});
    }

    set SetCanvas(lvl1){
        this._posInicial = {x: lvl1.width / 2 - 90, y: 20};
    }
    set SetLvl1(lvl) {
        this._lvl1Context = lvl;
        this._lvl1Context.font = "15px Verdana";
        this._lvl1Context.lineWidth = 2;
        this._lvl1Context.fillStyle = "white";
        this._linesDraw = new LinesNode(this._lvl1, {x: this._posInicial.x, y: this._posInicial.y + 25});
    }
    SetLvl2(lvlContext,canvas) {
        this._lvl2Context = lvlContext;
        this._lvl2Context.font = "15px Verdana";
        this._lvl2Context.lineWidth = 2;
        this._lvl2Context.fillStyle = "white";
        this._lvl2posInicial = {x: canvas.width / 2 - 90, y: 20};
        this._linesDraw = new LinesNode(this._lvl2, {x: this._posInicial.x, y: this._posInicial.y + 25});
    }
    SetLvl3(lvlContext,canvas) {
        this._lvl3Context = lvlContext;
        this._lvl3Context.font = "15px Verdana";
        this._lvl3Context.lineWidth = 2;
        this._lvl3Context.fillStyle = "white";
        this._lvl3posInicial = {x: lvl3.width / 2 - 90, y: 20};
    }

    lvl1(context,json) {
        // var linesDrawR = new LinesNode(this._context, this._posInicial);
        var linesDraw = new LinesNode(context, {x: this._posInicial.x, y: this._posInicial.y + 25});
        if (user !== json[0]["username"]) {
            var lvl1_1 = new TreeNode(context, {x: lvl1.width / 2 - 90, y: 60}, "root");
            // console.log("draw padre");
            // lvl1_1.SetPosition = this._posInicial;
            lvl1_1.createNode();
            lvl1_1.drawUserName(user);
            lvl1_1.drawPaquete(this._images.paquetes.silver);
            lvl1_1.drawIconInfo(this._images.iconInfo);
            // console.log(lvl1.width /2-90);
            // lvl1_1.drawLineRoot(this._posInicial, {x:this._posInicial.x,y:lvl1.height /2});
            linesDraw.LineRootU(this._posInicial, {x: this._posInicial.x, y: lvl1.height / 2 - 75});
            // this._nodesPos.push(lvl1-1);
        }

        var lvl1_2 = new TreeNode(context, this._posInicial, "user");
        this._posInicial = {x: this._posInicial.x, y: lvl1.height / 2 - 45};
        lvl1_2.SetPosition = this._posInicial;
        lvl1_2.createNode();
        lvl1_2.drawUserName(user);
        lvl1_2.drawPaquete(this._images.paquetes.gold);
        lvl1_2.drawIconInfo(this._images.iconInfo);

        linesDraw.beeline(context,{x: lvl1.width / 2 + 90, y: lvl1.height / 2 - 20}, {x: lvl1.width, y: lvl1.height / 2 - 20});
        // this._nodesPos.push(lvl1-2);

    }

    lvl2(context,json) {
        this._lvl2posInicial = {x: lvl2.width / 2 - 90, y: 25};
        var linesDraw = new LinesNode(context, this._lvl2posInicial);
        // SetPosition()={x:this._posInicial.x,y:this._posInicial.y+25};
        // this._posInicial = {x:this._posInicial.x,y:this._posInicial.y+25};
        console.log("lvl2 inicio");

        // this._lvl2.clearRect(300, 0, 600, 1500);
        this._nodesPos = [];
        console.log(json);
        for (let k in json) {
            let nombre = "tNode" + k;
            console.log(json[k]["username"]);
            nombre = new TreeNode(context, this._lvl2posInicial, "user");
            // nombre.SetPosition = this._lvl2posInicial;
            nombre.createNode();
            nombre.drawUserName(json[k]["username"]);
            nombre.drawPaquete(this._images.paquetes.gold);
            nombre.drawIconInfo(this._images.iconInfo);

            linesDraw.beeline(context,{x: 0, y: this._lvl2posInicial.y + 25}, {x: lvl2.width / 2 - 80, y: this._lvl2posInicial.y + 25});
            this._nodesPos.push(nombre);
            this._lvl2posInicial = {x: this._lvl2posInicial.x, y: this._lvl2posInicial.y + 80};

        }
        this._posInicial = {x: lvl2.width / 2 - 90, y: 20};
        console.log(this._nodesPos);
        console.log("lvl2 termino");
    }

    lvl3(context,json2) {
        this._lvl3posInicial = {x: lvl2.width / 2 - 90, y: 25};
        var linesDraw = new LinesNode(context, this._lvl2posInicial);

        for (let k in json2) {
            let nombre = "tNode" + k;
            nombre = new TreeNode(context, this._lvl3posInicial, "user");

            // nombre.SetPosition = this._posInicial;
            console.log(this._lvl3posInicial);
            nombre.createNode();
            nombre.drawUserName(json2[k]["username"]);
            nombre.drawPaquete(this._images.paquetes.gold);
            nombre.drawIconInfo(this._images.iconInfo);
            // console.log(lvl1.width /2-90);
            // this._linesDraw.beeline(this._lvl3,{x: lvl3.width / 2-90, y: lvl3.height /2-20},{x:lvl3.width,y:lvl3.height /2-20});
            linesDraw.beeline(context,{x: 0, y: this._lvl3posInicial.y + 25}, {x: lvl3.width / 2 - 80, y: this._lvl3posInicial.y + 25});
            // this._nodesLvl3.push(nombre);
            this._lvl3posInicial = {x: this._lvl3posInicial.x, y: this._lvl3posInicial.y + 80};
        }

        this._posInicial = {x: lvl1.width / 2 - 90, y: 20};
        console.log("lvl3 termino");
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

    selecciona2(e,context) {
        // console.log(lvl);
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
                    // this._context.save();
                    this.desactivateScroll();
                    // this._linesDraw.beeline(context, {x:item._position.x+180,y:item._position.y+25},{x:lvl2.width , y:item._position.y+25},'#2196F3');
                    // this._linesDraw.beeline(context, {x:lvl2.width,y:0},{x:lvl2.width , y:lvl2.height},'#2196F3');
                }else {
                    this._band = false;
                    // this._context.restore();
                    this.activeScroll();
                    // this._linesDraw.beeline({x:item._position.x+180,y:item._position.y+25},{x:lvl2.width , y:item._position.y+25},'#FFFFFF');
                    // this._linesDraw.beeline({x:lvl2.width,y:0},{x:lvl2.width , y:lvl2.height},'#FFFFFF');
                }
                // console.log($("#boton").click());
                // this.lvl3(json);
            }
        }.bind(this));
    }

    selecciona(e,lvl) {
        lvl = this.getLVL(lvl);
        // console.log(lvl);
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
                    // this._context.save();
                    this.desactivateScroll();
                    // this._linesDraw.beeline(lvl, {x:item._position.x+180,y:item._position.y+25},{x:lvl2.width , y:item._position.y+25},'#2196F3');
                    // this._linesDraw.beeline(lvl, {x:lvl2.width,y:0},{x:lvl2.width , y:lvl2.height},'#2196F3');
                }else {
                    this._band = false;
                    // this._context.restore();
                    this.activeScroll();
                    // this._linesDraw.beeline({x:item._position.x+180,y:item._position.y+25},{x:lvl2.width , y:item._position.y+25},'#FFFFFF');
                    // this._linesDraw.beeline({x:lvl2.width,y:0},{x:lvl2.width , y:lvl2.height},'#FFFFFF');
                }
                // console.log($("#boton").click());
                // this.lvl3(json);
            }
        }.bind(this));
    }

    activeScroll() {
        this.lvl2(json);
        $('.easyScroll_scroll_vertical').css('visibility', 'visible');
    }

    desactivateScroll() {
        $('.easyScroll_scroll_vertical').css('visibility', 'hidden');
        // console.log('lvl3');
        this.lvl3(json2);
        // $('#wrap2').css('border-right', '3px solid');
    }

    getLVL(lvl){
        if(lvl === "lvl2"){
            return this._lvl2Context;
        }else {
            return this._lvl3Context;
        }
    }

}

/*function activeScroll(context,lvl) {
    context.clearRect(0, 0, lvl.width, lvl.height);
    lvl2(json);
    $('.easyScroll_scroll_vertical').css('visibility', 'visible');
    // $('#wrap2').css('border-right', 'none');
}*/

function desactivScroll() {
    $('.easyScroll_scroll_vertical').css('visibility', 'hidden');

    // $('#wrap2').css('border-right', '3px solid');
}
