@extends('admin/layouts/admin_template')

@section('content')

<div class="row">
  <div class="col-md-12">
  @if(isset($info))
    {{ Form::model($info, ['route' => ['admin.info.update', $info->id], 'method' => 'patch', 'class' => 'form-horizontal']) }}
  @else
    {{ Form::open(['route' => 'admin.info.new', 'method' => 'post', 'class' => 'form-horizontal']) }}
  @endif

    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">User form</h3>
          <ul class="nav nav-pills pull-right">
              <li class="active"><a data-toggle="pill" href="#form_en">English</a></li>
              <li><a data-toggle="pill" href="#form_jp">日本語</a></li>
          </ul>
      </div>

      <div class="box-body tab-content">
        
          {{ csrf_field() }}
          <div id="form_en" class="tab-pane fade in active">
          <div class="form-group">
            {{ Form::label('name_en', 'Field Name', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
            {{ Form::text('name_en',null,['class' => 'form-control', 'placeholder' => 'Enter Field Name']) }}
            </div>
          </div>
          <div class="form-group">
            {{ Form::label('value_en', 'Field Value', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
            {{ Form::textarea('value_en',null,['class' => 'form-control', 'placeholder' => 'Enter Field Name']) }}
            </div>
          </div>
          </div>
          <div id="form_jp" class="tab-pane fade">
              <div class="form-group">
                  {{ Form::label('name_jp', 'Field Name', ['class' => 'col-sm-2 control-label']) }}
                  <div class="col-sm-10">
                      {{ Form::text('name_jp',null,['class' => 'form-control', 'placeholder' => 'Enter Field Name']) }}
                  </div>
              </div>
              <div class="form-group">
                  {{ Form::label('value_jp', 'Field Value', ['class' => 'col-sm-2 control-label']) }}
                  <div class="col-sm-10">
                      {{ Form::textarea('value_jp',null,['class' => 'form-control', 'placeholder' => 'Enter Field Name']) }}
                  </div>
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
