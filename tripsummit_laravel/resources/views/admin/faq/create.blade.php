@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Tạo Mới Câu Hỏi</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_faq_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Xem Danh Sách</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_faq_create_submit') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Câu Hỏi *</label>
                                    <input type="text" class="form-control" name="question" value="{{ old('question') }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Trả Lời *</label>
                                    <textarea name="answer" class="form-control h_200" cols="30" rows="10">{{ old('answer') }}</textarea>
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