
<nav class="navbar navbar-default bootsnav navbar-fixed">
    <div class="navbar-top bg-black fix">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="navbar-callus text-left sm-text-center">
                        <ul class="list-inline">
                            <li>
                                <a href="">
                                    <i class="fa fa-phone"></i> @lang('nav.phone') : {{$others['phone']}}</a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-envelope-o"></i> @lang('nav.email') : {{$others['email']}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="navbar-socail text-right sm-text-center">
                        <form action="">
                            {{ csrf_field() }}
                            <input type="hidden" name="locale" value="{{Session::get('locale') == 'jp' ? 'en' : 'jp'}}" />
                            <ul class="list-inline">
                                <li>
                                    <a id="btnChangeLang">
                                        <i class="fa fa-globe"></i> @lang('home.lang')
                                    </a>
                                </li>
                            </ul>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#brand">
                <img src="{{ asset("/images/logo@2x.png") }}" class="logo" alt="">
                <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
            </a>

        </div>
        <!-- End Header Navigation -->

        <!-- navbar menu -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/">@lang('nav.home')</a>
                </li>
                <li>
                    <a href="/about">@lang('nav.about')</a>
                </li>
                <li>
                    <a href="/service">@lang('nav.service')</a>
                </li>
                <li>
                    <a href="/feature">@lang('nav.feature')</a>
                </li>
                <li>
                    <a href="/news">@lang('nav.news')</a>
                </li>
                <li>
                    <a href="/recruitment">@lang('nav.recruitment')</a>
                </li>
                <li>
                    <a href="/contact">@lang('nav.contact')</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>

</nav>