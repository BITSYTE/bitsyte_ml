@extends('layouts.main')

@section('head')
    <style>
        canvas{
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
                    <canvas id="miCanvas" width="800" height="600">
                        Tu navegador no soporta el canvas de HTML5
                    </canvas>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    {{--<script type="text/javascript" src="{{ asset('backoffice/assets/js/binaryTree.js') }}"></script>--}}
    <script>
        window.onload=function(){
            var canvas = document.getElementById("miCanvas");
            if(canvas && canvas.getContext){
                var ctx = canvas.getContext("2d");
                if (ctx) {
                    /****************
                     VARIABLES
                     *****************/
                    var i;
                    var raiz = {fondo:"rgba(19,52,149,1)"};
                    var sda = {fondo:"rgba(19,52,149,1)"};
                    var tra = {fondo:"rgba(19,52,149,1)"};
                    var add = {fondo:"rgba(19,52,149,1)"};
                    var imagen = new Image();
                    var icon = new Image();
                    var posInicial = {x:300,y:50};
                    var rectangulo = {largo:190, alto:50};
                    var imgW = 50;
                    var imgh = 50;
                    /*****************
                     FUNCIONES
                     ******************/
                    function pintaGrid(disX, disY, color){
                        ctx.strokeStyle = color;
                        ctx.lineWidth = 0.5;

                        for(var i = disX + 0.5; i <canvas.width; i += disX){
                            ctx.beginPath();
                            ctx.moveTo(i, 0);
                            ctx.lineTo(i, ctx.canvas.height);
                            ctx.stroke();
                        }

                        for(var i = disY + 0.5; i <canvas.height; i += disY){
                            ctx.beginPath();
                            ctx.moveTo(0, i);
                            ctx.lineTo(ctx.canvas.width,i);
                            ctx.stroke();
                        }
                    }

                    function procesaImagen(){
//                        limpiar();
                        ctx.drawImage(imagen,posInicial.x,posInicial.y);
                        ctx.drawImage(imagen,0,0);
                        ctx.drawImage(icon,posInicial.x+140,posInicial.y+6);
                    }
                    function createNode(x,y,color){
                        ctx.fillStyle = color;
                        ctx.fillRect(x,y,rectangulo.largo, rectangulo.alto);
                        ctx.drawImage(imagen,x,y);
                        ctx.font = "15px Verdana";
                        ctx.lineWidth = 1;
                        ctx.fillStyle = "white";
                        ctx.fillText("user name",posInicial.x-130,190);
                    }
                    function limpiar(){
//                        var w = imagen.width;
//                        var h = imagen.height;
                        ctx.clearRect(250,10,w,h);
                    }

                    pintaGrid(20,20,"gray");
                    icon.src = "{{asset('backoffice/images/icons/info-ico-azul.png')}}";
                    imagen.src = "{{asset('backoffice/images/circulo1.png')}}";
                    imagen.onload = function(e){
//                        ctx.fillRect(350,100,canvas.width, canvas.height);
                        ctx.fillStyle = raiz.fondo;
                        ctx.fillRect(posInicial.x,posInicial.y,rectangulo.largo, rectangulo.alto);
//                        ctx.strokeRect(posInicial.x,posInicial.y,rectangulo.largo,rectangulo.alto);
                        procesaImagen();
                        ctx.font = "15px Verdana";
                        ctx.lineWidth = 1;
                        ctx.fillStyle = "white";
                        ctx.fillText("user name",posInicial.x+50,posInicial.y+30);
//                        ctx.strokeText("CANVAS",posInicial.x+50,posInicial.y+35);
                    };

                    for( i=0;i<=4; i++){

                    }

                    ctx.lineWidth = 2;
                    ctx.strokeStyle = "rgba(58,150,235,1)";
                    ctx.beginPath();
                    ctx.moveTo(posInicial.x+100,100);   //baja inicio
                    ctx.lineTo(posInicial.x+100,130);   //baja final
                    ctx.lineTo(posInicial.x-70,130);    //izquierda
                    ctx.quadraticCurveTo(posInicial.x-100,130, posInicial.x-100,160);
                    ctx.stroke();

                    ctx.beginPath();
                    ctx.moveTo(posInicial.x+100,130);   //baja final
                    ctx.lineTo(posInicial.x+260,130);   //derecha
                    ctx.quadraticCurveTo(posInicial.x+300,130, posInicial.x+300,160);
                    ctx.stroke();

                    ctx.fillStyle = raiz.fondo;
                    ctx.fillRect(posInicial.x-180,160,rectangulo.largo, rectangulo.alto);
//                    procesaImagen2();
                    ctx.drawImage(imagen,0,0);
                    ctx.drawImage(imagen,posInicial.x-130,190);
                    ctx.font = "15px Verdana";
                    ctx.lineWidth = 1;
                    ctx.fillStyle = "white";
                    ctx.fillText("user name",posInicial.x-130,190);

                } else{
                    alert("NO cuentas con CANVAS")
                };
            }
        };
        {{--var img = "{{ asset('backoffice/images/circulo1.png') }}";--}}
        {{--window.onload = start(img);--}}
        console.log("asd2");
    </script>
@endsection
