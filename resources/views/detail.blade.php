@extends('layouts.view')


@section('content')
    <!--Home Sections-->
    <section id="about" class="about bg-black fix">
        <div class="overlay"></div>
        <!--End off container -->
        <h3>Details</h3>
    </section>
    <!--End off Home Sections-->
    <section id="news-detail">
        <div class="container">
            <div class="row">
                <div class="main_features fix roomy-70">
                    <div class="header">
                        <h3 class="header-title">{{$post->{'title_'.Session::get('locale','en')} }}</h3>
                        <h5>{{$post->created_at}}</h5>
                    </div>
                    <div class="content">

                        {!! $post->{'content_'.Session::get('locale','en')} !!}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
