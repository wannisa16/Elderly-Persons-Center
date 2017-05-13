@extends('elderly.template')

@section('title')
หน้าแรก 
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/home.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content') 

    <div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-fixed-item center">
    </div>
    <div class="carousel-item">
      <img src="images/26.png" alt="">
    </div>
        <div class="carousel-item">
      <img src="images/28.png" alt="">
    </div>
        <div class="carousel-item">
      <img src="images/29.png" alt="">
    </div>
  </div>


        

<div class="container">
    <div class="row">
        <label class="layout-title col m12 s12 z-depth-3 "><center><p class="font-title ">ประชาสัมพันธ์</p></center></label>
    </div>
    
    <div class="row">
        @foreach($publicizes as $publicize)
        @foreach ($publicize->Images as $Image)
        <div class="col s12 m4">
            <div class="card z-depth-5">
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
                    <p>{{ $publicize->content }}</p>
                </div>
            </div>
        </div>
        @endforeach
        @endforeach

        <div class="right"><a href="{{url('/publicizes')}}">ดูทั้งหมด</a></div>
    </div>

    <div class="row">
        <label class="layout-title col m12 s12 z-depth-3">
            <center><p class="font-title ">กิจกรรม</p></center>
        </label>
    </div>

    <div class="row">
        @foreach($activities as $activity)
        @foreach ($activity->Images as $Image)
        <div class="col s12 m4">
            <div class="card z-depth-5">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator"  src="{{ $Image->imagename }}" alt="office" width="150" height="200">
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
        @endforeach
        <div class="right"><a href="{{url('/indexActivity')}}">ดูทั้งหมด</a></div>
    </div>

    <div></div>
    <
</div>

@endsection

@section('footer')
@endsection

@section('script')
<script src="{{ URL::asset('/elderly/js/homee.js') }}"></script>
@endsection