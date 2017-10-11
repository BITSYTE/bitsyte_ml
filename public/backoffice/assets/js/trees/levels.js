
class lvl1 {

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

    init(){

    }
}

class lvl2 {
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
}

class lvl3 {
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
}