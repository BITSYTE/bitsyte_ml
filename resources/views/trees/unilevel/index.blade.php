@extends('layouts.main')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/assets/css/easyScroll/easyScroll.css')}}">
    <style>
        canvas {
            /*background: orange;*/
            /*border: solid red 3px;*/
        }
        #lvl1{
            border-right: 3px solid;
            border-color: #2196F3 ;
        }
        #lvl2{
            /*border-right: 3px solid;*/
        }
    </style>
@endsection
@section('breadcrumbs')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-2">
            <h3 class="content-header-title mb-0">Unilevel Tree</h3>
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

            <div class="canvas-wrapper-unilevel">
                <div class="navTree-unilevel col-md-4">
                    <div class="navTree-child">
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="text" class="form-control " id="iconLeft4" placeholder="search">
                            <div class="form-control-position">
                                <i class="ft-search success font-medium-4"></i>
                            </div>
                        </fieldset>
                    </div>
                    {{--<div class="navTree-child">
                        <button id="top" type="button" class="btn mr-1 mb-1 btn-primary bg-blue btn-lg navTree-button" >
                            <i class="fa fa-arrow-circle-up"></i> TOP
                        </button>
                    </div>--}}
                </div>
                <div class="unilevelT" style="width: 438px; height: 610px">
                    <canvas class="" id="lvl1" width="435" height="600">
                        Tu navegador no soporta el canvas de HTML5
                    </canvas>
                </div>
                <div>
                    <div id="wrap2" class="unilevelT" class="" style="width: 438px; height: 600px">
                        <canvas class="" id="lvl2" width="420" height="1050">
                            Tu navegador no soporta el canvas de HTML5
                        </canvas>
                    </div>
                </div>
                <div id="wrap3" class="unilevelT" style="width: 438px; height: 610px">
                    <canvas class="" id="lvl3" width="420" height="600">
                        Tu navegador no soporta el canvas de HTML5
                    </canvas>
                </div>

            </div>

        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('backoffice/assets/js/trees/unilevelTree.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backoffice/assets/js/trees/treeNode2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backoffice/assets/js/trees/functions.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backoffice/assets/js/easyScroll/easyScroll.js') }}"></script>

    <script>
        var csr = "{{ csrf_token() }}";
        var lvl1;
        var lvl2;
        var lvl3;
        var ctx;
        var user = "{{Auth::user()->first_name}}";
        var json = [
            {"username": "jhon", "paquete": "gold", "type": "user", "position": "1,1"},
            {"username": "jose1", "paquete": "gold", "type": "user", "position": "2,1"},
            {"username": "jose2", "paquete": "gold", "type": "user", "position": "2,2"},
            {"username": "jose3", "paquete": "gold", "type": "user", "position": "3,1"},
            {"username": "jose4", "paquete": "gold", "type": "add", "position": "3,2"},
            {"username": "jose5", "paquete": "gold", "type": "user", "position": "3,3"},
            {"username": "jose6", "paquete": "gold", "type": "user", "position": "3,4"},
            {"username": "jose7", "paquete": "gold", "type": "user", "position": "4,1"},
            {"username": "jose8", "paquete": "plate", "type": "user", "position": "4,2"},
//                        {"username": "jose9", "paquete": "gold", "type": "add", "position": "4,3"},
//                        {"username": "jose10", "paquete": "gold", "type": "add", "position": "4,4"},
            {"username": "jose11", "paquete": "gold", "type": "add", "position": "4,5"},
            {"username": "jose12", "paquete": "gold", "type": "user", "position": "4,6"},
            {"username": "jose13", "paquete": "gold", "type": "add", "position": "4,7"},
            {"username": "add User", "paquete": "gold", "type": "add", "position": "4,8"}
        ];
        var json2 = [
            {"username": "jhon", "paquete": "gold", "type": "user", "position": [1,1]},
            {"username": "jose1", "paquete": "gold", "type": "user", "position": [2,1]},
            {"username": "jose2", "paquete": "gold", "type": "user", "position": [2,2]},
            {"username": "jose3", "paquete": "gold", "type": "user", "position": [3,1]},
            {"username": "jose4", "paquete": "gold", "type": "add", "position": [3,2]},
            {"username": "jose5", "paquete": "gold", "type": "user", "position": [3,3]},
            {"username": "jose6", "paquete": "gold", "type": "user", "position": [3,4]},
            {"username": "jose7", "paquete": "gold", "type": "user", "position": [4,1]},
            {"username": "jose8", "paquete": "plate", "type": "user", "position": [4,2]}
        ];

        $(document).ready(function () {
            console.log("ready!");
            // RUTA DE LAS IMAGENES
            //  objeto de imagenes

            $('#wrap2').easyScroll({
                theme : 'dafault',
                scrollAutoHide : false,
                scrollOffset : 0,
                scrollMinHeight : 20,
                scrollStep : 120,
                scrollButtons : false,
                scrollHorizontal : false
            });

            var paquetes = {
                gold: "{{asset('backoffice/images/Package Golden.png')}}",
                silver: "{{asset('backoffice/images/Package Silver.png')}}",
                platinum: "{{asset('backoffice/images/Package Platinum.png')}}",
            };
            var images = {
                paquetes :{
                    gold: "{{asset('backoffice/images/Package Golden.png')}}",
                    silver: "{{asset('backoffice/images/Package Silver.png')}}",
                    platinum: "{{asset('backoffice/images/Package Platinum.png')}}",
                },
                iconInfo: "{{ asset('backoffice/images/icons/info.svg') }}",
                addUser: "{{asset('backoffice/images/icons/add-button-blanco-circle.svg')}}",
            };
            var imageAdd = {
                addUser: "{{asset('backoffice/images/icons/add-button-blanco-circle.svg')}}",
                {{--icon_plus: "{{ asset('backoffice/images/icons/add-button-blue-circle.svg') }}"--}}
            };
            console.log(images);

            lvl1 = document.getElementById("lvl1");
            var unilevelT = new UnilevelTree(images, lvl1);

            if (lvl1 && lvl1.getContext) {
                ctx = lvl1.getContext("2d");
                if (ctx) {

//                    unilevelT.SetCanvas=lvl1;
                    unilevelT.SetLvl1=ctx;
                    unilevelT.lvl1(json);
                    //SE AGREGA EVENTO DE CLICK AL CANVAS
                    /*lvl1.addEventListener("click", function (e) {
                        ut.selecciona(e, csr)
                    }, false);*/
                } else {
                    alert("NO cuentas con CANVAS");
                }
            }

            lvl2 = document.getElementById("lvl2");
            if (lvl2 && lvl2.getContext) {
                ctx = lvl2.getContext("2d");
                if (ctx) {

                    unilevelT.SetLvl2(ctx,lvl2);
                    unilevelT.lvl2(json);
                    //SE AGREGA EVENTO DE CLICK AL CANVAS
                    lvl2.addEventListener("click", function (e) {
                        unilevelT.selecciona(e,"lvl2")
                    }, false);
                } else {
                    alert("NO cuentas con CANVAS");
                }
            }
            lvl3 = document.getElementById("lvl3");
            if (lvl3 && lvl3.getContext) {
                ctx = lvl3.getContext("2d");
                if (ctx) {

                    unilevelT.SetLvl3=ctx;
//                    unilevelT.lvl3(json2);
                    //SE AGREGA EVENTO DE CLICK AL CANVAS
                    /*lvl1.addEventListener("click", function (e) {
                        ut.selecciona(e, csr)
                    }, false);*/
                } else {
                    alert("NO cuentas con CANVAS");
                }
            }

            function refresh() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                bt.initTree(json2);
            }

            //click en el boton top
            $('#top').on("click", function () {
                refresh();
            });

        });


    </script>
@endsection