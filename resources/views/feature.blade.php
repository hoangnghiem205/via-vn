@extends('layouts.view')


@section('content')
    <!--Home Sections-->
    <section id="about" class="about bg-black fix">
        <div class="overlay"></div>
        <!--End off container -->
        <h3>Seminar</h3>
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
                                    @foreach($features as $index => $f)
                                    <div class="news-item">
                                        @if($f->img != '')
                                        <div class="news-image">
                                            <img src="{{$f->img}}" alt="">
                                        </div>
                                        @endif
                                        <a href="{{ route('user.news.detail', ['id' => $f->id]) }}">
                                            <h3 class="news-title">{{  $f->{'title_'.Session::get('locale','jp')} }}</h3>
                                        </a>

                                        <div>created at {{$f->created_at}}</div>
                                        @if($f->{'summary_'.Session::get('locale','jp')} != '')
                                        <div class="news-content">
                                            {{  $f->{'summary_'.Session::get('locale','jp')} }}
                                        </div>
                                        @endif
                                    </div>
                                    @endforeach

                                </div>
                            </div>



                            <div class="row" style="text-align: center">
                                <?php echo $features->render(); ?>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
