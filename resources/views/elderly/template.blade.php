<!DOCTYPE html>
<html >
    <head>
        <title>@yield('title')</title>
        
        @yield('link')

            <!--Import Google Icon Font-->
            <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
            <!-- Compiled and minified CSS -->
            <link rel="stylesheet" href="{{url('css/materialize.min.css')}}">
    
            <link href="{{ URL::asset('elderly/css/templateLayout.css') }}" rel="stylesheet" type="text/css" media="all" />

            <link rel="stylesheet" href="{{ URL::asset('fonts/RSU_Regular.ttf') }}">
    
            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        @yield('band')
            
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav >
    <ul class="right ">
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Login<i class="medium material-icons right">perm_identity</i></a></li>
    </ul>
  
</nav>
            <nav>
                <div class="nav-wrapper">
                    <a href="elderly"><img src="{{url('images/logo.png')}}" alt="LOGO" class="img-responsive" /></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="m-bar right hide-on-med-and-down ">
                            <li class="active"><a  href="collapsible.html">หน้าหลัก</a></li>
                            <li><a href="elderly/about">เกี่ยวกับเรา</a></li>
                            <li><a href="elderly/donate">บริจาค</a></li>
                            <li><a href="badges.html">ผู้ประสบปัญหาทางสังคม</a></li>
                            <li><a href="elderly/board">บอร์ดสนทนา</a></li>
                            <li><a href="elderly/contact">ติดต่อเรา</a></li> 
                        </ul>

                        <ul class="side-nav" id="mobile-demo">
                            <li class="active"><a href="collapsible.html">หน้าหลัก</a></li>
                            <li><a href="elderly/about">เกี่ยวกับเรา</a></li>
                            <li><a href="elderly/donate">บริจาค</a></li>
                            <li><a href="badges.html">ผู้ประสบปัญหาทางสังคม</a></li>
                            <li><a href="elderly/board">บอร์ดสนทนา</a></li>
                            <li><a href="elderly/contact">ติดต่อเรา</a></li>
                        </ul>
                </div>
            </nav>

        @yield('content')

        @yield('footer')
            <footer class="page-footer center">
                <div class="row">
                    <div class="col l4 s12">
                        <h5>สถานสงเคราะห์ผู้สูงอายุ จังหวัดภูเก็ต</h5>
                        <p >11/41 หมู่4 ถ.บ้านดอนเชิงทะเล ต.เชิงทะเล อ.ถลาง ภูเก็ต</p>
                    </div>

                    <div class="col l4 offset-l0 s12">
                        <h5>ติดต่อเราได้ที่</h5>
                        <p>โทรศัพท์ : 086 952 5113</p>
                        <p>อีเมล์ : nartruthai.nkr@gmail.com</p>
                    </div>

                        <div class="col l4 offset-l0 s12">
                            <h5>ติดตามหรือติดต่อได้ที่</h5>
                            <a href="template"><img src="{{url('images/email1.png')}}" alt="E-mail" height="40" width="40" class="img-responsive" />&nbsp;&nbsp;</a>
                            <a href="template"><img src="{{url('images/call1.png')}}" alt="Call" height="40" width="40" class="img-responsive" />&nbsp;&nbsp;</a>
                            <a href="template"><img src="{{url('images/face.png')}}" alt="facebook" height="40" width="40" class="img-responsive" /></a>
                        </div>
                </div>
                    
                    <div class="footer-copyright">
                        <div class="left">
                            © 2014 Copyright Text
                        </div>
                    </div>
            </footer>
       
            <!--Import jQuery before materialize.js-->
            <script type="text/javascript" src="{{url('js/jquery-2.1.1.min.js')}}"></script>
            <script type="text/javascript" src="{{url('js/materialize.min.js')}}"></script>     
            <script src="{{ URL::asset('/elderly/js/template.js') }}"> </script>
            

            @yield('script')

    </body>
</html>
