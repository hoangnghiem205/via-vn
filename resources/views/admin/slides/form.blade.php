@extends('admin/layouts/admin_template')

@section('content')

<div class="row">
  <div class="col-md-12">
  @if(isset($slide))
    {{ Form::model($slide, ['route' => ['admin.slides.update', $slide->id], 'method' => 'patch', 'class' => 'form-horizontal']) }}
  @else
    {{ Form::open(['route' => 'admin.slides.new', 'method' => 'post', 'class' => 'form-horizontal']) }}
  @endif

    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Slide form</h3>
      </div>

      <div class="box-body">
        
          {{ csrf_field() }}
          <div class="form-group">
            {{ Form::label('name', 'Field name', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
            {{ Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Enter field name']) }}
            </div>
          </div>
          <div class="form-group">
          {{ Form::label('value', 'Value', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
            {{ Form::text('value',null,['class' => 'form-control', 'placeholder' => 'Enter value']) }}
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
