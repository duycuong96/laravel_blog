@extends('admin.layouts.layouts')

@section('title', 'Danh sách bài viết')

@section('contents')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Danh sách viết</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Starter Page</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Bài viết</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id}}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->like }}</td>
                                        <td></td>
                                        <td>
                                        <a class="btn btn-primary btn-sm" href="{{ url('admin/posts/'. $post->id . '/edit') }}">Sửa</a>
                                            {{-- <a onclick="return destroy()" href="{{ route('posts.destroy') }}" class="btn btn-danger btn-sm">Xóa</a> --}}
                                            <form action="{{ url('admin/posts' , $post->id ) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger btn-sm" onclick="return destroy()">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.card -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
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

