@extends('layouts.main')

@section('head')
    <style>
        #miCanvas {
            background: #eaeaea;
            border: solid red 3px;
        }
    </style>
@endsection
@section('breadcrumbs')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-2">
            <h3 class="content-header-title mb-0">Binary Tree</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Trees</a></li>
                        @include('layouts.partial.breadcrumbs')
                    </ol>
                </div>
            </div>
        </div>
        <div id="bred-graph" class="content-header-right col-md-6 col-xs-12">
            <div class="media width-250 float-xs-right">
                <div class="media-left media-middle">
                    <div id="sp-bar-total-sales"></div>
                </div>
                <div class="media-body media-right text-xs-right">
                    <h3 class="m-0">$5,668</h3><span class="text-muted">Balance</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row match-height">
        <div class="card-header col-xs-1 col-sm-1 col-md-12 col-lg-12 col-xl-12" style="padding: 6px!important;">
            {{--<div class=" col-xs-12 col-sm-12 ">--}}
                {{--<div class="card">--}}
                    <canvas id="miCanvas" width="1240" height="600">
                        Tu navegador no soporta el canvas de HTML5
                    </canvas>
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('backoffice/assets/js/binaryTree.js') }}"></script>
    <script>
        window.onload = function () {
            var canvas = document.getElementById("miCanvas");
            if (canvas && canvas.getContext) {
                var ctx = canvas.getContext("2d");
                if (ctx) {
                    console.log(canvas.width);
                    console.log(canvas.width / 2);
                    /****************
                     VARIABLES
                     *****************/
                    var i;
//                    var raiz = {fondo: "rgba(33,150,243,1)"};
                    var lvl1 = 1;
                    var lvl2 = 3;
                    var lvl3 = 7;
                    var add = {fondo: "rgba(19,52,149,1)"};
                    var posInicial = {x: canvas.width / 2 - 90, y: 30};
                    console.log(posInicial);
                    var rectangulo = {largo: 180, alto: 50, fondo: "rgba(33,150,243,1)"};
                    var json = {
                        "padre": [
                            {"nombre": "asdru", "paquete": "gold", "id": "1", "padre": "0"}
                        ],
                        users: [
                            {"nombre": "John", "paquete": "gold", "id": "2", "padre": "1", "pos":"L"},
                            {"nombre": "jose", "paquete": "gold", "id": "3", "padre": "1", "pos":"R"},
                            {"nombre": "jose", "paquete": "gold", "id": "4", "padre": "2", "pos":"L"},
                            {"nombre": "jose", "paquete": "gold", "id": "5", "padre": "2", "pos":"R"},
                            {"nombre": "jose", "paquete": "gold", "id": "6", "padre": "4", "pos":"R"}
                        ]
                    };
                    console.log(json["users"]);
                    var location = {
                        lvl2:[
                            {pos:"L",x:233,y:200}
                        ]
                    };

                    /*****************
                     FUNCIONES
                     ******************/
                    function pintaGrid(disX, disY, color) {
                        ctx.strokeStyle = color;
                        ctx.lineWidth = 0.5;

                        for (var i = disX + 0.5; i < canvas.width; i += disX) {
                            ctx.beginPath();
                            ctx.moveTo(i, 0);
                            ctx.lineTo(i, ctx.canvas.height);
                            ctx.stroke();
                        }

                        for (var i = disY + 0.5; i < canvas.height; i += disY) {
                            ctx.beginPath();
                            ctx.moveTo(0, i);
                            ctx.lineTo(ctx.canvas.width, i);
                            ctx.stroke();
                        }
                    }
                    function lado(pos) {
                        if (pos = "L") {
                            console.log("left");
                            x = posR.x;
                            y = posR.y;
                        } else {
                            console.log("right");
                            x = posL.x;
                            y = posL.y;
                        }
                    }

                    function limpiar() {
//                        var w = imagen.width;
//                        var h = imagen.height;
                        ctx.clearRect(250, 10, w, h);
                    }

                    var paquete = "{{asset('backoffice/images/circulo1.png')}}";
                    var icon = "{{asset('backoffice/images/icons/info-ico-azul.png')}}";

//                    pintaGrid(20, 20, "gray");
                    /******************************/
                    var arbol = new BinaryTree(ctx);
                    /*arbol.createNode(posInicial.x, posInicial.y, raiz.fondo, paquete, icon, ctx);
                    arbol.lineLeft(posInicial.x, posInicial.y);
                    arbol.lineRight(posInicial.x, posInicial.y);*/

                    var x = posInicial.x;
                    var y = posInicial.y;
                    var nivel;
                    var padre = "1";
                    var posL;
                    var posR;
                    var cambio = false;
                    /*******************CREANDO NODO RAIZ****************************/
                    ctx.fillStyle = rectangulo.fondo;
                    ctx.fillRect(x, y, rectangulo.largo, rectangulo.alto);
                    /***** INICIO IMAGEN.  *****/
                    var imagen = new Image();
                    var icono = new Image();
                    imagen.src = paquete;
                    icono.src = icon;
                    console.log("load");
                    imagen.onload = function () {
                        console.log("load");
                        ctx.drawImage(imagen, posInicial.x, posInicial.y);
                        ctx.drawImage(icono, posInicial.x + 140, posInicial.y + 6);
                    };
                    /***** FIN IMAGEN  *****/
                    ctx.font = "15px Verdana";
                    ctx.lineWidth = 2;
                    ctx.fillStyle = "white";
                    ctx.fillText("user name", x + 52, y + 25);
                    /***** LINEA DERECHA  ****/
                    ctx.lineWidth = 2;
                    ctx.strokeStyle = "rgba(58,150,235,1)";
                    ctx.beginPath();
                    ctx.moveTo(x + 100, y + 50);   //baja inicio
                    ctx.lineTo(x + 100, 110);   //baja final
                    ctx.lineTo(canvas.width / 4+40, 110);    //izquierda
                    ctx.quadraticCurveTo(canvas.width / 4, 110, canvas.width / 4, y + 110);
                    ctx.stroke();
                    posL = {x: x - 100, y: y + 100};
                    /***** LINEA IZQUIERDA  **************/
                    ctx.beginPath();
                    ctx.moveTo(x + 100, y + 80);   //baja final
                    ctx.lineTo(canvas.width / 4*3-40, y + 80);   //derecha
                    ctx.quadraticCurveTo(canvas.width / 4*3, y + 80, canvas.width / 4*3, y + 110);
                    ctx.stroke();
                    posR = {x: x + 300, y: y + 100};
                    /*******************FIN NODO RAIZ****************************/
                    console.log("/2="+posInicial.x/2);
                    arbol.createNode(310-80,140, rectangulo.fondo, paquete, icon, ctx);
                    arbol.lineLeft2(canvas.width / 4, 140);
                    arbol.lineRight2(310, 140);
                    arbol.createNode(310+310+310-80,140, rectangulo.fondo, paquete, icon, ctx);
                    arbol.lineLeft2(310+310+310, 140);
                    arbol.lineRight2(310+310+310, 140);

                    arbol.createNode(155-80,240, rectangulo.fondo, paquete, icon, ctx);
                    arbol.lineLeft2(155, 240);
                    arbol.lineRight2(155, 240);
                    arbol.createNode(155+155+155-80,240, rectangulo.fondo, paquete, icon, ctx);
                    arbol.lineLeft2(155+155+155, 240);
                    arbol.lineRight2(155+155+155, 240);
                    arbol.createNode(155+155+155+155+155-80,240, rectangulo.fondo, paquete, icon, ctx);
                    arbol.lineLeft2(155+155+155+155+155, 240);
                    arbol.lineRight2(155+155+155+155+155, 240);
                    arbol.createNode(155+155+155+155+155+155+155-80,240, rectangulo.fondo, paquete, icon, ctx);
                    arbol.lineLeft2(155+155+155+155+155+155+155, 240);
                    arbol.lineRight2(155+155+155+155+155+155+155, 240);


                    arbol.createNodeS(0,340, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(155,320, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(155*2,340, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(155*3,340, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(155*4,340, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(155*5,340, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(155*6,340, rectangulo.fondo, paquete, icon, ctx);
                    arbol.createNodeS(155*7,340, rectangulo.fondo, paquete, icon, ctx);
                    /*******************INICIO FOREACH DE LOS HIJOS****************************/
                    for (var k in json['users']) {
                        console.log("empieza");
                        console.log("indice =" + k, "padre =" + json['users'][k]['padre']);
//                        console.log("x = " + x);
                        if (json['users'][k]['padre'] !== padre) {
                            padre=json['users'][k]['padre'];
                            console.log("cambio de padre");
                        }/*else {
                            console.log("cambio de padre");
                        }*/
                        if (k >=1){
                            x = canvas.width / 4
                        }


                        /*if (json['users'][k]['padre'] = padre && lvl1 >= k) {
                            if (cambio) {
                                console.log("true");
                                x = posR.x;
                                y = posR.y;
                            } else {
                                console.log("false");
                                x = posL.x;
                                y = posL.y;
                                cambio = true;
                            }
                            console.log(posL);
                            if (k > k + 2) {
                                nivel = "lvl2";
                                console.log(lvl2);
                            } else {
                                console.log("lvl1");
                                arbol.createNodeHijo(x, y, rectangulo.fondo, paquete, icon, ctx);
                                arbol.lineLeft2(x, y);
                                arbol.lineRight2(x, y);
                            }
                            ctx.fillRect(x, y, 10, 10);
                        } else if (json['users'][k]['padre'] = padre && lvl2 >= k) {
                            console.log("otro");
                        }*/

                    }
//                    if (json['users'][k]['padre'] == 0) {
                    /*******************FIN FOREACH DE LOS HIJOS****************************/

                } else {
                    alert("NO cuentas con CANVAS")
                }
                ;
            }
        };
        {{--var img = "{{ asset('backoffice/images/circulo1.png') }}";--}}
        {{--window.onload = start(img);--}}
        console.log("asd2");
    </script>
@endsection
