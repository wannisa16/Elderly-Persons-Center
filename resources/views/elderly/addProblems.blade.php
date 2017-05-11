
@extends('elderly.template')
@section('title')
แจ้งผู้ประสบปัญหาทางสังคม
@endsection

@section('link')
<link href="{{URL::asset('elderly/css/addProblems.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
    <div class="container">
        <div class="addproblems z-depth-2 center-align"><h4>แจ้งผู้ประสบปัญหาทางสังคม</h4></div>
            <div class="card card-define col m12">
                <div class="row">
                    <div class="layout-title col m10 offset-m1">ข้อมูลผู้ประสบปัญหาทางสังคม</div>
                </div>
                <div class="row">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                            <input id="name" type="text" class="validate" name="name">
                            <label for="name">ชื่อ</label>
                        </div>
                    </div>
                    <div class="col m5 sm12">
                        <div class="input-field">
                            <input id="surname" type="text" class="validate" name="surname">
                            <label for="surname">นามสกุล</label>
                        </div>
                    </div>                    
                </div>
                
                <div class="row">
                    <div class="col m5 offset-m1 s12">
                        <div class="input-field">
                            <input id="IDcardnumber" type="number" class="validate" name="IDcardnumber">
                            <label for="IDcardnumber">เลขที่บัตรประชาชน</label>
                        </div>
                    </div>
                    <div class="col m5 s12 ">
                        <div class="input-field">
                            <input id="no" type="text" class="validate" name="no">
                            <label for="no">กรณีไม่มีเนื่องจาก</label>
                        </div>
                    </div>                    
                </div>
                
                <div class="row">
                <div class="col s11 ">
                    <div class="col s5 offset-m1 s12">
                        <div class="input-field">
                            <input type="date" class="datepicker" name="birthday">
                            <label>วัน/เดือน/ปีเกิด</label>
                        </div>
                    </div>
                    <div class="col  m6 s12">
                        <div class="input-field">
                            <input id="age" type="number" class="validate" name="age">
                            <label for="age">อายุ</label>
                        </div>
                    </div>                    
                </div>
                </div>

                <div class="row">
                <div class="col s11 ">
                    <div class="col m2 offset-m1 s12">
                        <div class="input-field">
                            <input id="sex" type="text" class="validate" name="sex">
                            <label for="sex">เพศ</label>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="input-field">
                            <input id="race" type="text" class="validate" name="race">
                            <label for="race">เชื้อชาติ</label>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="input-field">
                            <input id="nationality" type="text" class="validate" name="nationality">
                            <label for="nationality">สัญชาติ</label>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="input-field">
                            <input id="religion" type="text" class="validate" name="religion">
                            <label for="religion">ศาสนา</label>
                        </div>
                    </div>                          
                </div>
                </div>

                <form action="#">
                <div class="row">
                <div class="col s11 ">
                    <div class="col m2 offset-m1 s12">
                        <h5>สถานภาพ</h5>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="single"  />
                            <label for="single">โสด</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="marrytogether"  />
                            <label for="marrytogether">สมรสอยู่ด้วยกัน</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="marryseparately" />
                            <label for="marryseparately">สมรสแยกกันอยู่</label>
                        </p>
                    </div>                          
                </div>
                </div>
                <form>

                <form action="#">
                <div class="row">
                <div class="col s11 ">
                    <div class="col s3 offset-s3 ">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="divorce" />
                            <label for="divorce">หย่าร้าง</label>
                        </p>
                    </div>
                    <div class="col s3">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="unmarriedtogether" />
                            <label for="unmarriedtogether">ไม่ได้สมรสแต่อยู่ด้วยกัน</label>
                        </p>
                    </div>
                    <div class="col s3">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="widow" />
                            <label for="widow">หม้าย(คู่สมรสเสียชีวิต)</label>
                        </p>
                    </div>                      
                </div>
                </div>
                <form>

                <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1 s5">
                        <div class="input-field">
                            <input id="career" type="text" class="validate" name="career">
                            <label for="career">อาชีพ</label>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="input-field">
                            <input id="income" type="number" class="validate" name="income">
                            <label for="income">รายได้เฉลี่ยต่อเดือน</label>
                        </div>
                    </div>                    
                </div>
                </div>

                <form action="#">
                <div class="row">
                <div class="col m11 ">
                    <div class="col m3 offset-m1 s3">
                        <h5>ที่มาของรายได้</h5>
                    </div>
                    <div class="col m3 s3">
                        <p>
                            <input class="with-gap" name="revenue" type="radio" id="test7" />
                            <label for="test7">ด้วยตัวเอง</label>
                        </p>
                    </div>
                    <div class="col m2 s2">
                        <p>
                            <input class="with-gap" name="revenue" type="radio" id="test8" />
                            <label for="test8">ผู้อื่นให้</label>
                        </p>
                    </div>
                    <div class="col m2 s2">
                        <div class="input-field">
                            <input id="specify" type="text" class="validate" name="specify">
                            <label for="specify">(ระบุ)</label>
                        </div>
                    </div>                          
                </div>
                </div>
                <form>
            </div>

            <div class="card card-define col m12">
                <div class="row">
                    <div class="layout-title col m10 offset-m1">สถานที่ที่พบเจอผู้ประสบปัญหาทางสังคม</div>
                </div>
            <div class="row">
                <div class="col m11 ">
                    <div class="col m3 offset-m1 s3">
                        <div class="input-field">
                            <input id="housenumber" type="text" class="validate" name="housenumber">
                            <label for="housenumber">บ้านเลขที่</label>
                        </div>
                    </div>
                    <div class="col m2 s2">
                        <div class="input-field">
                            <input id="villageno" type="text" class="validate" name="villageno">
                            <label for="villageno">หมู่ที่</label>
                        </div>
                    </div>
                    <div class="col m3 s3">
                        <div class="input-field">
                            <input id="alley" type="text" class="validate" name="alley">
                            <label for="alley">ตรอก</label>
                        </div>
                    </div>
                    <div class="col m3 s3">
                        <div class="input-field">
                            <input id="alleyway" type="text" class="validate" name="alleyway">
                            <label for="alleyway">ซอย</label>
                        </div>
                    </div>                          
                </div>
                </div>

                <div class="row">
                <div class="col m11 ">
                    <div class="col m4 offset-m1 s4">
                        <div class="input-field">
                            <input id="road" type="text" class="validate" name="road">
                            <label for="road">ถนน</label>
                        </div>
                    </div>
                    <div class="col m4 s4">
                        <div class="input-field">
                            <input id="canton" type="text" class="validate" name="canton">
                            <label for="canton">ตำบล/แขวง</label>
                        </div>
                    </div>
                    <div class="col m3 s3">
                        <div class="input-field">
                            <input id="district" type="text" class="validate" name="district">
                            <label for="district">อำเภอ/เขต</label>
                        </div>
                    </div>           
                </div>
                </div>

                <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1 s5">
                        <div class="input-field">
                            <input id="province" type="text" class="validate" name="province">
                            <label for="province">จังหวัด</label>
                        </div>
                    </div>
                    <div class="col m6 ">
                        <div class="input-field">
                            <input id="postcode" type="text" class="validate" name="postcode">
                            <label for="postcode">รหัสไปรษณีย์</label>
                        </div>
                    </div>                    
                </div>
                </div>
            </div>

            <div class="card card-define col m12">
                <div class="row">
                    <div class="layout-title col m10 offset-m1">ผู้พบเจอผู้ประสบปัญหาทางสังคม</div>
                </div>

                <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                            <input id="name1" type="text" class="validate" name="name1">
                            <label for="name1">ชื่อ</label>
                        </div>
                    </div>
                    <div class="col m6 ">
                        <div class="input-field">
                            <input id="surname1" type="text" class="validate" name="surname1">
                            <label for="surname1">นามสกุล</label>
                        </div>
                    </div>                    
                </div>
                </div>

                <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                            <input id="tel" type="number" class="validate" name="tel">
                            <label for="tel">เบอร์โทรศัพท์</label>
                        </div>
                    </div>
                    <div class="col m6 ">
                        <div class="input-field">
                            <input id="email" type="email" class="validate" name="email">
                            <label for="email">อีเมล์</label>
                        </div>
                    </div>                    
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col s6 right-align">
                    <button type="submit" class="add waves-effect waves-light btn-large">ตกลง</button>
                </div>
                <div class="col s6">
                    <a class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
                </div>
            </div>
           
    </div>


@endsection

@section('footer')
@endsection

@section('script')
<script src="{{ URL::asset('/elderly/js/addProblems.js') }}"> </script>
@endsection