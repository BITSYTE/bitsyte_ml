<div id="walletSelect">
    <div id="title-mobil" class="card-header">
        <h4 class="card-title">My Wallets</h4>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-body px-1">
        <div class="card-block">
            <div class="width-100-per">
                <div class="form-group width-100-per">
                    <div class="btn-group width-cien-per">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle btn-lg width-cien-per"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-wallet"></i> <span>Wallets</span>
                        </button>
                        <div class="dropdown-menu width-cien-per">
                            <a class="dropdown-item" href="{{ route('wallets.show',["name" => "Wallet bonus"]) }}">Wallet bonus</a>
                            <a class="dropdown-item" href="{{ route('wallets.show',["name" => "Wallet personal"]) }}">Wallet personal</a>
                            <a class="dropdown-item" href="{{ route('wallets.show',["name" => "Wallet Dos"]) }}">Wallet Dos</a>
                            {{--<div class="dropdown-divider"></div>--}}
                            <a class="dropdown-item" href="{{ route('wallets.show',["name" => "Wallet tree"]) }}">Wallet tree</a>
                        </div>
                    </div>
                </div>
                {{--<div class="col-sm-12 col-xs-12">
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
                </div>--}}
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
