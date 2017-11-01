<footer id="contact" class="footer action-lage bg-black p-top-80">
    <!--<div class="action-lage"></div>-->
    <div class="container">
        <div class="row">
            <div class="widget_area">
                <div class="col-md-4">
                    <div class="widget_item widget_about">
                        <h5 class="text-white">@lang('footer.about')</h5>
                        <p class="m-top-20">@lang('footer.com_intro')</p>
                        <div class="widget_ab_item m-top-30">
                            <div class="item_icon">
                                <i class="fa fa-location-arrow"></i>
                            </div>
                            <div class="widget_ab_item_text">
                                <h6 class="text-white">@lang('footer.location')</h6>
                                <p>
                                    {{$others['address']}}
                                </p>
                            </div>
                        </div>
                        <div class="widget_ab_item m-top-30">
                            <div class="item_icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="widget_ab_item_text">
                                <h6 class="text-white">@lang('footer.phone') :</h6>
                                <p>{{$others['phone']}}</p>
                            </div>
                        </div>
                        <div class="widget_ab_item m-top-30">
                            <div class="item_icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="widget_ab_item_text">
                                <h6 class="text-white">@lang('footer.email') :</h6>
                                <p>{{$others['email']}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- End off widget item -->
                </div>
                <!-- End off col-md-3 -->

                <div class="col-md-4">
                    <div class="widget_item widget_service sm-m-top-50">
                        <h5 class="text-white">@lang('nav.menu')</h5>
                        <ul class="m-top-20">
                            <li class="m-top-20">
                                <a href="">
                                    <i class="fa fa-angle-right"></i> @lang('nav.home')</a>
                            </li>
                            <li class="m-top-20">
                                <a href="">
                                    <i class="fa fa-angle-right"></i> @lang('nav.about')</a>
                            </li>
                            <li class="m-top-20">
                                <a href="">
                                    <i class="fa fa-angle-right"></i> @lang('nav.service')</a>
                            </li>
                            <li class="m-top-20">
                                <a href="">
                                    <i class="fa fa-angle-right"></i> @lang('nav.feature')</a>
                            </li>
                            <li class="m-top-20">
                                <a href="">
                                    <i class="fa fa-angle-right"></i> @lang('nav.recruitment')</a>
                            </li>
                            <li class="m-top-20">
                                <a href="">
                                    <i class="fa fa-angle-right"></i> @lang('nav.news')</a>
                            </li>
                            <li class="m-top-20">
                                <a href="">
                                    <i class="fa fa-angle-right"></i> @lang('nav.contact')</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End off widget item -->
                </div>
                <!-- End off col-md-3 -->

                <div class="col-md-4">
                    <div class="widget_item widget_newsletter sm-m-top-50">

                        <div class="widget_brand">
                            <a href="" class="text-uppercase">Your Logo</a>
                            <p>Lorem ipsum dolor sit amet consec tetur adipiscing elit nulla aliquet pretium nisi in</p>
                        </div>
                        <ul class="list-inline m-top-20">
                            <li>-
                                <a href="">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-behance"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-dribbble"></i>
                                </a> - </li>
                        </ul>
                    </div>
                    <!-- End off widget item -->
                </div>
                <!-- End off col-md-3 -->
            </div>
        </div>
    </div>
    <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
        <div class="col-md-12">
            <p class="wow fadeInRight" data-wow-duration="1s">
                © 2017 VIA VIETNAM CO., LTD. ALL RIGHTS RESERVED
            </p>
        </div>
    </div>
</footer>