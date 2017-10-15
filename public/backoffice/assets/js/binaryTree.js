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
            {id: "0,1", x: canvas.width / 2 - 90, y: 50, hl: "1,1", hr: "1,2"},
            {id: "1,1", x: canvas.width / 4 - 80, y: 150, hl: "2,1", hr: "2,2"},
            {id: "1,2", x: canvas.width / 4 * 3 - 80, y: 150, hl: "2,3", hr: "2,4"},
            {id: "2,1", x: canvas.width / 8 - 80, y: 250, hl: "3,1", hr: "3,2"},
            {id: "2,2", x: canvas.width / 8 * 3 - 80, y: 250, hl: "3,3", hr: "3,4"},
            {id: "2,3", x: canvas.width / 8 * 5 - 80, y: 250, hl: "3,5", hr: "3,6"},
            {id: "2,4", x: canvas.width / 8 * 7 - 80, y: 250, hl: "3,7", hr: "3,8"},
            {id: "3,1", x: 0, y: 340, hl: "no", hr: "no"},
            {id: "3,2", x: canvas.width / 8 + 5, y: 340, hl: "no", hr: "no"},
            {id: "3,3", x: canvas.width / 8 * 2 + 5, y: 350, hl: "no", hr: "no"},
            {id: "3,4", x: canvas.width / 8 * 3 + 5, y: 350, hl: "no", hr: "no"},
            {id: "3,5", x: canvas.width / 8 * 4 + 5, y: 350, hl: "no", hr: "no"},
            {id: "3,6", x: canvas.width / 8 * 5 + 5, y: 350, hl: "no", hr: "no"},
            {id: "3,7", x: canvas.width / 8 * 6 + 5, y: 350, hl: "no", hr: "no"},
            {id: "3,8", x: canvas.width / 8 * 7 + 5, y: 350, hl: "no", hr: "no"}
        ];
        this._nodesPos = [];
    }

    getArrayNodes() {
        return this._nodesPos;
    }
    getContext() {
        return this._context;
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

        for (let k in users) {
            // console.log("indice =" + k, "position =" + users[k]["position"]);
            let nombre = "tNode" + k;                 // CREA EL NOMBRE DEL OBJETO
            /******          se crea el objeto.       ****/
            nombre = new TreeNode(this._context, this._posInicial, users[k]["type"], users[k]["paquete"]);

            let asdpos = users[k]["position"][0] + "," + users[k]["position"][1];
            let pos = this._posiciones[asdpos];    // se obtiene la posicion del nodo
            //se checa si el nodo es de nivel 4 para cambiar el tipo de linea
            if (pos["hl"] !== "no" && users[k]["type"] === "user") {
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
        console.log(this._nodesPos);
    }

    fillOut(users) {
        let nodes = this._posiciones2;

        console.log("nodes");
        console.log(nodes);
        for (let k in users) {
            let asdpos = users[k]["position"][0] + "," + users[k]["position"][1];
            // console.log(asdpos);
            // console.log("nodes entre");
            // console.log(pos);
            for (let i in this._posiciones2) {
                // console.log(this._posiciones2[i]);
                if (this._posiciones2[i]['id'] === asdpos + "") {
                    // console.log("entro if");
                    nodes.splice(i, 1);
                }
            }
        }
        console.log("nodes despues");
        console.log(nodes);
        // console.log(users);

        /// QUITA LOS EXEDENTES DE NODOS VACIOS
        console.log("rellenar");
        let nodes2 = nodes;
        for (let k in nodes) {
            console.log(nodes[k]["hl"]);
            if (nodes[k]["hl"] === "no") {
                console.log("no agrega nada");
                // users.push({"username": "add user", "paquete": "none", "type": "add", "position": nodes[k]['id']});
            } else {
                // json += {id: nodes[k]["hl"]}+",";
                // json += {id: nodes[k]["hl"]}+",";
                console.log("nodes 2 intermedio");
                // console.log(nodes2.findIndex(obj => obj['id'] === nodes[k]['hl']));
                let lado1 = nodes2.findIndex(obj => obj['id'] === nodes[k]['hl']);
                nodes2.splice(lado1, 1);
                // console.log(nodes2.findIndex(obj => obj['id'] === nodes[k]['hr']));
                let lado2 = nodes2.findIndex(obj => obj['id'] === nodes[k]['hr']);
                nodes2.splice(lado2, 1);
                // console.log(json);
            }
        }
        console.log("nodes 2 ");
        console.log(nodes2);

        ///AGREGA LOS NODOS ADD AL ARRAY USER
        for (let k in nodes2) {
            console.log(nodes2[k]['id']);
            let indice = nodes2[k]['id'].split(",");
            console.log(indice);
            users.push({"username": "add user", "paquete": "none", "type": "add", "position": indice});
        }
        console.log(users);

        this.initTree(users);

    }

    remove(array, key, value) {
        // console.log(array.findIndex(obj => obj[key] === value);
        const index = array.findIndex(obj => obj[key] === value);
        console.log(index);
        return index >= 0 ? [
            array.slice(0, index),
            array.slice(index + 1)
        ] : this;
    }


}

