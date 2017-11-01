@extends('layouts.view')


@section('content')
    <!--Home Sections-->
    <section id="about" class="about bg-black fix">
        <div class="overlay"></div>
        <!--End off container -->
        <h3>Feature</h3>
    </section>
    <!--End off Home Sections-->
    <section id="company-info">
        <div class="container">
            <div class="row">
                <div class="main_features fix roomy-70">
                    <div class="header">
                        <h3 class="header-title">Our Feature</h3>
                        <span class="line"></span>
                    </div>
                    <div class="content">
                        <div id="accordion">
                            @foreach($features as $index => $f)
                            <h3 data-toggle="collapse" data-target="#feature{{$index}}">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                {{$f->{'title_'.Session::get('locale','en')} }}</h3>
                            <div id="feature{{$index}}" class="collapse">
                                    {!! $f->{'content_'.Session::get('locale','en')} !!}
                            </div>
                                @if($features->last() !== $f)
                                <div class="sline"></div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
