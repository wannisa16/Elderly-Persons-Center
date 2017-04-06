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
<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="images/1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="images/3.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="images/1.jpg"></a>
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
                        <span class="card-title activator grey-text text-darken-4"><i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">{{ $activity->title }}</a></p>
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
            <label class="layout-title col m12 s12 z-depth-3 ">
                <center><p class="font-title ">18ชุมชน</p></center>
            </label>
        </div>
        
        
        <div class="row">
            <div class="col s12 m4">
                <ul class="collection">
                    <li class="collection-item dismissable">
                        <div>
                            Alvin
                            <a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
                        </div>
                    </li>
                    <li class="collection-item dismissable">
                        <div>Alvin
                            <a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
                        </div>
                    </li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
      </ul>
            </div>

            <div class="col s12 m4">
                <ul class="collection">
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
      </ul>
            </div>  
            <div class="col s12 m4">
                <ul class="collection">
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item dismissable"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
      </ul>
            </div> 
        </div>
    </div>

@endsection

@section('footer')
@endsection

@section('script')
    <script src="{{ URL::asset('/elderly/js/home.js') }}"></script>
@endsection