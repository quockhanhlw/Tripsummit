@extends('front.layout.master')

@section('main_content')
@php
$setting = App\Models\Setting::where('id',1)->first();
@endphp
<div class="page-top" style="background-image: url({{ asset('uploads/'.$setting->banner) }})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Điểm Đến</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Điểm Đến</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="destination pt_70 pb_50">
    <div class="container">
        <div class="row">
            @foreach($destinations as $destination)
            <div class="col-lg-3 col-md-6">
                <div class="item pb_25">
                    <div class="photo">
                        <a href="{{ route('destination',$destination->slug) }}"><img src="{{ asset('uploads/'.$destination->featured_photo) }}" alt=""></a>
                    </div>
                    <div class="text">
                        <h2>
                            <a href="{{ route('destination',$destination->slug) }}">{{ $destination->name }}</a>
                        </h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container pb_50">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{ $destinations->links() }}
        </div>
    </div>
</div>
@endsection