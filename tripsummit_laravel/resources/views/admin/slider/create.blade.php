@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Tạo ảnh trình chiếu</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_slider_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Xem tất cả</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_slider_create_submit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Hình ảnh *</label>
                                    <div><input type="file" name="photo"></div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tiêu đề lớn *</label>
                                    <input type="text" class="form-control" name="heading" value="{{ old('heading') }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nội dung *</label>
                                    <textarea name="text" class="form-control h_100" cols="30" rows="10">{{ old('text') }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nội dung nút</label>
                                    <input type="text" class="form-control" name="button_text" value="{{ old('button_text') }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Liên kết của nút</label>
                                    <input type="text" class="form-control" name="button_link" value="{{ old('button_link') }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Lưu</button>
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