<!DOCTYPE html>
<html >
    <head>
        <title>@yield('title')</title>
        
        @yield('link')

            <!--Import Google Icon Font-->
            <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
            <!-- Compiled and minified CSS -->
            <link rel="stylesheet" href="{{url('css/materialize.min.css')}}">
    
            <link href="{{ URL::asset('elderly/css/templates.css') }}" rel="stylesheet" type="text/css" media="all" />

            <link rel="stylesheet" href="{{ URL::asset('fonts/RSU_Regular.ttf') }}">
    
            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        @yield('band')
            <nav>
                <div class="nav-wrapper">
                    <a href="elderly"><img src="{{url('images/logo.png')}}" alt="LOGO" class="img-responsive" /></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="m-bar right hide-on-med-and-down ">
                            <li class="{{ $home }}"><a class="bar" href="{{url('/index')}}">หน้าหลัก</a></li>
                            <li class="{{ $about }}" ><a class="bar" href="{{url('/about')}}">เกี่ยวกับเรา</a></li>
                            <li class="{{ $donate }}" > <a class="bar" href="{{url('/donates/create')}}">บริจาค</a></li>
                            <li class="{{ $pro }}"><a class="bar" href="{{url('/problems/create')}}">ผู้ประสบปัญหาทางสังคม</a></li>
                            <li class="{{ $borads }}"><a class="bar" href="{{url('/borads')}}">บอร์ดสนทนา</a></li>
                            <li class="{{ $contact }}"><a class="bar" href="{{url('contacts')}}">ติดต่อเรา</a></li> 
                        </ul>

                        <ul class="side-nav" id="mobile-demo">
                            <li class="{{ $home }}"><a class="bar" href="{{url('/index')}}">หน้าหลัก</a></li>
                            <li class="{{ $about }}" ><a class="bar" href="{{url('/about')}}">เกี่ยวกับเรา</a></li>
                            <li class="{{ $donate }}"><a class="bar" href="{{url('/donates/create')}}">บริจาค</a></li>
                            <li class="{{ $pro }}" ><a class="bar" href="{{url('/problems/create')}}">ผู้ประสบปัญหาทางสังคม</a></li>
                            <li class="{{ $borads }}"><a class="bar" href="{{url('/borads')}}">บอร์ดสนทนา</a></li>
                            <li class="{{ $contact }}"><a class="bar" href="{{url('contacts')}}">ติดต่อเรา</a></li>
                        </ul>
                </div>
            </nav>
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
                @if (Auth::guest())
                <li><a class="dropdown" href="{{ url('/login') }}" >เข้าสู่ระบบ</a></li>
                @else
                <li><a class="dropdown" href="{{ url('/logout') }}">ออกจากระบบ</a></li>
                <li><a class="dropdown" href="{{ url('/elderlygraph') }}">รายงานข้อมูลผู้สูงอายุ</a></li>
                <li><a class="dropdown" href="{{ url('/indexElderlies') }}">ผู้สูงอายุ</a></li>
                <li><a class="dropdown" href="{{ url('/donates') }}">รายการบริจาค</a></li>
                <li><a class="dropdown" href="{{ url('/problems') }}">รายการผู้ประสบปัญหาทางสังคม</a></li>
                @endif
            </ul>
            <nav >
                <ul class="right ">
                <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
                    @if (Auth::guest())
                        ลงชื่อเข้าใช้
                    @else
                    {{ Auth::user()->name }}
                    @endif<i class="medium material-icons right">perm_identity</i></a></li>
                </ul>
            </nav>
           

        @yield('content')

        @yield('footer')
            <footer class="page-footer center">
                <div class="row">
                    <div class="col l4 s12">
                        <h5>ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต</h5>
                        <p >11/41 หมู่4 ถ.บ้านดอนเชิงทะเล ต.เชิงทะเล อ.ถลาง ภูเก็ต</p>
                    </div>

                    <div class="col l4 offset-l0 s12">
                        <h5>ติดต่อเราได้ที่</h5>
                        <p>โทรศัพท์ : 076-529700,076-529699</p>
                        <p>อีเมล์ : banphuket_132@hotmail.com</p>
                    </div>

                        <div class="col l4 offset-l0 s12">
                            <h5>ติดตามหรือติดต่อได้ที่</h5>
                            <a href="contacts"><img src="{{url('images/email1.png')}}" alt="E-mail" height="40" width="40" class="img-responsive" />&nbsp;&nbsp;</a>
                            <a href="contacts"><img src="{{url('images/call1.png')}}" alt="Call" height="40" width="40" class="img-responsive" />&nbsp;&nbsp;</a>
                            <a href="https://www.facebook.com/profile.php?id=100003943813556&fref=ts"><img src="{{url('images/face.png')}}" alt="facebook" height="40" width="40" class="img-responsive" /></a>
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
           
            
        @yield('script')
         <script src="{{ URL::asset('/elderly/js/template.js') }}"> </script>
    </body>
</html>
