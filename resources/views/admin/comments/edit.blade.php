@extends('admin.layouts.layouts')

@section('title', 'Danh sách comments')

@section('contents')
<!-- Content Header (Page header) -->
<div class="content-header">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Sửa bình luận</h1>
      @if (session('success'))
      <div class="alert alert-primary">
          <strong>{{ session('success') }} </strong>
      </div>
    @endif
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-body">
            <div class="table-responsive">
              <form action="{{ route('comments.update', [$comment->id]) }}" method="post">
                  @csrf
                  <p>Tiêu đề</p>
                  <input class="form-control bg-light border-0 small" value="{{$comment->title}}" type="text" name="title">
                  <p>Nội dung</p>
                  <textarea class="form-control bg-light border-0 small"  rows="5" name="content">{{$comment->content}}</textarea>
                  <p>Trạng thái</p>
                  <select class="form-control bg-light border-0 small" name="is_active">
                      <option disabled value="">Chọn trạng thái</option>
                      <option @if ($comment->is_active == 0) selected @endif value="0">Ẩn</option>
                      <option @if ($comment->is_active == 1) selected @endif value="1">Hiện</option>
                  </select>
                  {{-- <p>Tên bài viết</p> --}}
                  <input type="hidden" name="post_id" value="{{$comment->post_id}}">
                  {{-- <input class="form-control bg-light border-0 small" disabled value="{{$comment->post->title}}" type="text"> --}}

                  <br><br>
                  {{ method_field('PATCH') }}
                  <button type="submit" class="btn btn-danger btn-icon-split btn-lg">
                      <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                      </span>
                      <span class="text">Sửa</span>
                    </button>
              </form>

            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</div>
<!-- /.content -->
@endsection

@section('script')

@parent

<script>
function destroy(){
    return confirm('Bạn có muốn xóa thành viên');
}


</script>

@stop

