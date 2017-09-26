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
    <script type="text/javascript" src="{{ asset('backoffice/assets/js/treeNode.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backoffice/assets/js/trees/functions.js') }}"></script>
    <script>
        var canvas;
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
            {"username": "jose8", "paquete": "gold", "type": "add", "position": "4,2"},
//                        {"username": "jose9", "paquete": "gold", "type": "add", "position": "4,3"},
//                        {"username": "jose10", "paquete": "gold", "type": "add", "position": "4,4"},
            {"username": "jose11", "paquete": "gold", "type": "add", "position": "4,5"},
            {"username": "jose12", "paquete": "gold", "type": "user", "position": "4,6"},
            {"username": "jose13", "paquete": "gold", "type": "add", "position": "4,7"},
            {"username": "add User", "paquete": "gold", "type": "add", "position": "4,8"}
        ];

        $( document ).ready(function() {
            console.log( "ready!" );
            // RUTA DE LAS IMAGENES
            var paquete = "{{asset('backoffice/images/circulo1.png')}}";                            //paquete
            const addUser = "{{asset('backoffice/images/icons/add-button-blanco-circle.svg')}}";    //agregar usuario
            var icon = "{{ asset('backoffice/images/icons/info.svg') }}";                           //icono de info
            var icon_plus = "{{ asset('backoffice/images/icons/add-button-blue-circle.svg') }}";    //ver mas alla

            canvas = document.getElementById("miCanvas");
            if (canvas && canvas.getContext) {
                ctx = canvas.getContext("2d");
                if (ctx) {
                    var bt = new BinaryTree(ctx,paquete,addUser,icon,icon_plus);
                    bt.initTree(json);
                    let nodes = bt.arrayNodes();
                    canvas.addEventListener("click", function(e){ bt.selecciona(e)}, false);

                } else {
                    alert("NO cuentas con CANVAS");
                }

            }
        });

    </script>
@endsection
