@extends('front.layout.master')

@section('main_content')
@php
$setting = App\Models\Setting::where('id',1)->first();
@endphp
<div class="page-top" style="background-image: url({{ asset('uploads/'.$setting->banner) }})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Liên Hệ Chúng Tôi</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Liên Hệ Chúng Tôi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact pt_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact-form pb_70">
                    <form action="{{ route('contact_submit') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Tên</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Địa Chỉ Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tin Nhắn</label>
                            <textarea class="form-control" rows="3" name="comment"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit">
                                Gửi Tin Nhắn
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="map">
                    {!! $contact_item->map_code !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection