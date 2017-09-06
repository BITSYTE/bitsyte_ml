<div id="walletSelect">
    <div class="card-header">
        <h4 class="card-title">My Wallets</h4>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-body px-1">
        <div class="card-block">
            <div class="form-group">

                <div class="col-sm-12 col-xs-12">
                    <div class=" mr-1 mb-1">
                        <button type="button" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Wallets
                        </button>
                        <div class="dropdown-menu wallet-drop-dawn">
                            <a href="{{ route('wallets.show',["name" => "Wallet bonus"]) }}" class="list-group-item list-group-item-action media no-border ">
                                <button type="button" class="btn btn-info btn-block">Wallet bonus</button>
                            </a>
                            <a href="{{ route('wallets.show',["name" => "Wallet personal"]) }}" class="list-group-item list-group-item-action media no-border ">
                                <button type="button" class="btn btn-info btn-block">Wallet personal</button>
                            </a>
                            <a href="{{ route('wallets.show',["name" => "Wallet Dos"]) }}" class="list-group-item list-group-item-action media no-border ">
                                <button type="button" class="btn btn-info btn-block">Wallet Dos</button>
                            </a>
                            <a href="{{ route('wallets.show',["name" => "Wallet tree"]) }}" class="list-group-item list-group-item-action media no-border ">
                                <button type="button" class="btn btn-info btn-block">Wallet tree</button>
                            </a>
                        </div>
                    </div>
                </div>
                {{--<select class="select2 form-control">
                    <option value="1">Wallet bonus</option>
                    <option value="2">Wallet personal</option>
                    <option value="3">Wallet Dos</option>
                    <option value="4">Wallet tree</option>
                </select>--}}
            </div>
        </div>
    </div>
</div>
