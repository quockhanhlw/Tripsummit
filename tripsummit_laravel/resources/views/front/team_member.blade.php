@extends('front.layout.master')

@section('main_content')
@php
$setting = App\Models\Setting::where('id',1)->first();
@endphp
<div class="page-top" style="background-image: url({{ asset('uploads/'.$setting->banner) }})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $team_member->name }}</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('team_members') }}">Thành viên nhóm</a></li>
                        <li class="breadcrumb-item active">{{ $team_member->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="team-single pt_70 pb_70 bg_f3f3f3">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="photo">
                    <img src="{{ asset('uploads/'.$team_member->photo) }}" alt="">
                </div>
            </div>
            <div class="col-md-9">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>Tên</td>
                            <td>{{ $team_member->name }}</td>
                        </tr>
                        <tr>
                            <td>Vị trí công việc</td>
                            <td>{{ $team_member->designation }}</td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td>{{ $team_member->address }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $team_member->email }}</td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td>{{ $team_member->phone }}</td>
                        </tr>
                        @if($team_member->facebook != '' || $team_member->twitter != '' || $team_member->linkedin != '' || $team_member->instagram != '')
                        <tr>
                            <td>Các kênh mạng xã hội</td>
                            <td>
                                <ul>
                                    @if($team_member->facebook != '')
                                    <li><a href="{{ $team_member->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                    @if($team_member->twitter != '')
                                    <li><a href="{{ $team_member->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    @endif
                                    @if($team_member->linkedin != '')
                                    <li><a href="{{ $team_member->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif
                                    @if($team_member->instagram != '')
                                    <li><a href="{{ $team_member->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                </ul>
                            </td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>
        
            <div class="col-md-12 mt_30">
                <h4>Lý lịch</h4>
                <div class="description">
                    {!! $team_member->biography !!}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection