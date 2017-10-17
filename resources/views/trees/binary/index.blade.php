@extends('layouts.main')

@section('breadcrumbs')
    @include('layouts.partial.breadcrumbs')
@endsection

@section('content')
    <div class="row match-height">
        <div class="card-header col-xs-1 col-sm-1 col-md-12 col-lg-12 col-xl-12" style="padding: 6px!important;">

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

        </div>

        <!-- Modal -->
        <div id="modals">
            @include('trees.partial.infoUser')
            @include('trees.partial.addUser')
        </div>
        {{--{{ Auth::user()->first_name }}--}}
        @endsection

        @section('scripts')
            <script type="text/javascript" src="{{ asset('backoffice/assets/js/binaryTree.js') }}"></script>
            <script type="text/javascript" src="{{ asset('backoffice/assets/js/treeNode.js') }}"></script>
            <script type="text/javascript" src="{{ asset('backoffice/assets/js/trees/functions.js') }}"></script>
            <script>
                var users = [
                    {"username": "schmitt.lourdes", "type": "user", "position": [0, 1, 1]},
                    {"username": "jbeier", "type": "user", "position": [1, 1, 1]},
                    {"username": "rankunding", "type": "user", "position": [1, 2, 2]},
                    {"username": "kathlyn99", "type": "user", "position": [2, 1, 1]},
                    {"username": "jeanie.yundt", "type": "user", "position": [2, 2, 2]},
                    {"username": "pbechtelar", "type": "user", "position": [2, 3, 1]},
                    {"username": "witting.jazmyn", "type": "user", "position": [3, 5, 1]},
                    {"username": "gnader", "type": "user", "position": [3, 1, 2]}
                ];
                {{--var users = {!! $users !!};--}}
                /*var binary = [];

                var nextPartStage = 1310 / (this._binary[nodeData.position[0] + 1]);
                var destinoIzquierda = [
                    (nextPartStage * ((nodeData.position[1] * 2) - 1)) - (nextPartStage / 2),
                    (125 * (nodeData.position[0] + 1)) - ((125 / 2) + 25)
                ];
                var destinoDerecha = [
                    (nextPartStage * (nodeData.position[1] * 2)) - (nextPartStage / 2),
                    (125 * (nodeData.position[0] + 1)) - ((125 / 2) + 25)
                ];*/
                //                console.log(users);
                var csr = "{{ csrf_token() }}";
                var canvas;
                var ctx;
                var user = "{{$uuid}}";
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
                    /*{"username": "jose3", "paquete": "gold", "type": "user", "position": "3,1"},
                    {"username": "jose4", "paquete": "gold", "type": "add", "position": "3,2"},
                    {"username": "jose5", "paquete": "gold", "type": "add", "position": "3,3"},
                    {"username": "jose6", "paquete": "gold", "type": "user", "position": "3,4"},
                    {"username": "jose7", "paquete": "gold", "type": "user", "position": "4,1"},
                    {"username": "jose8", "paquete": "plate", "type": "user", "position": "4,2"},
                    {"username": "jose13", "paquete": "gold", "type": "add", "position": "4,7"},
                    {"username": "add User", "paquete": "gold", "type": "add", "position": "4,8"}*/
                ];

                $(document).ready(function () {
                    console.log("ready!");
                    /*
                    var res;

                    function getNodesTree(csr, uuid) {
                        $.ajax({
                            method: "POST",
                            url: "/api/binary/children/" + uuid,
                            data: {uuid: uuid, _token: csr},
                            async: false,
                            success: function (result) {
//                                console.log("result");
//                                console.log(result);
                                res = result;
//                                result.map()
//                                let users = JSON.parse(result);
                                return result;
                            },
                            error: function (httpReq, status, exception) {
                                console.log(status + "-" + exception);
                            }
                        });
                        return res;
                    }

                    var users = getNodesTree(csr, user);*/
                    console.log("users");
                    console.log(users);

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
//                            bt.initTree(users);
                            bt.fillOut(users);
                            //SE AGREGA EVENTO DE CLICK AL CANVAS
                            canvas.addEventListener("click", function (e) {
                                selecciona(e, csr)
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


                    function selecciona(e, csr) {

                        let nodesPos = bt.getArrayNodes();
                        let context = bt.getContext();
                        let pos = ajusta(e.clientX, e.clientY);
                        // console.log(pos);
                        nodesPos.map(function (item) {
                            if (pos.x > item._position.x && pos.x < item._position.x + 180 && pos.y > item._position.y && pos.y < item._position.y + 50) {
                                console.log("click en nodo");
                                console.log(item);
                                // console.log($("#boton").click());
                                if (item._type === "add") {
//                                    alert("add");
//                                    let users;
//                                    $.ajax({
//                                        method: "POST",
//                                        url: "/ajax",
//                                        data: {username: item._username, paquete: item._paquete, _token: csr},
//                                        success: function (result) {
//                                            let campos = "";
//                                            let route = "";
//                                            let users = JSON.parse(result);
                                    console.log(users);
                                    if (json2.length === 0) {
                                        console.log("vacio");
                                        $("#add1").show();
                                        $("#add2").hide();
                                        $("#add3").hide();

                                        $('#modal-add').trigger("click")
                                    } else if (json2.length === 1) {
                                        console.log("uno");
//                                        $("#modal-body-add").html();
                                        user = "user prueba";

//                                        $("#user-name-add").text();
                                        $("#user-name-add").text(user);
                                        $("#add1").hide();
                                        $("#add2").show();
                                        $("#add3").hide();
                                         $('#modal-add').trigger("click")
                                    } else {
                                        console.log("lleno");
                                        $("#modal-body-add").html();
                                        campos = "";
                                        for (let k in json2) {
                                            console.log(k + "users =" + users[k].username);
                                            campos += "<a href=\"#\" class=\"list-group-item list-group-item-action\">" + users[k].username + "</a>"
                                        }
                                        $("#add1").hide();
                                        $("#add2").hide();
                                        $("#add3").show();
                                        $("#add3-list").html();
                                        $("#add3-list").html(campos);
                                        $('#modal-add').trigger("click")
                                    }
//                                        },
//                                        error: function (httpReq, status, exception) {
////                    alert(status+"-"+exception);
//                                            console.log(status + "-" + exception);
//                                            $("#modal-body-add").html();
//                                            campos = "<span> ERROR REFRESH THE PAGE TRY LETER </span>";
//                                            $("#modal-body-add").html(campos);
//                                        }
//                                    });

                                } else if (item._type === "user") {
                                    $('#modal-user').click();
                                    /*$.ajax({
                                        method: "POST",
                                        url: "/ajax",
                                        data: {username: item._username, paquete: item._paquete, _token: csr},
                                        success: function (result) {
                                            var user = JSON.parse(result);
                                            console.log(user);
                                            // var tam = Object.keys(obj.postalLocation).length;
                                            var tam = Object.keys(user).length;
                                            // var tam = result.length;
                                            console.log(tam);*/
                                    /*let campos = "";
                                    campos += "<fieldset class=\"form-group floating-label-form-group\">\n" +
                                        "<label for=\"email\">username: " + user.username + "</label>\n" +
                                        // "<input type=\"text\" class=\"form-control\" id=\"email\" placeholder=\"\">\n" +
                                        "</fieldset>\n" +
                                        "<br>\n" +
                                        "<fieldset class=\"form-group floating-label-form-group\">\n" +
                                        "<label for=\"title\">" + "paquete: " + user.paquete + "</label>\n" +
                                        // "<input type=\"password\" class=\"form-control\" id=\"title\" placeholder=\"Password\">\n" +
                                        "</fieldset>\n" +
                                        "<br>\n" +
                                        "<fieldset class=\"form-group floating-label-form-group\">\n" +
                                        "<label for=\"title1\">dato extra: " + user.algo + "</label>\n" +
                                        // "<textarea class=\"form-control\" id=\"title1\" rows=\"3\" placeholder=\"Description\"></textarea>\n" +
                                        "</fieldset>";
                                    $("#modal-body").html(campos);
                                    $('#modalUser').trigger("click");*/
                                    /*},
                                    error: function (httpReq, status, exception) {
//                    alert(status+"-"+exception);
                                        console.log(status + "-" + exception);
                                    }
                                });*/

                                } else {
                                    alert("cargar siguiente arbol");
                                }
                            }
                        });
                    }

                });

            </script>
@endsection
