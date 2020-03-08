@extends('admin.layouts.layouts')

@section('title', 'Thêm mới users')

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
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Chỉnh sửa</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('users.update', [$user->id]) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
              <div class="card-body">
                <div class="form-group">
                  <label>Full Name</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                  {{ showError($errors,'name') }}
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                  {{ showError($errors,'email') }}
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" name="phone" value="{{ $user->phone }}">
                    {{ showError($errors,'phone') }}
                  </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" value="{{ $user->password }}">
                  {{ showError($errors,'password') }}
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="avatar" value="{{ $user->avatar }}">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label>Vai trò</label>
                    <select class="custom-select" name="role">
                      <option value="1">User</option>
                      <option value="2">Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Trạng thái: </label>
                    <div class="custom-control custom-radio d-inline">
                      <input class="custom-control-input" type="radio" id="customRadio1" name="is_active" value="1">
                      <label for="customRadio1" class="custom-control-label">Hoạt động</label>
                    </div>
                    <div class="custom-control custom-radio d-inline">
                      <input class="custom-control-input" type="radio" id="customRadio2" name="is_active" value="0" checked="">
                      <label for="customRadio2" class="custom-control-label">Không hoạt động</label>
                    </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (left) -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
<!-- /.content -->
@endsection

@section('script')

@parent
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
    $(document).ready(function () {
    bsCustomFileInput.init();
    });

    </script>

@stop
