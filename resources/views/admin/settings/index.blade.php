@extends ('layouts.adminmain')

@section('content')
    <div class="row match-height">

        <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="mb-2 mt-2">
                <h5 class="mb-0 text-uppercase">Accordion with Left Icon</h5>
                <p>Use class <code>.collapse-icon.left</code>, for accordion with left icon. Use <code>.accordion-icon-rotate</code>
                    class for rotation animation for icons.</p>
            </div>
            <div class="card">
                <span>settings</span>
            </div>
        </div>
        <div id="description" class=" col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
            <div class="mb-2 mt-2">
                <h5 class="mb-0 text-uppercase">Accordion with Left Icon</h5>
                <p>Use class <code>.collapse-icon.left</code>, for accordion with left icon. Use <code>.accordion-icon-rotate</code>
                    class for rotation animation for icons.</p>
            </div>
            <div id="accordionWrap2" role="tablist" aria-multiselectable="true">
                <div class="card collapse-icon accordion-icon-rotate left">

                    @foreach($settings as $setting)
                        <div id="heading{{ $setting->id }}"  class="card-header">
                            <a data-toggle="collapse" data-parent="#accordionWrap2" href="#accordion{{ $setting->id }}" aria-expanded="false" aria-controls="accordion{{ $setting->id }}" class="card-title lead collapsed">{{ $setting->field }}</a>
                        </div>
                        <div id="accordion{{ $setting->id }}" role="tabpanel" aria-labelledby="heading{{ $setting->id }}" class="card-collapse collapse" aria-expanded="false">
                            <div class="card-body">
                                <div class="card-block">
                                    {{ $data = json_encode($setting->data)  }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection