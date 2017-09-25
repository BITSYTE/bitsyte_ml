@extends('layouts.main')

@section('head')
    <style>
        #miCanvas {
            background: #eaeaea;
            border: solid red 3px;
            margin: auto;
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
            <div class="canvas-wrapper">
                <canvas id="miCanvas" width="1310" height="500">
                    Tu navegador no soporta el canvas de HTML5
                </canvas>
            </div>
            {{--</div>--}}
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('backoffice/assets/js/binaryTree.js') }}"></script>
    <script>
        var canvas;
        var ctx;
        var info_array = new Array();

        function ajusta(xx, yy) {
            var posCanvas = canvas.getBoundingClientRect();
            var x = xx - posCanvas.left;
            var y = yy - posCanvas.top;
            return {x: x, y: y}
        }

        function selecciona(e) {
            var pos = ajusta(e.clientX, e.clientY);
            console.log(pos);
            var x = pos.x;
            var y = pos.y;
            var tecla;
            var bandera = false;
            for (var i = 0; i < info_array.length; i++) {
                tecla = info_array[i];
                if (tecla.x > 0) {
                    if ((x > tecla.x) && (x < tecla.x + tecla.ancho) && (y > tecla.y) && (y < tecla.y + tecla.alto)) {
                        break;
                    }
                }
            }
            if (i < info_array.length) {
                alert(i);
            }
        }


        window.onload = function () {
            canvas = document.getElementById("miCanvas");
            if (canvas && canvas.getContext) {
                ctx = canvas.getContext("2d");
                if (ctx) {
                    console.log(canvas.width);
                    console.log(canvas.width / 2);
                    canvas.addEventListener("click", selecciona, false);
                    /****************
                     VARIABLES
                     *****************/
                    var i;
                    var add = {fondo: "rgba(19,52,149,1)"};
                    var posInicial = {x: canvas.width / 2 - 90, y: 30};
                    var rectangulo = {largo: 180, alto: 50, fondo: "rgba(33,150,243,1)"};
                    var json = [
                        {"username": "John0", "paquete": "gold", "type": "user", "position": "1,1"},
                        {"username": "jose1", "paquete": "gold", "type": "user", "position": "2,1"},
                        {"username": "jose2", "paquete": "gold", "type": "user", "position": "2,2"},
                        {"username": "jose3", "paquete": "gold", "type": "user", "position": "3,1"},
                        {"username": "jose4", "paquete": "gold", "type": "add", "position": "3,2"},
                        {"username": "jose5", "paquete": "gold", "type": "user", "position": "3,3"},
                        {"username": "jose6", "paquete": "gold", "type": "user", "position": "3,4"},
                        {"username": "jose7", "paquete": "gold", "type": "user", "position": "4,1"},
                        {"username": "jose8", "paquete": "gold", "type": "add", "position": "4,2"},
//                        {"username": "jose9", "paquete": "gold", "type": "add", "position": "4,3"},
//                        {"username": "jose10", "paquete": "gold", "type": "add", "position": "4,4"},
                        {"username": "jose11", "paquete": "gold", "type": "add", "position": "4,5"},
                        {"username": "jose12", "paquete": "gold", "type": "user", "position": "4,6"},
                        {"username": "jose13", "paquete": "gold", "type": "add", "position": "4,7"},
                        {"username": "add User", "paquete": "gold", "type": "add", "position": "4,8"}
                    ];

                    /*var posiciones = {
                        "1,1": {x: canvas.width / 2 - 90, y: 40, hl:{x:canvas.width / 4 - 80, yf: 140},hr:{x: canvas.width / 4 * 3 - 80, y: 140}},
                        "2,1": {x: canvas.width / 4 - 80, y: 140,hl:{x: canvas.width / 8 - 80, y: 240},hr:{x: canvas.width / 8 * 3 - 80, y: 240}},
                        "2,2": {x: canvas.width / 4 * 3 - 80, y: 140,hl:{x: canvas.width / 8 * 5 - 80, y: 240},hr:{x: canvas.width / 8 * 7 - 80, y: 240}},
                        "3,1": {x: canvas.width / 8 - 80, y: 240,hl:{x: 0, y: 340},hr:{x: canvas.width / 8 + 5, y: 340}},
                        "3,2": {x: canvas.width / 8 * 3 - 80, y: 240,hl:{x: canvas.width / 8 * 2 + 5, y: 340},hr:{x: canvas.width / 8 * 3 + 5, y: 340}},
                        "3,3": {x: canvas.width / 8 * 5 - 80, y: 240},
                        "3,4": {x: canvas.width / 8 * 7 - 80, y: 240},
                        "4,1": {x: 0, y: 340},
                        "4,2": {x: canvas.width / 8 + 5, y: 340},
                        "4,3": {x: canvas.width / 8 * 2 + 5, y: 340},
                        "4,4": {x: canvas.width / 8 * 3 + 5, y: 340},
                        "4,5": {x: canvas.width / 8 * 4 + 5, y: 340},
                        "4,6": {x: canvas.width / 8 * 5 + 5, y: 340},
                        "4,7": {x: canvas.width / 8 * 6 + 5, y: 340},
                        "4,8": {x: canvas.width / 8 * 7 + 5, y: 340}
                    };*/

                    var posiciones = {
                        "1,1": {x: canvas.width / 2 - 90, y: 40, hl:"2,1",hr:"2,2"},
                        "2,1": {x: canvas.width / 4 - 80, y: 140,hl:"3,1",hr:"3,2"},
                        "2,2": {x: canvas.width / 4 * 3 - 80, y: 140,hl:"3,3",hr:"3,4"},
                        "3,1": {x: canvas.width / 8 - 80, y: 240,hl:"4,1",hr:"4,2"},
                        "3,2": {x: canvas.width / 8 * 3 - 80, y: 240,hl:"4,3",hr:"4,4"},
                        "3,3": {x: canvas.width / 8 * 5 - 80, y: 240,hl:"4,5",hr:"4,6"},
                        "3,4": {x: canvas.width / 8 * 7 - 80, y: 240,hl:"4,7",hr:"4,8"},
                        "4,1": {x: 0, y: 340,hl:"no",hr:"no"},
                        "4,2": {x: canvas.width / 8 + 5, y: 340,hl:"no",hr:"no"},
                        "4,3": {x: canvas.width / 8 * 2 + 5, y: 340,hl:"no",hr:"no"},
                        "4,4": {x: canvas.width / 8 * 3 + 5, y: 340,hl:"no",hr:"no"},
                        "4,5": {x: canvas.width / 8 * 4 + 5, y: 340,hl:"no",hr:"no"},
                        "4,6": {x: canvas.width / 8 * 5 + 5, y: 340,hl:"no",hr:"no"},
                        "4,7": {x: canvas.width / 8 * 6 + 5, y: 340,hl:"no",hr:"no"},
                        "4,8": {x: canvas.width / 8 * 7 + 5, y: 340,hl:"no",hr:"no"}
                    };

                    var paquete = "{{asset('backoffice/images/circulo1.png')}}";
                    var icon = "{{ asset('backoffice/images/icons/info.svg') }}";
                    var icon_plus = "{{ asset('backoffice/images/icons/add-button-blue-circle.svg') }}";
                    console.log(json);
                    console.log(posiciones);

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

                    pintaGrid(20, 20, "gray");
                    var tNode = new TreeNode(ctx, posInicial);

                    for (var k in json) {
                        console.log("indice =" + k, "position =" + json[k]["position"]);
//                        console.log( posiciones[json[k]["position"]] );
                        if (json[k]["type"] === "user") {
                            tNode.SetbgColor = "#2196F3";
                            paquete = "{{asset('backoffice/images/circulo1.png')}}";
                            icon = "{{ asset('backoffice/images/icons/info.svg') }}";
                        } else {
                            tNode.SetbgColor = "#1bb04a";
                            paquete = "{{asset('backoffice/images/icons/add-button-blanco-circle.svg')}}";
                            icon = "{{ asset('') }}";
                        }

                        var pos=posiciones[json[k]["position"]];
                        console.log(pos);
                        console.log("pos x= "+pos.x);
                        console.log("position Y=" + pos.y);
                        tNode.SetPosition = pos;
                        tNode.createNode();
                        tNode.SetUsername = json[k]["username"];
                        tNode.pintar(paquete, pos.x, pos.y);
                        tNode.icon(icon, pos.x, pos.y);
                        /*next = parseInt(k) + parseInt(1);
                        console.log("next =" + next);
                        fin = posiciones[json[next]["position"]];
                        console.log(fin);*/
                        if(pos["hl"] !== "no" && json[k]["type"] === "user"){
                            fin_l=posiciones[pos["hl"]];
                            /*console.log(fin_l);
                            console.log(fin_l.x);
                            console.log(fin_l.y);
                            console.log("--------------");*/
                            tNode.lineLeft(pos, fin_l);
                            fin_r=posiciones[pos["hr"]];
                            tNode.lineRight(pos,fin_r);
                        }else if(pos["hl"] === "no" ) {
                            console.log("linea de mostrar mas ");
                            tNode.lineViewMore(pos, icon_plus);
                        }else{
                            console.log("no hay linea");
                        }


//                        if (json[k]["position"] !== "4,2") {}
                    }
//                    console.info( posiciones.includes( '1,1' ) );
//                    console.info( ("1,1" in posiciones) );
                } else {
                    alert("NO cuentas con CANVAS");
                }

            }
        };
    </script>
@endsection
