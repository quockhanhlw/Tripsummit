@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Câu Hỏi Thường Gặp</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_faq_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm Mới</a>
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
                                            <th>STT</th>
                                            <th>Câu Hỏi</th>
                                            <th>Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($faqs as $faq)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $faq->question }}
                                            </td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_faq_edit',$faq->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('admin_faq_delete',$faq->id) }}" class="btn btn-danger" onClick="return confirm('Bạn có chắc muốn xóa?');"><i class="fas fa-trash"></i></a>
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