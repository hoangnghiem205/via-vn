@extends('admin/layouts/admin_template')

@section('content')

<div class="row">
  <div class="col-md-12">
  @if(isset($user))
    {{ Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'patch', 'class' => 'form-horizontal']) }}
  @else
    {{ Form::open(['route' => 'admin.users.new', 'method' => 'post', 'class' => 'form-horizontal']) }}
  @endif

    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">User form</h3>
      </div>

      <div class="box-body">
        
          {{ csrf_field() }}
          <div class="form-group">
            {{ Form::label('name', 'Username', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
            {{ Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Enter username']) }}
            </div>
          </div>
          <div class="form-group">
          {{ Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
            {{ Form::email('email',null,['class' => 'form-control', 'placeholder' => 'Enter email']) }}
            </div>
          </div>
          <div class="form-group">
          {{ Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
            {{ Form::password('password',['class' => 'form-control', 'placeholder' => 'Enter password']) }}
            </div>
          </div>
          <div class="form-group">
          {{ Form::label('re-password', 'Re-password', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
            {{ Form::password('re-password',['class' => 'form-control', 'placeholder' => 'Enter re-password']) }}
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
