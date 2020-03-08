@extends('admin.layouts.layouts')

@section('title', 'Chỉnh sửa bài viết')

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
              <h3 class="card-title">Bài viết</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('posts.update', [$post->id]) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
              <div class="card-body">
                <div class="form-group">
                  <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                  {{ showError($errors,'title') }}
                </div>
                <div class="form-group">
                  <label>Content</label>
                  <textarea name="content" class="form-control" id="" rows="5">{{ $post->content }}</textarea>
                  {{ showError($errors,'content') }}
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Ảnh</label>
                    <div class="input-group">

                      <input type="file" name="image" class="form-control" value="{{ $post->image }}" >
                    </div>

                  </div>
                  <img src="{{ $post->image }}" alt="" style="width:50%">
                <div class="form-group">
                    <label for="">Chuyên mục</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}"
                                @if ($category->id == $post->category_id)
                                    echo 'selected';
                                @endif
                            >
                                {{$category->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{ $post->like }}" disabled>
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
