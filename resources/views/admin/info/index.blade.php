@extends('admin/layouts/admin_template')

@section('content')
<!-- Default box -->
<div class="box">
<div class="box-header with-border">
  <a href="{{ route('admin.info.form') }}" class="btn btn-primary"><i class="fa fa-plus"></i> New Information</a>
</div>
<div class="box-body">
  <table id="example1" class="table table-bordered table-hover">
  <thead>
  <tr>
    <th>Field name</th>
    <th>Field value</th>
    <th>Created_at</th>
    <th>Updated_at</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
  @foreach($info as $item)
    <tr>
      <td>{{$item->name_en}}</td>
      <td>{{$item->value_en}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->updated_at}}</td>
      <td>
        <center> 
        <a href="{{ route('admin.info.editform', ['id'=>$item->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
        <form class="delete" style="display:inline;" action="{{ route('admin.info.delete', ['id'=>$item->id]) }}" method="get">
          <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </form>
        
        </center>
      </td>
    </tr>
  @endforeach
  </tbody>
  
  </table>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->

@endsection

@push('scripts')
<script>

    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });

    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
</script>
@endpush