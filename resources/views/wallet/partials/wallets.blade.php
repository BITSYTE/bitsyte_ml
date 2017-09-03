<div class=" col-sm-4 col-xl-4 col-lg-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">My Wallets</h4>
            {{--<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>--}}
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-body px-1">
            <div id="recent-buyers" class="list-group height-300 position-relative">
                <a href="{{ route('wallets.show') }}" class="list-group-item list-group-item-action media no-border ">
                    <div class="media-left ">
                        <div class="ptopwallet">
                            <i class="icon-wallet"></i>
                        </div>
                    </div>
                    <div class="media-middle-align list-wallet">
                        <h6 class="list-group-item-heading">
                            <span class="font-medium-3 wallets">Kristopher Candy</span>
                        </h6>
                        <span class="font-medium-4 saldo">$1,021</span>
                    </div>
                </a>
                <a href="{{ route('wallets.show') }}" class="list-group-item list-group-item-action media no-border ">
                    <div class="media-left ">
                        <div class="ptopwallet">
                            <i class="icon-wallet"></i>
                        </div>
                    </div>
                    <div class="media-middle-align list-wallet">
                        <h6 class="list-group-item-heading">
                            <span class="font-medium-3 wallets">Lawrence Fowler </span>
                        </h6>
                        <span class="font-medium-4 saldo">$2,021</span>
                    </div>
                </a>

                <a href="{{ route('wallets.show') }}" class="list-group-item list-group-item-action media no-border ">
                    <div class="media-left ">
                        <div class="ptopwallet">
                            <i class="icon-wallet"></i>
                        </div>
                    </div>
                    <div class="media-middle-align list-wallet">
                        <h6 class="list-group-item-heading">
                            <span class="font-medium-3 wallets">Roy Clark</span>
                        </h6>
                        <span class="font-medium-4 saldo">$2,815</span>
                    </div>
                </a>
                <a href="{{ route('wallets.show') }}" class="list-group-item list-group-item-action media no-border ">
                    <div class="media-left ">
                        <div class="ptopwallet">
                            <i class="icon-wallet"></i>
                        </div>
                    </div>
                    <div class="media-middle-align list-wallet">
                        <h6 class="list-group-item-heading">
                            <span class="font-medium-3 wallets">Roy Clark</span>
                        </h6>
                        <span class="font-medium-4 saldo">$2,815</span>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>
