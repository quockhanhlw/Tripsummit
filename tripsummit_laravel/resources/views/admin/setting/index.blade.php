@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Chỉnh sửa cài đặt</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_setting_update',$setting->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Logo hiện tại</label>
                                            <div><img src="{{ asset('uploads/'.$setting->logo) }}" alt="" class="w_200"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Thay đổi logo</label>
                                            <div><input type="file" name="logo"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Favicon hiện tại</label>
                                            <div><img src="{{ asset('uploads/'.$setting->favicon) }}" alt="" class="w_50"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Thay đổi favicon</label>
                                            <div><input type="file" name="favicon"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Banner hiện tại</label>
                                            <div><img src="{{ asset('uploads/'.$setting->banner) }}" alt="" class="w_200"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Thay đổi banner</label>
                                            <div><input type="file" name="banner"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Số điện thoại thanh trên cùng</label>
                                    <input type="text" name="top_bar_phone" class="form-control" value="{{ $setting->top_bar_phone }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email thanh trên cùng</label>
                                    <input type="text" name="top_bar_email" class="form-control" value="{{ $setting->top_bar_email }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Địa chỉ chân trang</label>
                                    <input type="text" name="footer_address" class="form-control" value="{{ $setting->footer_address }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Số điện thoại chân trang</label>
                                    <input type="text" name="footer_phone" class="form-control" value="{{ $setting->footer_phone }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email chân trang</label>
                                    <input type="text" name="footer_email" class="form-control" value="{{ $setting->footer_email }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" name="facebook" class="form-control" value="{{ $setting->facebook }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" name="twitter" class="form-control" value="{{ $setting->twitter }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">YouTube</label>
                                    <input type="text" name="youtube" class="form-control" value="{{ $setting->youtube }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Linkedin</label>
                                    <input type="text" name="linkedin" class="form-control" value="{{ $setting->linkedin }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" name="instagram" class="form-control" value="{{ $setting->instagram }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nội dung bản quyền</label>
                                    <input type="text" name="copyright" class="form-control" value="{{ $setting->copyright }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
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