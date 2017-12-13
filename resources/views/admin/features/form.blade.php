@extends('admin/layouts/admin_template')

@section('content')

    <div class="row">
        <div class="col-md-12">
            @if(isset($feature))
                {{ Form::model($feature, ['route' => ['admin.features.update', $feature->id], 'method' => 'patch', 'class' => 'form-horizontal']) }}
            @else
                {{ Form::open(['route' => 'admin.features.new', 'method' => 'post', 'class' => 'form-horizontal']) }}
            @endif

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Feature form</h3>
                    <ul class="nav nav-pills pull-right">
                        <li class="active"><a data-toggle="pill" href="#form_en">English</a></li>
                        <li><a data-toggle="pill" href="#form_jp">日本語</a></li>
                    </ul>
                </div>

                <div class="box-body tab-content">

                    {{ csrf_field() }}
                    {{ Form::hidden('author',Auth::user()->name,[]) }}
                    <div id="form_en" class="tab-pane fade in active">
                        <div class="form-group">
                            {{ Form::label('title_en', 'Title', ['class' => 'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {{ Form::text('title_en',null,['class' => 'form-control', 'placeholder' => 'Enter title']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('summary_en', 'Summary', ['class' => 'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('summary_en',null,['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Enter summary']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('content_en', 'Content', ['class' => 'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('content_en',null,['id' => 'editor_en', 'class' => 'form-control', 'placeholder' => 'Enter content']) }}
                            </div>
                        </div>
                    </div>
                    <div id="form_jp" class="tab-pane fade">
                        <div class="form-group">
                            {{ Form::label('title_jp', 'Title', ['class' => 'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {{ Form::text('title_jp',null,['class' => 'form-control', 'placeholder' => 'Enter title']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('summary_jp', 'Summary', ['class' => 'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('summary_jp',null,['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Enter summary']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('content_jp', 'Content', ['class' => 'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('content_jp',null,['id' => 'editor_jp', 'class' => 'form-control', 'placeholder' => 'Enter content']) }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('image', 'Image', ['class' => 'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                        {{ Form::text('img',null,['class' => 'form-control', 'placeholder' => 'Enter content']) }}
                        <!-- {{ Form::file('image',['class' => 'form-control']) }} -->
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>

@endsection
@push('scripts')
    <!-- CK Editor -->
    <script src="{{ asset("/bower_components/ckeditor/ckeditor.js") }}"></script>
    <script>
        $(function () {
            CKEDITOR.replace('editor_en');
            CKEDITOR.replace('editor_jp');
        })
    </script>
@endpush
