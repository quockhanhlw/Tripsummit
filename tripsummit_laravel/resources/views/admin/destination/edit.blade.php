@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Chỉnh sửa điểm đến</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_destination_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Xem tất cả</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_destination_edit_submit',$destination->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Ảnh nổi bật hiện có</label>
                                    <div><img src="{{ asset('uploads/'.$destination->featured_photo) }}" alt="" class="w_200"></div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Thay đổi ảnh nổi bạt</label>
                                    <div><input type="file" name="featured_photo"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tên *</label>
                                            <input type="text" class="form-control" name="name" value="{{ $destination->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Danh mục *</label>
                                            <input type="text" class="form-control" name="slug" value="{{ $destination->slug }}">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Mô tả *</label>
                                    <textarea name="description" class="form-control editor" cols="30" rows="10">{{ $destination->description }}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Quốc gia</label>
                                            <input type="text" class="form-control" name="country" value="{{ $destination->country }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Ngôn ngữ</label>
                                            <input type="text" class="form-control" name="language" value="{{ $destination->language }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Tiền tệ</label>
                                            <input type="text" class="form-control" name="currency" value="{{ $destination->currency }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Khu vực</label>
                                            <input type="text" class="form-control" name="area" value="{{ $destination->area }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Múi giờ</label>
                                            <input type="text" class="form-control" name="timezone" value="{{ $destination->timezone }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Yêu cầu Visa</label>
                                    <textarea name="visa_requirement" class="form-control editor" cols="30" rows="10">{{ $destination->visa_requirement }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Hoạt động</label>
                                    <textarea name="activity" class="form-control editor" cols="30" rows="10">{{ $destination->activity }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Thời điểm tốt nhất đến thăm</label>
                                    <textarea name="best_time" class="form-control editor" cols="30" rows="10">{{ $destination->best_time }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sức khỏe & an toàn</label>
                                    <textarea name="health_safety" class="form-control editor" cols="30" rows="10">{{ $destination->health_safety }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Bản đồ (iframe code)</label>
                                    <textarea name="map" class="form-control h_100" cols="30" rows="10">{{ $destination->map }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Cập nhập</button>
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