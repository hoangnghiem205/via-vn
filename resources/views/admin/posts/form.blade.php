@extends('admin/layouts/admin_template')

@section('content')

<div class="row">
  <div class="col-md-12">
  @if(isset($post))
    {{ Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'patch', 'class' => 'form-horizontal']) }}
  @else
    {{ Form::open(['route' => 'admin.posts.new', 'method' => 'post', 'class' => 'form-horizontal']) }}
  @endif

    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Post form</h3>
      </div>

      <div class="box-body">
        
          {{ csrf_field() }}
          {{ Form::hidden('author',Auth::user()->name,[]) }}
          <div class="form-group">
            {{ Form::label('title', 'Title', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
            {{ Form::text('title',null,['class' => 'form-control', 'placeholder' => 'Enter title']) }}
            </div>
          </div>
          <div class="form-group">
          {{ Form::label('summary', 'Summary', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
            {{ Form::textarea('summary',null,['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Enter summary']) }}
            </div>
          </div>
          <div class="form-group">
          {{ Form::label('content', 'Content', ['class' => 'col-sm-2 control-label']) }}
            <div class="col-sm-10">
            {{ Form::textarea('content',null,['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Enter content']) }}
            </div>
          </div>
          <div class="form-group">
          {{ Form::label('imange', 'Image', ['class' => 'col-sm-2 control-label']) }}
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
    CKEDITOR.replace('editor1')
  })
</script>
@endpush
