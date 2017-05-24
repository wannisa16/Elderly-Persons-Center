@extends('elderly.template')

@section('title')
หน้าแรก 
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/homes.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content') 
<div class="row">
    <div class="col m12 s12">
        <img src="images/cover.png" alt="" class="img-responsive">
    </div>
</div>

<div class="container">
    <div class="row">
        <label class="layout-title col m12 s12 z-depth-3 "><center><p class="font-title "><h4>ประชาสัมพันธ์</h4></p></center></label>
    </div>
    
    <div class="row">
        @foreach($publicizes as $publicize)
        @foreach ($publicize->Images as $Image)
        <div class="col s12 m4">
            <div class="card z-depth-2">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator"  src="{{ $Image->imagename }}" alt="office" width="150" height="200">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        <p>{{ $publicize->title }}</p><i class="mdi-navigation-more-vert right"></i>
                    </span>                
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">{{ $publicize->title }}<i class="mdi-navigation-close right"></i></span>
                    <p>{{$publicize->content }}</p>
                </div>
            </div>
        </div>
        @endforeach
        @endforeach

        <div class="right"><a href="{{url('/publicizes')}}"><h5>ดูทั้งหมด</h5></a></div>
    </div>

    <div class="row">
        <label class="layout-title col m12 s12 z-depth-3">
            <center><p class="font-title "><h4>กิจกรรม</h4></p></center>
        </label>
    </div>

    <div class="row">
        @foreach($activities as $activity)
        @foreach ($activity->Images as $Image)
        {{--*/$i = $Image->imagename/*--}}
        @endforeach
        <div class="col s12 m4">
            <div class="card z-depth-2">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator"  src="{{ $i}}" alt="office" width="150" height="200">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        <p>{{ $activity->title }}</p><i class="mdi-navigation-more-vert right"></i>
                    </span>                
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">{{ $activity->title }}<i class="mdi-navigation-close right"></i></span>
                    <p>{{ $activity->content }}</p>
                </div>
            </div>
        </div>
        
        @endforeach
        <div class="right"><a href="{{url('/indexActivity')}}"><h5>ดูทั้งหมด</h5></a></div>
    </div>

    <div></div>
</div>

@endsection

@section('footer')
@endsection

@section('script')
<script src="{{ URL::asset('/elderly/js/home.js') }}"></script>
@endsection