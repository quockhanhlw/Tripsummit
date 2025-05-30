@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Tạo bài viết</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_post_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Xem tất cả</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_post_create_submit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Ảnh *</label>
                                    <div><input type="file" name="photo"></div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tiêu đề *</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Danh mục *</label>
                                    <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nội dung *</label>
                                    <textarea name="description" class="form-control editor" cols="30" rows="10">{{ old('description') }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nội dung ngắn *</label>
                                    <textarea name="short_description" class="form-control h_100" cols="30" rows="10">{{ old('short_description') }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Thể loại *</label>
                                    <select name="blog_category_id" class="form-select">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
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