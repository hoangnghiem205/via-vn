@extends('layouts.view')


@section('content')
    <!--Home Sections-->
    <section id="about" class="about bg-black fix">
        <div class="overlay"></div>
        <!--End off container -->
        <h3>News & Event</h3>
    </section>
    <!--End off Home Sections-->
    <section id="company-info">
        <div class="container">
            <div class="row">
                <div class="main_features fix roomy-70">

                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    @foreach($posts as $post)
                                    <div class="news-item">
                                        @if($post->img != '')
                                        <div class="news-image">
                                            <img src="{{$post->img}}" alt="">
                                        </div>
                                        @endif
                                        <a href="{{ route('user.news.detail', ['id' => $post->id]) }}">
                                            <h3 class="news-title">{{  $post->{'title_'.Session::get('locale','jp')} }}</h3>
                                        </a>

                                        <div>created at {{$post->created_at}}</div>
                                        <div class="news-content">
                                            {{  $post->{'summary_'.Session::get('locale','jp')} }}
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>



                            <div class="row" style="text-align: center">
                                <?php echo $posts->render(); ?>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
