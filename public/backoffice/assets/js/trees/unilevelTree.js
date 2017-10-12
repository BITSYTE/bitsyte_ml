class UnilevelTree {

    constructor( images, canvas) {
        // this._context = "";
        this._images = images;
        this._band = false;
        //------------------------------------------
        this._posInicial = {x: canvas.width / 2 - 90, y: 20};
        this._nodeDimension = {w: 180, h: 50};
        this._nodesPos = [];
        // this._linesDraw = new LinesNode(this._context, {x: this._posInicial.x, y: this._posInicial.y + 25});
    }

    SetContext(lvlContext) {
        this._context = lvlContext;
        this._context.font = "15px Verdana";
        this._context.lineWidth = 2;
        this._context.fillStyle = "white";
        this._linesDraw = new LinesNode(this._context, {x: this._posInicial.x, y: this._posInicial.y + 25});
    }

    initDraw(json) {
        console.log("lvl2 inicio");

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

    root(json) {

        if (user !== json[0]["username"]) {
            var lvl1_1 = new TreeNode(this._context, {x: this._posInicial.x, y: 60}, "root");

            lvl1_1.createNode();
            lvl1_1.drawUserName(user);
            lvl1_1.drawPaquete(this._images.paquetes.silver);
            lvl1_1.drawIconInfo(this._images.iconInfo);

            this._linesDraw.LineRootU(this._posInicial, {x: this._posInicial.x, y: lvl1.height / 2 - 75});
            this._nodesPos.push(lvl1_1);
        }

        var lvl1_2 = new TreeNode(this._context, this._posInicial, "user");
        this._posInicial = {x: this._posInicial.x, y: lvl1.height / 2 - 45};
        lvl1_2.SetPosition = this._posInicial;
        lvl1_2.createNode();
        lvl1_2.drawUserName(user);
        lvl1_2.drawPaquete(this._images.paquetes.gold);
        lvl1_2.drawIconInfo(this._images.iconInfo);

        this._linesDraw.SetDash=[];
        this._linesDraw.beeline(this._context,{x: lvl1.width / 2 + 90, y: lvl1.height / 2 - 20}, {x: lvl1.width, y: lvl1.height / 2 - 20});
        this._nodesPos.push(lvl1_2);

    }

    getArrayNodes() {
        return this._nodesPos;
    }

    getContext() {
        return this._context;
    }

}


