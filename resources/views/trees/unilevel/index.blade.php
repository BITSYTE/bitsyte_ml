@extends('layouts.main')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/assets/css/easyScroll/easyScroll.css')}}">
    <style>
        #lvl1{
            border-right: 3px solid;
            border-color: #2196F3 ;
        }

    </style>
@endsection
@section('breadcrumbs')
    @include('layouts.partial.breadcrumbs')
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
                    <div id="wrap2" class="unilevelT" style="width: 438px; height: 600px">
                        <canvas class="" id="lvl2" width="437" height="1050">
                            Tu navegador no soporta el canvas de HTML5
                        </canvas>
                    </div>
                </div>
                <div>
                    <div id="wrap3" class="unilevelT" style="width: 438px; height: 610px">
                        <canvas class="" id="lvl3" width="420" height="1050">
                            Tu navegador no soporta el canvas de HTML5
                        </canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('backoffice/assets/js/trees/unilevelTree.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backoffice/assets/js/trees/treeNode2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backoffice/assets/js/easyScroll/easyScroll.js') }}"></script>

    <script>
        var csr = "{{ csrf_token() }}";
        var lvl1;
        var lvl2;
        var lvl3;
        var ctx;
        var user = "{{$uuid}}";
        var user_name = "{{auth()->user()->username}}";


        $(document).ready(function () {
            console.log("ready!");
            $('#wrap2').easyScroll({
                theme : 'dafault',
                scrollAutoHide : false,
                scrollOffset : 0,
                scrollMinHeight : 20,
                scrollStep : 120,
                scrollButtons : false,
                scrollHorizontal : false
            });

            let res;
            function getNodesTree(csr, uuid) {
                $.ajax({
                    method: "POST",
                    url: "/api/unilevel/children/" + uuid,
                    data: {uuid: uuid, _token: csr},
                    async: false,
                    success: function (result) {
                        res = result;
                        return result;
                    },
                    error: function (httpReq, status, exception) {
                        console.log(status + "-" + exception);
                    }
                });
                return res;
            }

            var users = getNodesTree(csr, user);
            console.log("users");
            users = users[0];
            console.log(users);

            // RUTA DE LAS IMAGENES.     objeto de imagenes
            var images = {
                paquetes :
                    {!! json_encode($paquetes, JSON_PRETTY_PRINT) !!}
                ,
                iconInfo: "{{ asset('backoffice/images/icons/info.svg') }}",
                addUser: "{{asset('backoffice/images/icons/add-button-blanco-circle.svg')}}",
            };
            console.log(images);
            //VARIABLES
            var band = false;
            lvl1 = document.getElementById("lvl1");
            var unilevelT = new UnilevelTree(images, lvl1);

            lvl2 = document.getElementById("lvl2");
            const unilevelT2 = new UnilevelTree(images, lvl2);

            lvl3 = document.getElementById("lvl3");
            const unilevelT3 = new UnilevelTree(images, lvl3);

            if (lvl1 && lvl1.getContext) {
                ctx = lvl1.getContext("2d");
                if (ctx) {

                    unilevelT.SetContext(ctx);     // LE PASAMOS EL CONTEXTO
                    unilevelT.root(users);       // INICIA EL DIBUJADO
                    //SE AGREGA EVENTO DE CLICK AL CANVAS
                    /*lvl1.addEventListener("click", function (e) {
                        ut.selecciona(e, csr)
                    }, false);*/
                } else {
                    alert("NO cuentas con CANVAS");
                }
            }

            if (lvl2 && lvl2.getContext) {
                ctx = lvl2.getContext("2d");
                if (ctx) {
                    unilevelT2.SetContext(ctx);     // LE PASAMOS EL CONTEXTO
                    unilevelT2.initDraw(users);       // INICIA EL DIBUJADO
                    //SE AGREGA EVENTO DE CLICK AL CANVAS
                    lvl2.addEventListener("click", function (e) {
                        selecciona(e,lvl2)
                    }, false);
                } else {
                    alert("NO cuentas con CANVAS");
                }
            }

            if (lvl3 && lvl3.getContext) {
                ctx = lvl3.getContext("2d");
                if (ctx) {
                    unilevelT3.SetContext(ctx);
//                    unilevelT.lvl3(json2);
                    //SE AGREGA EVENTO DE CLICK AL CANVAS
                    lvl3.addEventListener("click", function (e) {
                        clickCanvas3(e, lvl3)
                    }, false);
                } else {
                    alert("NO cuentas con CANVAS");
                }
            }

            /**
             * @param e         ES EL PARAMETRO QUE RECIBO DEL EVENTO CLICK SE NECESITA
             * @param canvas    canvas se NECESITA PARA PODER LA FUNCION QUE SE ENCARGA DEL CLICK
             */
            function selecciona(e,canvas) {
//                lvl = getLVL(lvl);
                let nodesPos =unilevelT2.getArrayNodes();
                let context =unilevelT2.getContext();
                // console.log(lvl);
                let pos = ajusta(e.clientX, e.clientY,canvas);
                console.log(pos);
                nodesPos.map(function (item) {
                    // console.log(item);
                    console.log("map");
                    if (pos.x > item._position.x && pos.x < item._position.x + 180 && pos.y > item._position.y && pos.y < item._position.y + 50) {
                        console.log("click en nodo");
                        console.log(item);
                        // IF BAND IS FALSE NO NODE SELECTED AND CHARGE YOUR CHILDS
                        if(band === false){
                            band = true;
                            console.log("click");
                            console.log(context);

                            $('.easyScroll_scroll_vertical').css('visibility', 'hidden');
                            var linesDraw = new LinesNode(context, {x: item.x, y: item.y + 25});
                            linesDraw.beeline(context, {x:item._position.x+180,y:item._position.y+25},{x:lvl2.width , y:item._position.y+25},'#2196F3');
                            linesDraw.beeline(context, {x:lvl2.width,y:0},{x:lvl2.width , y:lvl2.height},'#2196F3');
                            console.log("_uuid");
                            console.log(item._uuid);
//                            var users2 = getNodesTree(csr, item._uuid);
//                            console.log("llamada desde llvl2");
//                            console.log(users);
                            unilevelT3.initDraw(users);
                        }else {
                            band = false;

                            context.clearRect(0, 0, canvas.width, canvas.height);
                            $('.easyScroll_scroll_vertical').css('visibility', 'visible');
                            unilevelT2.initDraw(users);
                            let context3 =unilevelT3.getContext();
                            context3.clearRect(0, 0, lvl3.width, lvl3.height);
                        }

                    }
                }.bind(this));
            }

            function clickCanvas3(e,canvas) {
                let nodesPos =unilevelT3.getArrayNodes();
                let context =unilevelT3.getContext();
                let pos = ajusta(e.clientX, e.clientY,canvas);
                console.log("nodes pos");
                console.log(nodesPos);
                nodesPos.map(function (item) {
                    // console.log(item);
                    console.log("map");
                    if (pos.x > item._position.x && pos.x < item._position.x + 180 && pos.y > item._position.y && pos.y < item._position.y + 50) {
                        console.log("click en nodo");
                        console.log(item);

                        lvl1.clearRect(0, 0, canvas.width, canvas.height);
                        lvl2.clearRect(0, 0, canvas.width, canvas.height);
                        lvl3.clearRect(0, 0, canvas.width, canvas.height);
                        $('.easyScroll_scroll_vertical').css('visibility', 'visible');
                        unilevelT2.initDraw(users);
                        let context3 =unilevelT3.getContext();
                        context3.clearRect(0, 0, lvl3.width, lvl3.height);
                    }
                }.bind(this));
            }

            function refresh() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                bt.initTree(json2);
            }

            //click en el boton top
            $('#top').on("click", function () {
                refresh();
            });

            function ajusta(xx, yy,canvas) {
                var posCanvas = canvas.getBoundingClientRect();
                var x = xx - posCanvas.left;
                var y = yy - posCanvas.top;
                return {x: x, y: y}
            }

        });


    </script>
@endsection