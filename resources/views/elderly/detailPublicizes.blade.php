@extends('elderly.template')
@section('title')
กิจกรรมในศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/detailPublicizes.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="detailPublicizes z-depth-2 center-align"><h4>{{$publicize->title}}</h4>
    </div>
    
    @foreach($images as $image)
    <div class="card">
        <div class="card-image">
        @if (!Auth::guest())
            <a class="right" href="../delete/image/{{ $image->imageID }}"><i class="material-icons">delete</i>ลบ</a>
        @endif
            <img src="{{url($image->imagename) }}" alt="">
        </div>
    </div>
    @endforeach
    <div class="card card-define col m12">
        <div class="row">
            <div class="layout-text col s12 m12">
                <p>{{$publicize->content}}</p>
            </div>
        </div>
    </div>
    
    @if (Auth::guest())
    @else    
    <div class="row">
        <div class="col s6 right-align">
            <a href="../editFormPublicizes/{{ $publicize->publicizeID }}" type="submit" class="edit waves-effect waves-light btn-large"><i class="tiny material-icons left">mode_edit</i>แก้ไข</a>
        </div>
        <div class="col s6">
            <a href="../publicize/delete/{{ $publicize->publicizeID  }}" class="cancel waves-effect waves-light btn-large"><i class="tiny material-icons left">delete</i>ลบ</a>
        </div>
    </div>
    @endif
</div>

@endsection

@section('footer')
@endsection

@section('script')
<script src="{{ asset('/elderly/js/detailActivity.js') }}"></script>
@endsection