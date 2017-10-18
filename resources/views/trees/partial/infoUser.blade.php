
<div>
    <button style="display: none" id="modal-user" type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal"
            data-target="#defaultSize">
        Launch Modal
    </button>

    <!-- Modal -->
    <div class="modal fade text-xs-left" id="defaultSize" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel18" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel18"> Binary Tree</h4>   {{--<i class="fa fa-tree"></i>--}}
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <img src="http://localhost:8002/backoffice/images/Package Silver.png" class="">
                        </div>
                        <div class=" col-md-8">
                            <div><b>User Name: </b><label > asd</label></div>
                            <div><b>Product Name: </b><label > Gold</label></div>
                            <p><label ><b>Price: </b></label>500000</p>
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <span class="" style="width: 20px">
                            <b>Registered since : </b>
                            <label id="modal_register">27/08/94</label>
                        </span>
                        <br>
                        <span class="" style="width: 20px">
                            <b>Volume Left : </b>
                            <label id="modal_Vlft">550</label>
                        </span>
                        <br>
                        <span class="" >
                            <b>Volume Right : </b>
                            <label id="modal_Vght">5000</label>
                        </span>
                        {{--<div>
                            <span class="input-group-addon" style="width: 20px">
                                <b>Registered since : </b>
                                <label id="price-resumen">27/08/94</label>
                            </span>
                        </div>--}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button id="view-tree" value="" type="button" class="btn btn-outline-primary">view tree</button>
                </div>
            </div>
        </div>
    </div>
</div>