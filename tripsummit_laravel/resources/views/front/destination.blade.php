@extends('front.layout.master')

@section('main_content')
@php
$setting = App\Models\Setting::where('id',1)->first();
@endphp
<div class="page-top" style="background-image: url({{ asset('uploads/'.$setting->banner) }})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $destination->name }}</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('destinations') }}">Điểm Đến</a></li>
                        <li class="breadcrumb-item active">{{ $destination->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="destination-detail pt_50 pb_50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="main-item mb_50">
                    <div class="main-photo">
                        <img src="{{ asset('uploads/'.$destination->featured_photo) }}" alt="">
                    </div>
                </div>
                <div class="main-item mb_50">
                    <h2>
                        Mô tả
                    </h2>
                    {!! $destination->description !!}
                </div>


                @if($packages->count()>0)
                <div class="main-item mb_50">
                    <h2>Gói du lịch</h2>
                    <div class="package">
                        <div class="row">
                            @foreach($packages as $item)
                            <div class="col-lg-4 col-md-6">
                                <div class="item pb_25">
                                    <div class="photo">
                                        <a href="{{ route('package',$item->slug) }}"><img src="{{ asset('uploads/'.$item->featured_photo) }}" alt=""></a>
                                        <div class="wishlist">
                                            <a href="{{ route('wishlist',$item->id) }}"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <div class="price">
                                            ${{ $item->price }} @if($item->old_price != '')<del>${{ $item->old_price }}</del>@endif
                                        </div>
                                        <h2>
                                            <a href="{{ route('package',$item->slug) }}">{{ $item->name }}</a>
                                        </h2>

                                        @if($item->total_score || $item->total_rating)
                                        <div class="review">
                                            @php
                                            $rating = $item->total_score/$item->total_rating;
                                            @endphp
                                            @for($i=1; $i<=5; $i++)
                                                @if($i <= $rating)
                                                    <i class="fas fa-star"></i>
                                                @elseif($i-0.5 <= $rating)
                                                    <i class="fas fa-star-half-alt"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                            ({{ $item->reviews->count() }} Đánh giá)
                                        </div>
                                        @else
                                        <div class="review">
                                            @for($i=1; $i<=5; $i++)
                                                <i class="far fa-star"></i>
                                            @endfor
                                            ({{ $item->reviews->count() }} Đánh giá)
                                        </div>
                                        @endif
                                        <div class="element">
                                            <div class="element-left">
                                                <i class="fas fa-plane-departure"></i> {{ $item->destination->name }}
                                            </div>
                                            <div class="element-right">
                                                <i class="fas fa-th-large"></i> {{ $item->package_amenities->count() }} Tiện nghi
                                            </div>
                                        </div>
                                        <div class="element">
                                            <div class="element-left">
                                                <i class="fas fa-users"></i> {{ $item->tours->count() }} Tours
                                            </div>
                                            <div class="element-right">
                                                <i class="fas fa-clock"></i> {{ $item->package_itineraries->count() }} Ngày
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                

                @if($destination->country != '' || $destination->language != '' || $destination->currency != '' || $destination->area != '' || $destination->timezone != '' || $destination->visa_requirement != '' || $destination->activity != '' || $destination->best_time != '' || $destination->health_safety != '')
                <div class="main-item mb_50">
                    <h2>
                        Thông tin
                    </h2>
                    <div class="summary">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                @if($destination->country != '')
                                <tr>
                                    <td><b>Quốc gia</b></td>
                                    <td>{{ $destination->country }}</td>
                                </tr>
                                @endif
                                @if($destination->language != '')
                                <tr>
                                    <td><b>Ngôn ngữ</b></td>
                                    <td>{{ $destination->language }}</td>
                                </tr>
                                @endif
                                @if($destination->currency != '')
                                <tr>
                                    <td><b>Tiền tệ</b></td>
                                    <td>{{ $destination->currency }}</td>
                                </tr>
                                @endif
                                @if($destination->area != '')
                                <tr>
                                    <td><b>Khu vực</b></td>
                                    <td>
                                        {{ $destination->area }}
                                    </td>
                                </tr>
                                @endif
                                @if($destination->timezone != '')
                                <tr>
                                    <td><b>Múi giờ</b></td>
                                    <td>
                                        {{ $destination->timezone }}
                                    </td>
                                </tr>
                                @endif
                                @if($destination->visa_requirement != '')
                                <tr>
                                    <td><b>Yêu cầu Visa</b></td>
                                    <td>
                                        {!! $destination->visa_requirement !!}
                                    </td>
                                </tr>
                                @endif
                                @if($destination->activity != '')
                                <tr>
                                    <td><b>Hoạt động</b></td>
                                    <td>
                                        {!! $destination->activity !!}
                                    </td>
                                </tr>
                                @endif
                                @if($destination->best_time != '')
                                <tr>
                                    <td><b>Thời điểm tốt nhất đến</b></td>
                                    <td>
                                        {!! $destination->best_time !!}
                                    </td>
                                </tr>
                                @endif
                                @if($destination->health_safety != '')
                                <tr>
                                    <td><b>Sức khỏe và an toàn</b></td>
                                    <td>
                                        {!! $destination->health_safety !!}
                                    </td>
                                </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if($destination_photos->count() > 0)
                <div class="main-item mb_50">
                    <h2>
                        Ảnh 
                    </h2>
                    <div class="photo-all">
                        <div class="row">
                            @foreach($destination_photos as $photo)
                            <div class="col-md-6 col-lg-3">
                                <div class="item">
                                    <a href="{{ asset('uploads/'.$photo->photo) }}" class="magnific">
                                        <img src="{{ asset('uploads/'.$photo->photo) }}" alt="">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                @if($destination_videos->count() > 0)
                <div class="main-item mb_50">
                    <h2>
                        Videos
                    </h2>
                    <div class="video-all">
                        <div class="row">
                            @foreach($destination_videos as $video)
                            <div class="col-md-6 col-lg-6">
                                <div class="item">
                                    <a class="video-button" href="http://www.youtube.com/watch?v={{ $video->video }}">
                                        <img src="http://img.youtube.com/vi/{{ $video->video }}/0.jpg" alt="">
                                        <div class="icon">
                                            <i class="far fa-play-circle"></i>
                                        </div>
                                        <div class="bg"></div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                @if($destination->map != '')
                <div class="main-item">
                    <h2>Bản đồ</h2>
                    <div class="location-map">
                        {!! $destination->map !!}
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection