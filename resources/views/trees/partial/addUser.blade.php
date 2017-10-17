
<div>
    <button style="display: none" id="modal-add" type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-target="#default2">
        Launch Modal
    </button>

    <!-- Modal -->
    <div class="modal fade text-xs-left" id="default2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel1">Add User</h4>
                </div>
                <div id="add1" style="display: none">
                    <div class="modal-body">
                        <h5>Note:</h5>
                        <p>
                            To add a user. you have to first register it.<br>
                            Click in continue register.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                        {{--<button type="button" class="btn btn-outline-primary">Save changes</button>--}}
                        <a id="add-route" href="{{ route('users.create') }}">
                            <button type="button" class="btn btn-outline-primary">Continue</button>
                        </a>
                    </div>
                </div>

                <div id="add2" style="display: none">
                    <div class="modal-body">
                        <h5>Note:</h5>
                        <p>
                            confirm that you want to add the user: <b id="user-name-add">schmitt.lourdes</b>  here.<br>
                            Click in continue .
                        </p>
                        {{--<span class="" >
                            <b>Registered since : </b>
                            <label id="modal_register">27/08/94</label>
                        </span>--}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                        <a id="add-route" href="{{ route('users.create') }}">
                            <button type="button" class="btn btn-outline-primary">Continue</button>
                        </a>
                    </div>
                </div>

                <div id="add3" style="display: none" >
                    <div class="modal-body col-md-12" >
                        <h5>choose a user: </h5>
                        <div class="col-md-12">
                            <div id="add3-list" class="list-group list-add">
                                <a href="#" class="list-group-item list-group-item-action">schmitt.lourdes</a>
                                <a href="#" class="list-group-item list-group-item-action">jbeier</a>
                                <a href="#" class="list-group-item list-group-item-action">rankunding</a>
                                <a href="#" class="list-group-item list-group-item-action">kathlyn99</a>
                                <a href="#" class="list-group-item list-group-item-action">jeanie.yundt</a>
                                <a href="#" class="list-group-item list-group-item-action">pbechtelar</a>
                                <a href="#" class="list-group-item list-group-item-action">witting.jazmyn</a>
                                <a href="#" class="list-group-item list-group-item-action">gnader</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                        <a id="add-route" href="{{ route('users.create') }}">
                            <button type="button" class="btn btn-outline-primary">Continue</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


