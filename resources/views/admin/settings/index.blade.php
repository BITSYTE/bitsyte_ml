@extends ('layouts.adminmain')

@section('content')
    <section>
        <div class="row match-height ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-block">

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="text" class="form-control " id="iconLeft4" placeholder="search">
                                        <div class="form-control-position">
                                            <i class="ft-search success font-medium-4"></i>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <h4 class="separator"><i class=""></i> </h4>

                            <form id="users" class="form" action="">
                                <h4 class=""><i class=""></i> Sections</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-4">
                                            <label>Variable name</label>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="icon-transfer"><i class="fa fa-question icon-tam-sm "></i></a>
                                            {{--<a href="#"></a>--}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-4">
                                            <label>Value</label>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="icon-transfer"><i class="ft-eye icon-tam-sm "></i></a>
                                            <a class="icon-transfer"><i class="ft-edit icon-tam-sm "></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form id="users" class="form" action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-4">
                                            <label>Variable name</label>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="icon-transfer"><i class="fa fa-question icon-tam-sm "></i></a>
                                            {{--<a href="#"></a>--}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-4">
                                            <label>Value</label>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="icon-transfer"><i class="ft-eye icon-tam-sm "></i></a>
                                            <a class="icon-transfer"><i class="ft-edit icon-tam-sm "></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form id="users" class="form" action="">
                                <h4 class="form-section"><i class=""></i> Sections</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-4">
                                            <label>Variable name</label>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="icon-transfer"><i class="fa fa-question icon-tam-sm "></i></a>
                                            {{--<a href="#"></a>--}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-4">
                                            <label>Value</label>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="icon-transfer"><i class="ft-eye icon-tam-sm "></i></a>
                                            <a class="icon-transfer"><i class="ft-edit icon-tam-sm "></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection