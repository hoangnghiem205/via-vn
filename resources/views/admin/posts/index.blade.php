@extends('admin/layouts/admin_template')

@section('content')
<!-- Default box -->
<div class="box">
<div class="box-header with-border">
  <a href="{{ route('admin.posts.form') }}" class="btn btn-primary"><i class="fa fa-plus"></i> New Post</a>
</div>
<div class="box-body">
  <table id="example1" class="table table-bordered table-hover" data-page-length='25'>
  <thead>
  <tr>
    <th>Title</th>
    <th>Created_at</th>
    <th>Action</th>
    <th>Order</th>
  </tr>
  </thead>
  <tbody>
  @foreach($posts as $key => $post)
    <tr data-id="{{$post->id}}" data-sort="{{$post->sort}}">
      <td style="width: 700px;">{{$post->title_jp}}</td>
      <td style="width: 120px;">{{$post->created_at}}</td>
      <td>
        <center> 
        <a href="{{ route('admin.posts.editform', ['id'=>$post->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
        <form class="delete" style="display:inline;" action="{{ route('admin.posts.delete', ['id'=>$post->id]) }}" method="get">
          <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </form>
        
        </center>
      </td>
      <td style="width: 90px;">
      <center>
        
        <a onclick="up({{$post->id}})" class="btn btn-default btn-up {{($key==0)?'hide':''}} "><i class="fa fa-arrow-up"></i></a>
        <a onclick="down({{$post->id}})" class="btn btn-default btn-down"><i class="fa fa-arrow-down"></i></a>
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

    function up(src) {
      reorder(src,1);
    }

    function reorder(src,dist) {
      $.get( "/admin/posts/reorder/"+src+"/"+dist, function( data ) {
        location.reload();
      });
    }

    function down(src) {
      reorder(src, 0);
    }
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });

    var table = $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    })

    // disableBtn();
    // table.on( 'draw', disableBtn );

    // function disableBtn() {
    //   var fstItem = $('#example1 tbody').children().first().children().last().children().children().first();
    //   // var lstItem = $('#example1 tbody').children().last().children().last().children().last().children().last();
    //   // $(lstItem).addClass("hide");
    //   $(fstItem).addClass("hide");
    // }
    
</script>
@endpush