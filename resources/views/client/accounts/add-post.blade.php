@extends('client.layouts.layout')

@section('contents')
<!-- heading-area start -->
<div id="contact-heading" class="heading-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Tài khoản</h2>
            </div>
        </div>
    </div>
</div>
<!-- heading-area end -->

<!-- contact-content-area start -->
<div id="contact-content" class="contact-content-area">
    <div class="container">
        <div class="row mx-md-n5">
            <div class="col-md-4">
                <div class="post-content">
                    <strong>Hello</strong>: <span>{{ auth()->user()->name }}</span>
                    <br>
                    <strong>Email</strong>: <span>{{ auth()->user()->email }}</span>
                    <br>
                    <img width="100px" style="border-radius:50%" src="{{ asset(auth()->user()->avatar ? 'storage/'.auth()->user()->avatar :'') }}" alt="">
                    <form action="{{ route('client.account.update', auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Họ tên</label>
                            <input type="text" name="name" value="{{ auth()->user()->name }}" id="name" class="form-control">
                            <input type="text" name="id" value="{{ auth()->user()->id }}" id="id"  hidden="hidden" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ auth()->user()->email }}" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Avatar</label>
                            <input type="file" name="avatar" id="avatar" class="form-control" value="{{ auth()->user()->avatar }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                    <hr>

                </div>


            </div>
            <div class="col-md-8">
                <div class="post-content" style="text-align:left">
                    <h2 class="section-title">Bài viết của bạn</h2>
                    {{-- <a href="" class="btn btn-primary">Viết bài</a> --}}
                    <hr>
                    <div class="row" style="padding:20px">
                        <form role="form" method="POST" action="{{ route('client.my-posts.store') }}" enctype="multipart/form-data">
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-content-area end -->
@endsection
