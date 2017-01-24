<!DOCTYPE html>
<html>
<head>
@yield('title')</title>
@yield('link')
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link href="{{ URL::asset('css/template.css') }}" rel="stylesheet" type="text/css" media="all" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    @yield('band')
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!" class="green-text text-accent-4">เข้าสู่ระบบ</a></li>
        <li class="divider"></li>
        <li><a href="#!" class="green-text text-accent-4">กะทู้</a></li>
        <li class="divider"></li>
        <li><a href="#!" class="green-text text-accent-4">ส่งไฟล์</a></li>
        <li class="divider"></li>
        <li><a href="#!" class="green-text text-accent-4">ปฏิทิน</a></li>
    </ul>
    <nav class="white">
        <div class="nav-wrapper container">
        <a href="elderly"><img src="images/logo1.png" alt="LOGO" height="45" width="350" class="img-responsive" /></a>
            <ul class="right hide-on-med-and-down ">
            <li class="active"><a class="green-text text-accent-4" href="collapsible.html">หน้าหลัก</a></li>
                <li><a class="green-text text-accent-4" href="sass.html">เกี่ยวกับเรา</a></li>
                <li><a class="green-text text-accent-4" href="badges.html">บริจาค</a></li>
                <li><a class="green-text text-accent-4" href="badges.html">ผู้ประสบปัญหาทางสังคม</a></li>
                <li><a class="green-text text-accent-4" href="badges.html">ติดต่อเรา</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button green-text text-accent-4" href="#!" data-activates="dropdown1"><i class="material-icons right">arrow_drop_down</i></a></li>

            </ul>
        </div>
    </nav>

    @yield('content')

    @yield('footer')
    <footer class="page-footer green accent-3 center">
            <div class="row">
                <div class="col l4 s12">
                    <h5 class="black-text">สถานสงเคราะห์ผู้สูงอายุ จังหวัดภูเก็ต</h5>
                    <p class="white-text">11/41 หมู่4 ถ.บ้านดอนเชิงทะเล ต.เชิงทะเล 
                        อ.ถลาง ภูเก็ต</p>
                    </div>
                    <div class="col l4 offset-l0 s12">
                    <h5 class="white-text">ติดต่อเราได้ที่</h5>
                        <p class="white-text">โทรศัพท์ : 086 952 5113</p>
                        <p class="white-text">อีเมล์ : nartruthai.nkr@gmail.com</p>
                        </div>
                        <div class="col l4 offset-l0 s12">
                        <h5 class="white-text">ติดตามหรือติดต่อได้ที่</h5>
                            <a href="template"><img src="images/email.png" alt="E-mail" height="40" width="40" class="img-responsive" /></a>
                            <a href="template"><img src="images/call.png" alt="Call" height="40" width="40" class="img-responsive" /></a>
                            <a href="template"><img src="images/facebook.png" alt="facebook" height="40" width="40" class="img-responsive" /></a>
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
                <!-- Compiled and minified JavaScript -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

            </body>
            </html>
