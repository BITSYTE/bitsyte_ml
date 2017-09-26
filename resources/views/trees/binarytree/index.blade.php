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
                <div style="width: 50%; float: left">
                    <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" class="form-control form-control-xl input-xl" id="iconLeft" placeholder="search">
                        <div class="form-control-position">
                            <i class="ft-search success font-medium-4"></i>
                        </div>
                    </fieldset>
                </div>
                <div style="width: 50%;float: right">
                    <button type="button" class="btn mr-1 mb-1 btn-primary bg-blue btn-lg" style="float: right">
                        <i class="fa fa-arrow-circle-up"></i> TOP
                    </button>
                </div>
                <canvas id="miCanvas" width="1310" height="500">
                    Tu navegador no soporta el canvas de HTML5
                </canvas>
            </div>
            {{--</div>--}}
        </div>
    </div>
    {{--{{ Auth::user()->first_name }}--}}
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('backoffice/assets/js/binaryTree.js') }}"></script>
    <script>
        var canvas;
        var ctx;
        var info_array = new Array();
        var nextRoot = new Array();
        var user = "{{Auth::user()->first_name}}";

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

        var json = [
            {"username": "asd", "paquete": "gold", "type": "user", "position": "1,1"},
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
                    var pos={x:10,y:10};
                    var posInicial = {x: canvas.width / 2 - 90, y: 30};

                    //ARREGLO DE LAS POSICIONES
                    var posiciones = {
                        "1,1": {x: canvas.width / 2 - 90, y: 50, hl:"2,1",hr:"2,2"},
                        "2,1": {x: canvas.width / 4 - 80, y: 150,hl:"3,1",hr:"3,2"},
                        "2,2": {x: canvas.width / 4 * 3 - 80, y: 150,hl:"3,3",hr:"3,4"},
                        "3,1": {x: canvas.width / 8 - 80, y: 250,hl:"4,1",hr:"4,2"},
                        "3,2": {x: canvas.width / 8 * 3 - 80, y: 250,hl:"4,3",hr:"4,4"},
                        "3,3": {x: canvas.width / 8 * 5 - 80, y: 250,hl:"4,5",hr:"4,6"},
                        "3,4": {x: canvas.width / 8 * 7 - 80, y: 250,hl:"4,7",hr:"4,8"},
                        "4,1": {x: 0, y: 340,hl:"no",hr:"no"},
                        "4,2": {x: canvas.width / 8 + 5, y: 340,hl:"no",hr:"no"},
                        "4,3": {x: canvas.width / 8 * 2 + 5, y: 350,hl:"no",hr:"no"},
                        "4,4": {x: canvas.width / 8 * 3 + 5, y: 350,hl:"no",hr:"no"},
                        "4,5": {x: canvas.width / 8 * 4 + 5, y: 350,hl:"no",hr:"no"},
                        "4,6": {x: canvas.width / 8 * 5 + 5, y: 350,hl:"no",hr:"no"},
                        "4,7": {x: canvas.width / 8 * 6 + 5, y: 350,hl:"no",hr:"no"},
                        "4,8": {x: canvas.width / 8 * 7 + 5, y: 350,hl:"no",hr:"no"}
                    };

                    // RUTA DE LAS IMAGENES
                    var paquete = "{{asset('backoffice/images/circulo1.png')}}";
                    var icon = "{{ asset('backoffice/images/icons/info.svg') }}";
                    var icon_plus = "{{ asset('backoffice/images/icons/add-button-blue-circle.svg') }}";
                    console.log(json);
                    console.log(posiciones);
                    console.log(nextRoot);

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
                    var dimensions = {x:0, d:0};

                    if (user !== json[0]["username"] ){
                        console.log("draw padre");
                        tNode.SetPosition = pos;
                        tNode.createNode(dimensions);
                        tNode.drawUserName(user,dimensions);
                        tNode.drawPaquete(paquete, pos.x, pos.y,dimensions);
                        tNode.drawIconInfo(icon, pos.x, pos.y,dimensions);
                        console.log(posiciones["1,1"]);
                        tNode.drawLineRoot(pos,posiciones["1,1"]);
                    }
                    tNode.SetDash=[];
                    for (var k in json) {
                        console.log("indice =" + k, "position =" + json[k]["position"]);

                        pos=posiciones[json[k]["position"]];    // se obtiene la posicion del nodo
                        //se checa si el nodo es de nivel 4 para cambiar el tipo de linea
                        if(pos["hl"] !== "no" && json[k]["type"] === "user"){
                            fin_l=posiciones[pos["hl"]];
                            tNode.lineLeft(pos, fin_l);
                            fin_r=posiciones[pos["hr"]];
                            tNode.lineRight(pos,fin_r);
                            dimensions = {x:0, d:0};
                        }else if(pos["hl"] === "no" ) {
                            console.log("linea de mostrar mas ");
                            tNode.drawLineViewMore(pos, icon_plus);
                            dimensions = {x:15,d:30};
                        }else{
                            console.log("no hay linea");
                        }
                        // se checa que tipo de usuario es para cambiar el color y los iconos
                        if (json[k]["type"] === "user") {
                            tNode.SetbgColor = "#2196F3";
                            paquete = "{{asset('backoffice/images/circulo1.png')}}";
                            icon = "{{ asset('backoffice/images/icons/info.svg') }}";
                        } else {
                            tNode.SetbgColor = "#1bb04a";
                            paquete = "{{asset('backoffice/images/icons/add-button-blanco-circle.svg')}}";
                            icon = "{{ asset('') }}";
                        }
                        //se dibuja el nodo
                        tNode.SetPosition = pos;
                        tNode.createNode(dimensions);
                        tNode.drawUserName(json[k]["username"],dimensions);
                        tNode.drawPaquete(paquete, pos.x, pos.y,dimensions);
                        tNode.drawIconInfo(icon, pos.x, pos.y,dimensions);

                    }

                } else {
                    alert("NO cuentas con CANVAS");
                }

            }
        };
    </script>
@endsection
