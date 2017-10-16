<div id="listWallets">
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
            @foreach($wallets as $wallet)
                <a href="{{ route('wallets.show', ['uuid' => $wallet->uuid]) }}"
                   class="list-group-item list-group-item-action media no-border ">
                    <div class="media-left ">
                        <div class="ptopwallet">
                            <i class="icon-wallet"></i>
                        </div>
                    </div>
                    <div class="media-middle-align list-wallet">
                        <h6 class="list-group-item-heading">
                            <span class="font-medium-3 wallets">{!! $wallet->name !!}</span>
                        </h6>
                        <span class="font-medium-4 saldo">$ {!! number_format($wallet->pivot->balance,2) !!}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
