@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Chỉnh Sửa</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_testimonial_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Xem Danh Sách</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_testimonial_edit_submit',$testimonial->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Ảnh Đã Tồn Tại</label>
                                    <div><img src="{{ asset('uploads/'.$testimonial->photo) }}" alt="" class="w_200"></div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Ảnh Để Thay Đổi</label>
                                    <div><input type="file" name="photo"></div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tên *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $testimonial->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Chức Vụ *</label>
                                    <input type="text" class="form-control" name="designation" value="{{ $testimonial->designation }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Bình Luận *</label>
                                    <textarea name="comment" class="form-control h_100" cols="30" rows="10">{{ $testimonial->comment }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection