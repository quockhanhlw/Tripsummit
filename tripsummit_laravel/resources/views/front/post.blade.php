@extends('front.layout.master')

@section('main_content')
@php
$setting = App\Models\Setting::where('id',1)->first();
@endphp
<div class="page-top" style="background-image: url({{ asset('uploads/'.$setting->banner) }})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $post->title }}</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog') }}">Bài Viết</a></li>
                        <li class="breadcrumb-item active">{{ $post->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="post pt_50 pb_50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="left-item">
                    <div class="main-photo">
                        <img src="{{ asset('uploads/'.$post->photo) }}" alt="">
                    </div>
                    <div class="sub">
                        <ul>
                            <li><i class="fas fa-calendar-alt"></i> Thời gian: {{ $post->created_at->format('F d, Y') }}</li>
                            <li><i class="fas fa-th-large"></i> Thể loại: <a href="{{ route('category',$post->blog_category->slug) }}">{{ $post->blog_category->name }}</a></li>
                        </ul>
                    </div>
                    <div class="description">
                        <p>
                            {!! $post->description !!}
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-12">
                <div class="right-item">
                    <h2>Bài viết mới nhất</h2>
                    <ul>
                        @foreach($latest_posts as $latest_post)
                        <li><a href="{{ route('post',$latest_post->slug) }}"><i class="fas fa-angle-right"></i> {{ $latest_post->title }}</a></li>
                        @endforeach
                    </ul>

                    <h2 class="mt_40">Thể loại</h2>
                    <ul>
                        @foreach($categories as $category)
                        <li><a href="{{ route('category',$category->slug) }}"><i class="fas fa-angle-right"></i> {{ $category->name }}</a></li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection