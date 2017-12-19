@extends('layouts.view')


@section('content')
    <!--Home Sections-->

    <section id="home" class="home bg-black fix">
        <div class="overlay"></div>
        <!--End off container -->
    </section>
    <!--End off Home Sections-->


    <!--Featured Section-->
    <section id="features" class="features bg-grey">
        <div class="container">
            <div class="row">
                <div class="main_features fix roomy-70">
                    <div class="header">
                        <h3 class="header-title">@lang('home.service')</h3>
                        <span class="line"></span>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="features_item sm-m-top-30">
                                <div class="f_item_icon">
                                    <i class="fa fa-thumbs-o-up"></i>
                                </div>
                                <div class="f_item_text">
                                    <h3 class="f_title">{{$services[0]->{'title_'.Session::get('locale', 'jp')} }}</h3>
                                    <p>{!!$services[0]->{'content_'.Session::get('locale', 'jp')} !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="features_item sm-m-top-30">
                                <div class="f_item_icon">
                                    <i class="fa fa-tablet"></i>
                                </div>
                                <div class="f_item_text">
                                    <h3 class="f_title">{{$services[1]->{'title_'.Session::get('locale', 'jp')} }}</h3>
                                    <p>{!!$services[1]->{'content_'.Session::get('locale', 'jp')} !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="features_item sm-m-top-30">
                                <div class="f_item_icon">
                                    <i class="fa fa-sliders"></i>
                                </div>
                                <div class="f_item_text">
                                    <h3 class="f_title">{{$services[2]->{'title_'.Session::get('locale', 'jp')} }}</h3>
                                    <p>{!!$services[2]->{'content_'.Session::get('locale', 'jp')} !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="features_item sm-m-top-30">
                                <div class="f_item_icon">
                                    <i class="fa fa-sliders"></i>
                                </div>
                                <div class="f_item_text">
                                    <h3 class="f_title">{{$services[3]->{'title_'.Session::get('locale', 'jp')} }}</h3>
                                    <p>{!!$services[3]->{'content_'.Session::get('locale', 'jp')} !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="features_item sm-m-top-30">
                                <div class="f_item_icon">
                                    <i class="fa fa-thumbs-o-up"></i>
                                </div>
                                <div class="f_item_text">
                                    <h3 class="f_title">{{$services[4]->{'title_'.Session::get('locale', 'jp')} }}</h3>
                                    <p>{!!$services[4]->{'content_'.Session::get('locale', 'jp')} !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="features_item sm-m-top-30">
                                <div class="f_item_icon">
                                    <i class="fa fa-tablet"></i>
                                </div>
                                <div class="f_item_text">
                                    <h3 class="f_title">{{$services[5]->{'title_'.Session::get('locale', 'jp')} }}</h3>
                                    <p>{!!$services[5]->{'content_'.Session::get('locale', 'jp')} !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="features_item sm-m-top-30">
                                <div class="f_item_icon">
                                    <i class="fa fa-sliders"></i>
                                </div>
                                <div class="f_item_text">
                                    <h3 class="f_title">{{$services[6]->{'title_'.Session::get('locale', 'jp')} }}</h3>
                                    <p>{!!$services[6]->{'content_'.Session::get('locale', 'jp')} !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="features_item sm-m-top-30">
                                <div class="f_item_icon">
                                    <i class="fa fa-sliders"></i>
                                </div>
                                <div class="f_item_text">
                                    <h3 class="f_title">{{$services[7]->{'title_'.Session::get('locale', 'jp')} }}</h3>
                                    <p>{!! $services[7]->{'content_'.Session::get('locale', 'jp')} !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End off row -->
        </div>
        <!-- End off container -->
    </section>
    <!-- End off Featured Section-->


    <!--Business Section-->
    <section id="business" class="business roomy-70">
        <div class="container">
            <div class="row">
                <div class="main_business">

                    <div class="col-md-6">
                        <div class="business_item sm-m-top-50">
                            <div class="header">
                                <h3 class="header-title">@lang('home.member')</h3>
                                <span class="line"></span>
                            </div>

                            <p class="m-top-20">@lang('home.member_intro')</p>


                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="member-list">
                            <div class="member-image" style="margin: 0 auto;width: 300px;">
                                <a href="#">
                                    <img width="300" height="422"
                                         src="{{ asset("/images/oanh59.jpg") }}"/></a>
                            </div>
                            <!-- <div class="member-content">
                                <h4 class="member-name">NGHIEM MINH HOANG</h4>
                                <div class="member-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque eleifend in mi
                                    sit amet mattis suspendisse ac ligula
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End off Business section -->

    <!--Test section-->
    <section id="test" class="test bg-grey roomy-60 fix">
        <div class="container">
            <div class="row">
                <div class="main_test fix">

                    <div class="header">
                        <h3 class="header-title">@lang('home.news')</h3>
                        <span class="line"></span>
                    </div>

                    @foreach($posts as $post)
                    <div class="col-md-6">
                        <div class="test_item fix">
                            <div class="item_img">
                                <img src="{{$post->img}}" alt=""/>
                            </div>
                            <div class="item_text">
                                <h5>
                                <a href="{{ route('user.news.detail', ['id' => $post->id]) }}">
                                    {{$post->{'title_'.Session::get('locale', 'jp')} }}
                                </a>
                                
                                </h5>
                                <!-- <p>{{$post->{'summary_'.Session::get('locale', 'jp')} }}</p> -->
                                <h6>{{$post->author }}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End off test section -->
@endsection
