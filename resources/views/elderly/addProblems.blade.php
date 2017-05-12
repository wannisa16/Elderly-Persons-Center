
@extends('elderly.template')
@section('title')
แจ้งผู้ประสบปัญหาทางสังคม
@endsection

@section('link')
<link href="{{URL::asset('elderly/css/addP.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="addproblems z-depth-2 center-align">
        <h4>แจ้งผู้ประสบปัญหาทางสังคม</h4>
    </div>
    <form action="../problems" method="post" accept-charset="utf-8">
        <div class="card card-define col m12">
            <div class="row">
                <div class="layout-title col m10 offset-m1">ข้อมูลผู้ประสบปัญหาทางสังคม</div>
            </div>
            <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                            <input id="name" type="text" class="validate" name="v_name">
                            <label for="name">ชื่อ :</label>
                        </div>
                    </div>
                    <div class="col m6 sm12">
                        <div class="input-field">
                            <input id="surname" type="text" class="validate" name="v_surname">
                            <label for="surname">นามสกุล :</label>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="row">
                <div class="col m5 offset-m1 s12">
                    <div class="input-field">
                        <input id="IDcardnumber" type="number" class="validate" name="v_idcard">
                        <label for="IDcardnumber">เลขที่บัตรประชาชน :</label>
                    </div>
                </div>
                <div class="col m5 s12 ">
                    <div class="input-field">
                        <input id="no" type="text" class="validate" name="v_whyno">
                        <label for="no">กรณีไม่มีเนื่องจาก :</label>
                    </div>
                </div>                    
            </div>

            <div class="row">
                <div class="col m10 offset-m1 s12">
                    <input type="date" id="myDate" name="v_birthday">
                </div>                   
            </div>

            <div class="row">
                <div class="col s11 ">
                    <div class="col m3 offset-m1 s12">
                        <div class="input-field">
                            <input id="race" type="text" class="validate" name="v_race">
                            <label for="race">เชื้อชาติ :</label>
                        </div>
                    </div>

                    <div class="col m4 s12">
                        <div class="input-field">
                            <input id="nationality" type="text" class="validate" name="v_nationality">
                            <label for="nationality">สัญชาติ :</label>
                        </div>
                    </div>
                    <div class="col m4 s12">
                        <div class="input-field">
                            <input id="religion" type="text" class="validate" name="v_religion">
                            <label for="religion">ศาสนา :</label>
                        </div>
                    </div>                          
                </div>
            </div>
            <div class="row">
                <div class="col m11">
                    <div class="col m2 offset-m1 s12">
                        <h5>เพศ</h5>
                    </div>
                    <div class="col m4 s12">
                        <p>
                            <input class="with-gap" name="v_sex" type="radio" value="ผู้หญิง" id="female" checked="checked" />
                            <label for="female">ผู้หญิง</label>
                        </p>
                    </div>
                    <div class="col m4 s12">
                        <p>
                            <input class="with-gap" name="v_sex" type="radio" value="ผู้ชาย" id="male" />
                            <label for="male">ผู้ชาย</label>
                        </p>
                    </div>                        
                </div>
            </div>
            <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1 s12">
                        <div class="input-field">
                            <input id="career" type="text" class="validate" name="v_career">
                            <label for="career">อาชีพ :</label>
                        </div>
                    </div>
                    <div class="col m6 s12">
                        <div class="input-field">
                            <input id="v_income" type="number" class="validate" name="v_income">
                            <label for="income">รายได้เฉลี่ยต่อเดือน :</label>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col m11">
                    <div class="col m2 offset-m1 s12">
                        <h5>สถานภาพ</h5>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="โสด" name="v_status" type="radio" id="single" checked="checked" />
                            <label for="single">โสด</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="สมรสอยู่ด้วยกัน" name="v_status" type="radio" id="marrytogether"  />
                            <label for="marrytogether">สมรสอยู่ด้วยกัน</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="สมรสแยกกันอยู่" name="v_status" type="radio" id="marryseparately" />
                            <label for="marryseparately">สมรสแยกกันอยู่</label>
                        </p>
                    </div>                          
                </div>
            </div>
                
            <div class="row">
                <div class="col m11 ">
                    <div class="col m3 offset-m3 s12">
                        <p>
                            <input class="with-gap" value="หย่าร้าง" name="v_status" type="radio" id="divorce" />
                            <label for="divorce">หย่าร้าง</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="ไม่ได้สมรสแต่อยู่ด้วยกัน" name="v_status" type="radio" id="unmarriedtogether" />
                            <label for="unmarriedtogether">ไม่ได้สมรสแต่อยู่ด้วยกัน</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="หม้าย(คู่สมรสเสียชีวิต)" name="v_status" type="radio" id="widow" />
                            <label for="widow">หม้าย(คู่สมรสเสียชีวิต)</label>
                        </p>
                    </div>                      
                </div>
            </div>
 
            <div class="row">
                <div class="col m11 ">
                    <div class="col m3 offset-m1 s12">
                        <h5>ที่มาของรายได้</h5>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="ด้วยตัวเอง" name="v_source" type="radio" id="test7" checked="checked"/>
                            <label for="test7">ด้วยตัวเอง</label>
                        </p>
                    </div>
                    <div class="col m2 s12">
                        <p>
                            <input class="with-gap" value="ผู้อื่นให้" name="v_source" type="radio" id="test8" />
                            <label for="test8">ผู้อื่นให้</label>
                        </p>
                    </div>
                    <div class="col m2 s12">
                        <div class="input-field">
                            <input id="specify" type="text" class="validate" name="v_specify">
                            <label for="specify">(ระบุ)</label>
                        </div>
                    </div>                          
                </div>
            </div>
        </div>

        <div class="card card-define col m12">
            <div class="row">
                <div class="layout-title col m10 offset-m1">สถานที่ที่พบเจอผู้ประสบปัญหาทางสังคม</div>
            </div>
            <div class="row">
                <div class="col m11 ">
                    <div class="col m3 offset-m1 s12">
                        <div class="input-field">
                            <input id="housenumber" type="text" class="validate" name="v_housenumber">
                            <label for="v_housenumber">บ้านเลขที่ :</label>
                        </div>
                    </div>
                    <div class="col m2 s12">
                        <div class="input-field">
                            <input id="villageno" type="text" class="validate" name="v_villageno">
                            <label for="villageno">หมู่ที่ :</label>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="input-field">
                            <input id="alley" type="text" class="validate" name="v_alley">
                            <label for="alley">ตรอก :</label>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="input-field">
                            <input id="alleyway" type="text" class="validate" name="v_alleyway">
                            <label for="alleyway">ซอย :</label>
                        </div>
                    </div>                          
                </div>
            </div>

            <div class="row">
                <div class="col m11 ">
                    <div class="col m4 offset-m1 s12">
                        <div class="input-field">
                            <input id="road" type="text" class="validate" name="v_road">
                            <label for="road">ถนน :</label>
                        </div>
                    </div>
                    <div class="col m4 s12">
                        <div class="input-field">
                            <input id="canton" type="text" class="validate" name="v_canton">
                            <label for="canton">ตำบล/แขวง :</label>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="input-field">
                            <input id="district" type="text" class="validate" name="v_district">
                            <label for="district">อำเภอ/เขต :</label>
                        </div>
                    </div>           
                </div>
            </div>

            <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1 s12">
                        <div class="input-field">
                            <input id="province" type="text" class="validate" name="v_province">
                            <label for="province">จังหวัด :</label>
                        </div>
                    </div>
                    <div class="col m6 s12">
                        <div class="input-field">
                            <input id="postcode" type="text" class="validate" name="v_postcode">
                            <label for="postcode">รหัสไปรษณีย์ :</label>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>

        <div class="card card-define col m12">
            <div class="row">
                <div class="layout-title col m10 offset-m1 s12">ผู้พบเจอผู้ประสบปัญหาทางสังคม</div>
            </div>

            <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1 s12">
                        <div class="input-field">
                            <input id="name1" type="text" class="validate" name="h_name">
                            <label for="name1">ชื่อ :</label>
                        </div>
                    </div>
                    <div class="col m6 s12">
                        <div class="input-field">
                            <input id="surname1" type="text" class="validate" name="h_surname">
                            <label for="surname1">นามสกุล :</label>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col m11">
                    <div class="col m5 offset-m1 s12">
                        <div class="input-field">
                            <input id="tel" type="number" class="validate" name="h_tel">
                            <label for="tel">เบอร์โทรศัพท์ :</label>
                        </div>
                    </div>
                    <div class="col m6 s12">
                        <div class="input-field">
                            <input id="email" type="email" class="validate" name="h_email">
                            <label for="email">อีเมล์ :</label>
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
    </form>   
</div>


@endsection

@section('footer')
@endsection

@section('script')
<script src="{{ URL::asset('/elderly/js/addProblems.js') }}"> </script>
@endsection