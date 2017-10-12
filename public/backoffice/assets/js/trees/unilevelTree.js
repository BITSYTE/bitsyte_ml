class UnilevelTree {

    constructor( images, canvas) {
        // this._context = "";
        this._images = images;
        this._band = false;
        //------------------------------------------
        /*this._context.font = "15px Verdana";
        this._context.lineWidth = 2;
        this._context.fillStyle = "white";*/
        //------------------------------------------
        this._posInicial = {x: canvas.width / 2 - 90, y: 20};
        this._nodeDimension = {w: 180, h: 50};
        this._nodesPos = [];
        // this._linesDraw = new LinesNode(this._context, {x: this._posInicial.x, y: this._posInicial.y + 25});
    }

    set SetCanvas(lvl1){
        this._posInicial = {x: lvl1.width / 2 - 90, y: 20};
    }

    SetContext(lvlContext) {
        this._context = lvlContext;
        this._context.font = "15px Verdana";
        this._context.lineWidth = 2;
        this._context.fillStyle = "white";
        this._linesDraw = new LinesNode(this._context, {x: this._posInicial.x, y: this._posInicial.y + 25});
    }

    initDraw(json) {

        // SetPosition()={x:this._posInicial.x,y:this._posInicial.y+25};
        // this._posInicial = {x:this._posInicial.x,y:this._posInicial.y+25};
        console.log("lvl2 inicio");

        // this._lvl2.clearRect(0, 0, 600, 1500);
        this._nodesPos = [];
        console.log(this._nodesPos);
        for (let k in json) {
            let nombre = "tNode" + k;
            console.log(json[k]["username"]);
            nombre = new TreeNode(this._context, this._posInicial, "user");
            // CREA EL NODO
            nombre.createNode();
            nombre.drawUserName(json[k]["username"]);
            nombre.drawPaquete(this._images.paquetes.gold);
            nombre.drawIconInfo(this._images.iconInfo);

            this._linesDraw.beeline(this._context,{x: 0, y: this._posInicial.y + 25}, {x: this._posInicial, y: this._posInicial.y + 25});        //DIBUJA LA LINEA
            this._nodesPos.push(nombre);        // GUARDA LOS NODOS EN ARRAY
            //REGRESA A LA POSICION INICIAL
            this._posInicial = {x: this._posInicial.x, y: this._posInicial.y + 80};

        }

        this._posInicial = {x: lvl2.width / 2 - 90, y: 20};
        console.log(this._nodesPos);
        console.log("lvl2 termino");
    }

    getArrayNodes() {
        return this._nodesPos;
    }

    getContext() {
        return this._context;
    }

    ajusta2(xx, yy) {
        var posCanvas = lvl2.getBoundingClientRect();
        var x = xx - posCanvas.left;
        var y = yy - posCanvas.top;
        return {x: x, y: y}
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
                    this._linesDraw.beeline(lvl, {x:item._position.x+180,y:item._position.y+25},{x:lvl2.width , y:item._position.y+25},'#2196F3');
                    this._linesDraw.beeline(lvl, {x:lvl2.width,y:0},{x:lvl2.width , y:lvl2.height},'#2196F3');
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
        // context.clearRect(0, 0, canvas.width, canvas.height);
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
