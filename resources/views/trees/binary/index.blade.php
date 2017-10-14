@extends('layouts.main')

@section('head')

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
                <div class="navTree">
                    <div class="navTree-child">
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="text" class="form-control " id="iconLeft4" placeholder="search">
                            <div class="form-control-position">
                                <i class="ft-search success font-medium-4"></i>
                            </div>
                        </fieldset>
                    </div>
                    <div class="navTree-child">
                        <button id="top" type="button" class="btn mr-1 mb-1 btn-primary bg-blue btn-lg navTree-button">
                            <i class="fa fa-arrow-circle-up"></i> TOP
                        </button>
                    </div>
                </div>
                <canvas id="miCanvas" width="1310" height="500">
                    Tu navegador no soporta el canvas de HTML5
                </canvas>
            </div>
            {{--</div>--}}

            <div>
                <button style="display: none" id="add" type="button" class=""
                        data-toggle="modal" data-show="false" data-target="#show-add">
                    Launch Modal
                </button>

                <!-- Modal -->
                <div class="modal fade text-xs-left" id="show-add" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel5" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel5">Add User</h4>
                            </div>
                            <div id="modal-body-add" class="modal-body">
                                <span>Nota:</span>
                                <p>
                                    To add a user. you have to first register it.<br>
                                    Click in continue register.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <a id="add-route" href="{{ route('users.new') }}">
                                    <button type="button" class="btn btn-outline-primary">Continue</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <button style="display: none" id="boton" type="button" class="btn btn-outline-primary block btn-lg"
                        data-toggle="modal" data-show="false" data-target="#show">
                    Launch Modal
                </button>

                <!-- Modal -->
                <div class="modal fade text-xs-left" id="show" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel5" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel5">Basic Modal</h4>
                            </div>
                            <div id="modal-body" class="modal-body">
                                <h5>USer</h5>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--{{ Auth::user()->first_name }}--}}
        @endsection

        @section('scripts')
            <script type="text/javascript" src="{{ asset('backoffice/assets/js/binaryTree.js') }}"></script>
            <script type="text/javascript" src="{{ asset('backoffice/assets/js/treeNode.js') }}"></script>
            <script type="text/javascript" src="{{ asset('backoffice/assets/js/trees/functions.js') }}"></script>
            <script>
                var users = [
                    {"username": "schmitt.lourdes", "type": "user", "position": [0,1,1]},
                    {"username": "jbeier", "type": "user", "position": [1, 1,1]},
                    {"username": "rankunding", "type": "user", "position": [1, 2,2]},
                    {"username": "kathlyn99", "type": "user", "position": [2, 1,1]},
                    {"username": "jeanie.yundt", "type": "user", "position": [2, 2,2]},
                    {"username": "pbechtelar", "type": "user", "position": [2, 3, 1]},
                    {"username": "witting.jazmyn", "type": "user", "position": [3, 5,1]},
                    {"username": "gnader", "type": "user", "position": [3, 1,2]}
                ];
                var asd=[
                    {"username":"vena.hodkiewicz","type":"user","position":[0,1]},
                    {"username":"orval.wuckert","type":"add","position":[1,1]},
                    {"username":"cummings.armani","type":"add","position":[1,2]},
                ];
                console.log(users);
                var csr = "{{ csrf_token() }}";
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
                    {"username": "jose8", "paquete": "plate", "type": "user", "position": "4,2"},
//                        {"username": "jose9", "paquete": "gold", "type": "add", "position": "4,3"},
//                        {"username": "jose10", "paquete": "gold", "type": "add", "position": "4,4"},
                    {"username": "jose11", "paquete": "gold", "type": "add", "position": "4,5"},
                    {"username": "jose12", "paquete": "gold", "type": "user", "position": "4,6"},
                    {"username": "jose13", "paquete": "gold", "type": "add", "position": "4,7"},
                    {"username": "add User", "paquete": "gold", "type": "add", "position": "4,8"}
                ];
                var json2 = [
                    {"username": "asd", "paquete": "gold", "type": "user", "position": "1,1"},
                    {"username": "jose1", "paquete": "gold", "type": "user", "position": "2,1"},
                    {"username": "jose2", "paquete": "gold", "type": "user", "position": "2,2"},
                    {"username": "jose3", "paquete": "gold", "type": "user", "position": "3,1"},
                    {"username": "jose4", "paquete": "gold", "type": "add", "position": "3,2"},
                    {"username": "jose5", "paquete": "gold", "type": "add", "position": "3,3"},
                    {"username": "jose6", "paquete": "gold", "type": "user", "position": "3,4"},
                    {"username": "jose7", "paquete": "gold", "type": "user", "position": "4,1"},
                    {"username": "jose8", "paquete": "plate", "type": "user", "position": "4,2"},
                    {"username": "jose13", "paquete": "gold", "type": "add", "position": "4,7"},
                    {"username": "add User", "paquete": "gold", "type": "add", "position": "4,8"}
                ];

                $(document).ready(function () {
                    console.log("ready!");
                    // RUTA DE LAS IMAGENES
                    var paquete = "{{asset('backoffice/images/circulo1.png')}}";                            //paquete
                    const addUser = "{{asset('backoffice/images/icons/add-button-blanco-circle.svg')}}";    //agregar usuario
                    var icon = "{{ asset('backoffice/images/icons/info.svg') }}";                           //icono de info
                    var icon_plus = "{{ asset('backoffice/images/icons/add-button-blue-circle.svg') }}";    //ver mas alla

                    canvas = document.getElementById("miCanvas");
                    if (canvas && canvas.getContext) {
                        ctx = canvas.getContext("2d");
                        if (ctx) {
                            var bt = new BinaryTree(ctx, paquete, addUser, icon, icon_plus);
                            bt.initTree(users);
//                            bt.makeAdd(users);
                            //SE AGREGA EVENTO DE CLICK AL CANVAS
                            canvas.addEventListener("click", function (e) {
                                bt.selecciona(e, csr)
                            }, false);

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
