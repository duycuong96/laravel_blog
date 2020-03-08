@extends('admin.layouts.layouts')

@section('title', 'Thêm mới bài viết')

@section('contents')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">@yield('title')</h1>
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
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">@yield('title')</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" name="title">
                  {{ showError($errors,'title') }}
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="content" class="form-control" id="" rows="5"></textarea>
                    {{ showError($errors,'content') }}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Ảnh</label>
                    <div class="input-group">
                      <input type="file" name="image" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Chuyên mục</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
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
