@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Ảnh trình chiếu</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_slider_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm mới</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Hình ảnh</th>
                                            <th>Tiêu đề lớn</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sliders as $slider)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/'.$slider->photo) }}" alt="" class="w_200">
                                            </td>
                                            <td>{{ $slider->heading }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_slider_edit',$slider->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('admin_slider_delete',$slider->id) }}" class="btn btn-danger" onClick="return confirm('Bạn có chắc muốn xóa không?');"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection