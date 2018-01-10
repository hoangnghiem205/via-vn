@extends('layouts.view')


@section('content')
    <!--Home Sections-->
    <section id="about" class="about bg-black fix">
        <div class="overlay"></div>
        <!--End off container -->
        <h3>@lang('nav.contact')</h3>
    </section>
    <!--End off Home Sections-->
    <section id="company-info">
        <div class="container">
            <div class="row">
                <div class="main_features fix roomy-70">
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 sm-col-md-4">
                                    <div class="box">
                                        <div class="box-icon">
                                            <span>
                                                <i class="fa fa-phone fa-2x"></i>
                                            </span>
                                        </div>
                                        <div class="box-content">
                                            <h5 class="box-title">@lang('nav.phone')</h5>
                                            <p class="box-desc">{{$others['phone']}}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 sm-col-md-4">
                                    <div class="box">
                                        <div class="box-icon">
                                            <span>
                                                <i class="fa fa-home fa-2x"></i>
                                            </span>
                                        </div>
                                        <div class="box-content" style="width: 250px;">
                                            <h5 class="box-title">@lang('footer.address')</h5>
                                            <p class="box-desc">{{$others['address']}} </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 sm-col-md-4">
                                    <div class="box">
                                        <div class="box-icon">
                                            <span>
                                                <i class="fa fa-envelope fa-2x"></i>
                                            </span>
                                        </div>
                                        <div class="box-content">
                                            <h5 class="box-title">@lang('nav.email')</h5>
                                            <p class="box-desc">{{$others['email']}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 contact">
                                    {{ Form::open(['route' => 'user.contact.send', 'method' => 'post']) }}
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            {{ Form::label('name', Lang::get('contact.name')) }}
                                            {{ Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Enter your name']) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('email', Lang::get('contact.email')) }}
                                            {{ Form::text('email',null,['class' => 'form-control', 'placeholder' => 'Enter your email']) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('subject', Lang::get('contact.subject')) }}
                                            {{ Form::text('subject',null,['class' => 'form-control', 'placeholder' => 'Subject']) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('message', Lang::get('contact.message')) }}
                                            {{ Form::textarea('message',null,['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Enter summary']) }}
                                        </div>
                                        {{--{{ Form::submit('Save', ['class' => 'btn btn-primary']) }}--}}
                                        <button type="submit" class="btn btn-primary">@lang('contact.send')</button>
                                    {{ Form::close() }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
