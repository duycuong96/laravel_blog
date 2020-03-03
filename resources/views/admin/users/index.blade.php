@extends('admin.layouts.layouts')

@section('title', 'Danh sách users')

@section('contents')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <ol class="breadcrumb">
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
                    <div class="card-header">
                        <h3 class="card-title">Danh sách User</h3>
                        <a href="{{ route('users.create') }}" class="btn btn-primary float-right">Thêm mới</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Bài viết</th>
                                    <th>Vai trò</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @include('admin.users.table', compact('users'))
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

