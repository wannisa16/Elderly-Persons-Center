@extends('elderly.template')
@section('title')
@endsection

@section('link')

@endsection

@section('band')

@endsection

@section('content')
<div class="container">
    <br><h3><center>ประชาสัมพันธ์</center></h3><br>
    
        <div class="row">

            <div class="col s12 m4 ">
                <div class="card small z-depth-5">
                  <div class="card-image">
                    <img src="images/1.jpg">
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <div class="collection-item ">
                    <a href="#!" class="waves-effect btn secondary-content">อ่านต่อ</a>
                  </div>
                </div>
                </div>
            </div>

        <div class="col s12 m4 ">
            <div class="card small z-depth-5">
                <div class="card-image">
                   <img src="images/2.png">
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <div class="collection-item">
                  <a href="#!" class="waves-effect btn secondary-content">อ่านต่อ</a>
                  </div>
                </div>
                </div>
        </div>

        <div class="col s12 m4 ">
            <div class="card small z-depth-5">
                <div class="card-image">
                    <img src="images/3.jpg">
                </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
            <div class="collection-item">
                <a href="#!" class="waves-effect btn secondary-content">อ่านต่อ</a>
            </div>
            </div>
            </div>
        </div>
        </div>

<br><div class="progress">
  <li class="red lighten-2" > <div class="determinate" style=""  ></div></li>
</div>

<br><h3><center>กิจกรรม</center></h3><br>
    <div class="row">
        <div class="col s12 m4">
            <div class="card small z-depth-5">
              <div class="card-image">
                <img src="images/1.jpg">
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <div class="collection-item">
                <a href="#!" class="waves-effect btn secondary-content">อ่านต่อ</a>
            </div>
            </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card small z-depth-5">
                <div class="card-image">
                    <img src="images/2.png">
                </div>
            <div class="card-content">
                <p>I am a very simple card. </p>
            </div>
            <div class="card-action">
                <div class="collection-item">
                    <a href="#!" class="waves-effect btn secondary-content">อ่านต่อ</a>
                </div>
            </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card small z-depth-5">
                <div class="card-image">
                    <img src="images/3.jpg">
                </div>
                <div class="card-content">
                    <p>123456</p>
                </div>
            <div class="card-action">
                <div class="collection-item">
                    <a href="#!" class="waves-effect btn secondary-content">อ่านต่อ</a>
                </div>
            </div>
            </div>
        </div>
    </div>

<br><div class="progress">
  <li class="red lighten-2" > <div class="determinate" style=""  ></div></li>
</div>

<br><h3><center>18ชุมชน</center></h3><br>
<div class="row">
    <div class="col s12 m12">
    <a href="#!">ชุมชนที่1</a>
    <a href="#!">ชุมชนที่2</a>
    <a href="#!">ชุมชนที่3</a>
    </div>

    <div class="col s12 m4">
    <a href="#!">ชุมชนที่4</a>
    <a href="#!">ชุมชนที่5</a>
    <a href="#!">ชุมชนที่6</a>
    </div>  
    
    <div class="col s12 m4">
    <a href="#!">ชุมชนที่7</a>
    <a href="#!">ชุมชนที่8</a>
    <a href="#!">ชุมชนที่9</a>
    </div>

    <div class="col s12 m4">
    <a href="#!">ชุมชนที่10</a>
    <a href="#!">ชุมชนที่11</a>
    <a href="#!">ชุมชนที่12</a>
    </div>

    <div class="col s12 m4">
    <a href="#!">ชุมชนที่13</a>
    <a href="#!">ชุมชนที่14</a>
    <a href="#!">ชุมชนที่15</a>
    </div>

    <div class="col s12 m4">
    <a href="#!">ชุมชนที่16</a>
    <a href="#!">ชุมชนที่17</a>
    <a href="#!">ชุมชนที่18</a>
    Name:<input type="text" name="name" value="John">
    </div>

</div>
</div>

@endsection

@section('footer')
@endsection

@section('script')
<script>$(document).ready(function(){
      $('.carousel').carousel();
    });
</script>
<<script>$('.carousel').carousel('next');
$('.carousel').carousel('next', 3); // Move next n times.
// Previous slide
$('.carousel').carousel('prev');
$('.carousel').carousel('prev', 4); // Move prev n times.
// Set to nth slide
$('.carousel').carousel('set', 4);</script>
@endsection