<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        @yield('link')

            <!--Import Google Icon Font-->
            <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
            <!-- Compiled and minified CSS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    
            <link href="{{ URL::asset('elderly/css/templateLayout.css') }}" rel="stylesheet" type="text/css" media="all" />

            <link rel="stylesheet" href="{{ URL::asset('fonts/RSU_Regular.ttf') }}">
    
            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        @yield('band')

            <!-- Dropdown Structure -->
             <ul id="dropdown1" class="dropdown-content">
                <li><a href="#!">เข้าสู่ระบบ</a></li>
                <li class="divider"></li>
                <li><a href="#!">ข้อมูลผู้สูงอายุ</a></li>
                <li class="divider"></li>
                <li><a href="#!">ส่งไฟล์</a></li>
                <li class="divider"></li>
                <li><a href="#!">ปฏิทิน</a></li>
            </ul>

            <nav class="white">
                <div class="nav-wrapper">
                    <a href="elderly"><img src="images/logo.png" alt="LOGO" class="img-responsive" /></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="m-bar right hide-on-med-and-down ">
                            <li class="active"><a  href="collapsible.html">หน้าหลัก</a></li>
                            <li><a href="elderly/about">เกี่ยวกับเรา</a></li>
                            <li><a href="elderly/donate">บริจาค</a></li>
                            <li><a href="badges.html">ผู้ประสบปัญหาทางสังคม</a></li>
                            <li><a href="elderly/board">บอร์ดสนทนา</a></li>
                            <li><a href="elderly/contact">ติดต่อเรา</a></li>
                            <!-- Dropdown Trigger -->
                            <li><a class="dropdown-button  text-accent-4" href="#!" data-activates="dropdown1"><i class="material-icons right">arrow_drop_down</i></a></li>
                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li class="active"><a href="collapsible.html">หน้าหลัก</a></li>
                            <li><a href="elderly/about">เกี่ยวกับเรา</a></li>
                            <li><a href="elderly/donate">บริจาค</a></li>
                            <li><a href="badges.html">ผู้ประสบปัญหาทางสังคม</a></li>
                            <li><a href="elderly/board">บอร์ดสนทนา</a></li>
                            <li><a href="elderly/contact">ติดต่อเรา</a></li>
                            <!-- Dropdown Trigger -->
                            <li><a class="dropdown-button  text-accent-4" href="#!" data-activates="dropdown1"><i class="material-icons right">arrow_drop_down</i></a></li>
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
                            <a href="template"><img src="images/email1.png" alt="E-mail" height="40" width="40" class="img-responsive" />&nbsp;&nbsp;</a>
                            <a href="template"><img src="images/call1.png" alt="Call" height="40" width="40" class="img-responsive" />&nbsp;&nbsp;</a>
                            <a href="template"><img src="images/face.png" alt="facebook" height="40" width="40" class="img-responsive" /></a>
                        </div>
                </div>
                    
                    <div class="footer-copyright">
                        <div class="left">
                            © 2014 Copyright Text
                        </div>
                    </div>
            </footer>
        @yield('script')
            <!--Import jQuery before materialize.js-->
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="js/materialize.min.js"></script>



            
            <!--Import jQuery before materialize.js-->
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

            <script type="text/javascript" src="js/materialize.min.js"></script>
               
            <!-- Compiled and minified JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.mi"></script>
<script>
        $(document).ready(function(){
      $('.carousel').carousel();
    });

        $('.carousel.carousel-slider').carousel({full_width: true});
    </script>
    </body>
</html>
