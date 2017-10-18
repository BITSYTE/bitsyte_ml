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

    initDraw(users) {
        console.log("lvl iniciado");

        this._nodesPos = [];
        console.log(this._nodesPos);
        for (let k in users) {
            let nombre = "tNode" + k;
            console.log(users[k]["username"]);
            nombre = new TreeNode(this._context, this._posInicial, "user");
            // CREA EL NODO
            nombre.createNode();
            nombre.SetUuid=users[k]["uuid"];
            nombre.drawUserName(users[k]["username"]);
            nombre.drawPaquete(users[k]["img"]);
            nombre.drawIconInfo(this._images.iconInfo);

            this._linesDraw.beeline(this._context,{x: 0, y: this._posInicial.y + 25}, {x: this._posInicial.x, y: this._posInicial.y + 25});        //DIBUJA LA LINEA
            this._nodesPos.push(nombre);        // GUARDA LOS NODOS EN ARRAY
            //REGRESA A LA POSICION INICIAL
            this._posInicial = {x: this._posInicial.x, y: this._posInicial.y + 80};
        }

        this._posInicial = {x: lvl2.width / 2 - 90, y: 20};
        console.log(this._nodesPos);
        console.log("lvl2 termino");
    }

    root(users) {
        console.log("root");
        console.log(users[0]["img"]);
        if (user !== users[0]["uuid"]) {
            var lvl1_1 = new TreeNode(this._context, {x: this._posInicial.x, y: 60}, "root");

            lvl1_1.createNode();
            lvl1_1.SetUuid=user;
            lvl1_1.drawUserName(user_name);
            lvl1_1.drawPaquete(users[0]["img"]);
            lvl1_1.drawIconInfo(this._images.iconInfo);

            this._linesDraw.LineRootU(this._posInicial, {x: this._posInicial.x, y: lvl1.height / 2 - 75});
            this._nodesPos.push(lvl1_1);
        }

        var lvl1_2 = new TreeNode(this._context, this._posInicial, "user");
        this._posInicial = {x: this._posInicial.x, y: lvl1.height / 2 - 45};
        lvl1_2.SetPosition = this._posInicial;
        lvl1_2.createNode();
        lvl1_2.SetUuid=users[0]["uuid"];
        lvl1_2.drawUserName(users[0]["username"]);
        lvl1_2.drawPaquete(users[0]["img"]);
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


