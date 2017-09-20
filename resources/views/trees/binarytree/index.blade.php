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
        <div class="card-header">
            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <canvas id="miCanvas" width="1200" height="600">
                        Tu navegador no soporta el canvas de HTML5
                    </canvas>
                </div>
            </div>
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
                    var raiz = {fondo: "rgba(19,52,149,1)"};
                    var lvl1 = {fondo: "rgba(0,94,212,1)"};
                    var lvl2 = {fondo: "rgba(19,52,149,1)"};
                    var lvl3 = {fondo: "rgba(19,52,149,1)"};
                    var add = {fondo: "rgba(19,52,149,1)"};
                    var posInicial = {x: canvas.width / 2 - 90, y: 30};
                    var rectangulo = {largo: 180, alto: 50};
                    var json = {
                        "users": [
                            {"nombre": "asdru", "paquete": "gold", "id": "1", "padre": "0"},
                            {"nombre": "John", "paquete": "gold", "id": "2", "padre": "1"},
                            {"nombre": "jose", "paquete": "gold", "id": "2", "padre": "1"}
                        ]
                    };
                    console.log(json);

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

                    function limpiar() {
//                        var w = imagen.width;
//                        var h = imagen.height;
                        ctx.clearRect(250, 10, w, h);
                    }

                    var paquete = "{{asset('backoffice/images/circulo1.png')}}";
                    var icon = "{{asset('backoffice/images/icons/info-ico-azul.png')}}";

                    pintaGrid(20, 20, "gray");
                    /******************************/
                    var arbol = new BinaryTree(ctx);
                    /*arbol.createNode(posInicial.x, posInicial.y, raiz.fondo, paquete, icon, ctx);
                    arbol.lineLeft(posInicial.x, posInicial.y);
                    arbol.lineRight(posInicial.x, posInicial.y);*/

                    var x = posInicial.x;
                    var y = posInicial.y;
                    var nivel;
                    var posL;
                    var posR;
                    var cambio = false;
                    /*******************CREANDO NODO RAIZ****************************/
                    /*ctx.fillStyle = "rgba(19,52,149,1)";
                    ctx.fillRect(x,y,this.rectangulo.largo, this.rectangulo.alto);
                    this.pinta(paquete,icon,ctx,x,y);
                    ctx.font = "15px Verdana";
                    ctx.lineWidth = 2;
                    ctx.fillStyle = "white";
                    ctx.fillText("user name",x+52,y+25);*/

                    for (var k in json['users']) {
                        console.log("empieza");
                        console.log(k, json['users'][k]['padre']);
                        console.log("x = " + x);
                        if (json['users'][k]['padre'] == 0) {
                            console.log('/');
                            arbol.createNode(posInicial.x, posInicial.y, raiz.fondo, paquete, icon, ctx);
                            posL = arbol.lineLeft(posInicial.x, posInicial.y);
                            posR = arbol.lineRight(posInicial.x, posInicial.y);
                            console.log(posL);
                            console.log(posR);
                            /*x=posL;
                            y=posR;*/
                            nivel = "lvl1";
                        } else if (nivel = "lvl1") {
                            if (cambio){
                                console.log("true");
                                x = posR.x;
                                y = posR.y;
                            }else{
                                console.log("false");
                                x = posL.x;
                                y = posL.y;
                                cambio= true;
                            }

                            if (k > k + 2) {
                                nivel = "lvl2";
                                console.log(lvl2);
                            } else {
                                console.log("lvl1");
                                arbol.createNodeHijo(x, y, lvl1.fondo, paquete, icon, ctx);
//                                arbol.lineLeft(x, y);
//                                arbol.lineRight(x, y);
                            }
                        }

                    }
                    /*for (i = 0; i <= 3; i++) {
                        pinta(paquete,x,y);
                        y=y+60;
                    }*/


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
