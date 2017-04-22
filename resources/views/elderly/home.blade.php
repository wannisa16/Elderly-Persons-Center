@extends('elderly.template')

@section('title')
หน้าแรก 
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/homee.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')  
<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="images/38.png"></a>
    <a class="carousel-item" href="#two!"><img src="images/41.png"></a>
    <a class="carousel-item" href="#three!"><img src="images/39.png"></a>
    <a class="carousel-item" href="#four!"><img src="images/40.png"></a>
    <a class="carousel-item" href="#five!"><img src="images/41.png"></a>
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
                    <img class="activator"  src="{{ $Image->imagename }}" alt="office">
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
    </div>

    <div class="row">
        <label class="layout-title col m12 s12 z-depth-3">
            <center><p class="font-title ">กิจกรรม</p></center>
        </label>
    </div>

    <div class="row">
        @foreach($activities as $activity)
        @foreach ($publicize->Images as $Image)
        <div class="col s12 m4">
            <div class="card z-depth-5">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator"  src="{{ $Image->imagename }}" alt="office">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        <p>{{ $publicize->title }}</p><i class="mdi-navigation-more-vert right"></i>
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
    </div>

    <div class="row">
        <label class="title-community col m12 s12">
            <p class=" ">ชุมชนที่เกี่ยวข้องภายในจังหวัดภูเก็ต</p>
        </label>
    </div>
    <
</div>

@endsection

@section('footer')
@endsection

@section('script')
<script src="{{ URL::asset('/elderly/js/homee.js') }}"></script>
@endsection