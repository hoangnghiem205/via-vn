@extends('admin/layouts/admin_template')

@section('content')
<!-- Default box -->
<div class="box">
<div class="box-header with-border">
  <a href="{{ route('admin.recruit.form') }}" class="btn btn-primary"><i class="fa fa-plus"></i> New Recruit</a>
</div>
<div class="box-body">
  <table id="example1" class="table table-bordered table-hover">
  <thead>
  <tr>
    <th>Title</th>
    <th>Author</th>
    <th>Created_at</th>
    <th>Updated_at</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
  @foreach($recruits as $recruit)
    <tr>
      <td>{{$recruit->title_en}}</td>
      <td>{{$recruit->author}}</td>
      <td>{{$recruit->created_at}}</td>
      <td>{{$recruit->updated_at}}</td>
      <td>
        <center> 
        <a href="{{ route('admin.recruit.editform', ['id'=>$recruit->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
        <form class="delete" style="display:inline;" action="{{ route('admin.recruit.delete', ['id'=>$recruit->id]) }}" method="get">
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