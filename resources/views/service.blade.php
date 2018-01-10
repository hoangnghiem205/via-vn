@extends('layouts.view')


@section('content')
    <!--Home Sections-->
    <section id="about" class="about bg-black fix">
        <div class="overlay"></div>
        <!--End off container -->
        <h3>@lang('nav.service')</h3>
    </section>
    <!--End off Home Sections-->
    <section id="company-service">
        <div class="container">
            <div class="row">
                <div class="main_features fix roomy-70">
                    @foreach($services as $service)
                    <div class="service-item">
                        <div class="header">
                            <h3 class="header-title">{{$service->{'title_'.Session::get('locale','jp')} }}</h3>
                            <span class="line"></span>
                        </div>
                        <div class="content">
                            <p>{!! $service->{'content_'.Session::get('locale','jp')} !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
