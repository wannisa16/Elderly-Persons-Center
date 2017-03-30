@extends('elderly.template')

@section('title') 
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
            <label class="layout-title col m12 s12 z-depth-3 "><center><p class="font-title ">ประชาสัมพันธ์</p></center>
            </label>
        </div>
    
        <div class="row">
            <div class="col s12 m4">
                <div class="card z-depth-5">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator"  src="images/1.jpg" alt="office">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">ชื่อเรื่อง</a></p>
                    </div>
                    <div class="card-reveal" style="display: none; transform: translateY(0px);">
                        <span class="card-title grey-text text-darken-4">ชื่อหัวข้อ<i class="mdi-navigation-close right"></i></span>
                        <p>เนื้อหา</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card z-depth-5">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator"  src="images/1.jpg" alt="office">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">ชื่อเรื่อง</a></p>
                    </div>
                    <div class="card-reveal" style="display: none; transform: translateY(0px);">
                        <span class="card-title grey-text text-darken-4">ชื่อหัวข้อ<i class="mdi-navigation-close right"></i></span>
                        <p>เนื้อหา</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card z-depth-5">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator"  src="images/1.jpg" alt="office">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">ชื่อเรื่อง</a></p>
                    </div>
                    <div class="card-reveal" style="display: none; transform: translateY(0px);">
                        <span class="card-title grey-text text-darken-4">ชื่อหัวข้อ <i class="mdi-navigation-close right"></i></span>
                        <p>เนื้อหา</p>
                    </div>
                </div>
            </div>
        </div>


       

    <div class="row">
        <label class="layout-title col m12 s12 z-depth-3"><center><p class="font-title ">กิจกรรม</p></center>
        </label>
    </div>
    
        <div class="row">
            <div class="col s12 m4">
                <div class="card z-depth-5">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator"  src="images/3.jpg" alt="office">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">ชื่อเรื่อง</a></p>
                    </div>
                    <div class="card-reveal" style="display: none; transform: translateY(0px);">
                        <span class="card-title grey-text text-darken-4">ชื่อหัวข้อ<i class="mdi-navigation-close right"></i></span>
                        <p>เนื้อหา</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card z-depth-5">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator"  src="images/3.jpg" alt="office">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">ชื่อเรื่อง</a>
                        </p>
                    </div>
                    <div class="card-reveal" style="display: none; transform: translateY(0px);">
                        <span class="card-title grey-text text-darken-4">ชื่อหัวข้อ<i class="mdi-navigation-close right"></i></span>
                        <p>เนื้อหา</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card z-depth-5">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator"  src="images/3.jpg" alt="office">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">ชื่อเรื่อง</a></p>
                    </div>
                    <div class="card-reveal" style="display: none; transform: translateY(0px);">
                        <span class="card-title grey-text text-darken-4">ชื่อหัวข้อ <i class="mdi-navigation-close right"></i></span>
                        <p>เนื้อหา</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <label class="layout-title col m12 s12 z-depth-3 "><center><p class="font-title ">18ชุมชน</p></center>
            </label>
        </div>
        
        
        <div class="row">

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
@endsection