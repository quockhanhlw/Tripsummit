@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Đặc điểm</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_feature_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm mới</a>
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
                                            <th>Xem trước biểu tượng</th>
                                            <th>Biểu tượng</th>
                                            <th>Tiêu đề lớn</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($features as $feature)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <i class="{{ $feature->icon }} fz_30"></i>
                                            </td>
                                            <td>
                                                {{ $feature->icon }}
                                            </td>
                                            <td>{{ $feature->heading }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_feature_edit',$feature->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('admin_feature_delete',$feature->id) }}" class="btn btn-danger" onClick="return confirm('Bạn có chắc muốn xóa không?');"><i class="fas fa-trash"></i></a>
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