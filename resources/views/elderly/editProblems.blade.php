
@extends('elderly.template')
@section('title')
แก้ไขแจ้งผู้ประสบปัญหาทางสังคม
@endsection

@section('link')
<link href="{{URL::asset('elderly/css/editProblems.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <form action="../../problems/{{$victim->victim_id}}" method="POST" role="form">
        <div class="editproblems z-depth-2 center-align col m12 s12"><h4>แก้ไขแจ้งผู้ประสบปัญหาทางสังคม</h4></div>
            <div class="card card-define col m12 s12">
                <div class="row">
                    <div class="layout-title col m10 offset-m1 s12">ข้อมูลผู้ประสบปัญหาทางสังคม</div>
                </div>
                <div class="row">
                    <div class="col m5 offset-m1 s12">
                        <div class="input-field">
                            <input id="name" type="text" class="validate" name="v_name" value="{{$victim->v_name}}">
                            <label for="name">ชื่อ :</label>
                        </div>
                    </div>
                    <div class="col m5 s12">
                        <div class="input-field">
                            <input id="surname" type="text" class="validate" name="v_surname" value="{{$victim->v_surname}}">
                            <label for="surname">นามสกุล :</label>
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col m5 offset-m1 s12">
                        <div class="input-field">
                            <input id="IDcardnumber" type="number" class="validate" name="v_idcard" value="{{$victim->v_idcard}}">
                            <label for="IDcardnumber">เลขที่บัตรประชาชน</label>
                        </div>
                    </div>
                    <div class="col m5 s12">
                        <div class="input-field">
                            <input id="no" type="text" class="validate" name="v_whyno" value="{{$victim->v_whyno}}">
                            <label for="no">กรณีไม่มีเนื่องจาก :</label>
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col m5 offset-m1 s12">
                        <div class="input-field">
                            <input type="date" class="datepicker" name="v_birthday" value="{{$victim->v_birthday}}">
                            <label>วัน/เดือน/ปีเกิด</label>
                        </div>
                    </div>
                    <div class="col m5 s12">
                        <div class="input-field">
                            <input id="age" type="number" class="validate" name="v_age" value="{{$victim->v_age}}">
                            <label for="age">อายุ :</label>
                        </div>
                    </div>                    
                </div>
                
                <div class="row">
                    <div class="col m2 offset-m1 s12">
                        <h5>เพศ</h5>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="ผู้ชาย" name="v_sex" type="radio" id="male" {{ ($victim->v_sex) == "ผู้ชาย" ? 'checked':'' }}  />
                            <label for="male">ผู้ชาย</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="ผู้หญิง" name="v_sex" type="radio" id="female" {{ ($victim->v_sex) == "ผู้หญิง" ? 'checked':'' }} />
                            <label for="female">ผู้หญิง</label>
                        </p>
                    </div>                        
                </div>

                <div class="row">
                    <div class="col m3 offset-m1 s12">
                        <div class="input-field">
                            <input id="race" type="text" class="validate" name="v_race" value="{{$victim->v_race}}">
                            <label for="race">เชื้อชาติ :</label>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="input-field">
                            <input id="nationality" type="text" class="validate" name="v_nationality" value="{{$victim->v_nationality}}">
                            <label for="nationality">สัญชาติ :</label>
                        </div>
                    </div>
                    <div class="col m4 s12">
                        <div class="input-field">
                            <input id="religion" type="text" class="validate" name="v_religion" value="{{$victim->v_religion}}">
                            <label for="religion">ศาสนา :</label>
                        </div>
                    </div>                          
                </div>

                <div class="row">
                    <div class="col m2 offset-m1 s12">
                        <h5>สถานภาพ</h5>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="โสด" name="status" type="radio" id="single" {{ ($victim->v_status) == "โสด" ? 'checked':'' }}/>
                            <label for="single">โสด</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="สมรสอยู่ด้วยกัน" name="status" type="radio" id="marrytogether"{{ ($victim->v_status) == "สมรสอยู่ด้วยกัน" ? 'checked':'' }} />
                            <label for="marrytogether">สมรสอยู่ด้วยกัน</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="สมรสแยกกันอยู่" name="status" type="radio" id="marryseparately" {{ ($victim->v_status) == "สมรสแยกกันอยู่" ? 'checked':'' }} />
                            <label for="marryseparately">สมรสแยกกันอยู่</label>
                        </p>
                    </div>                          
                </div>

                <div class="row">
                    <div class="col m3 offset-m3 s12">
                        <p>
                            <input class="with-gap" value="หย่าร้าง" name="status" type="radio" id="divorce"{{ ($victim->v_status) == "หย่าร้าง" ? 'checked':'' }} />
                            <label for="divorce">หย่าร้าง</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="ไม่ได้สมรสแต่อยู่ด้วยกัน" name="status" type="radio" id="unmarriedtogether" {{ ($victim->v_status) == "ไม่ได้สมรสแต่อยู่ด้วยกัน" ? 'checked':'' }} />
                            <label for="unmarriedtogether">ไม่ได้สมรสแต่อยู่ด้วยกัน</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="หม้าย(คู่สมรสเสียชีวิต)" name="status" type="radio" id="widow" {{ ($victim->v_status) == "หม้าย(คู่สมรสเสียชีวิต)" ? 'checked':'' }} />
                            <label for="widow">หม้าย(คู่สมรสเสียชีวิต)</label>
                        </p>
                    </div>                      
                </div>

                <div class="row">
                    <div class="col m5 offset-m1 s12">
                        <div class="input-field">
                            <input id="career" type="text" class="validate" name="v_career" value="{{$victim->v_career}}">
                            <label for="career">อาชีพ :</label>
                        </div>
                    </div>
                    <div class="col m5 s12">
                        <div class="input-field">
                            <input id="income" type="number" class="validate" name="v_income" value="{{$victim->v_income}}">
                            <label for="income">รายได้เฉลี่ยต่อเดือน :</label>
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col m3 offset-m1 s12">
                        <h5>ที่มาของรายได้</h5>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="source" type="radio" value="ด้วยตัวเอง" id="self"  {{ ($victim->v_source) == "ด้วยตัวเอง" ? 'checked':'' }} />
                            <label for="self">ด้วยตัวเอง</label>
                        </p>
                    </div>
                    <div class="col m2 s12">
                        <p>
                            <input class="with-gap" name="source" value="ผู้อื่นให้" type="radio" id="test8" {{ ($victim->v_source) == "ผู้อื่นให้" ? 'checked':'' }}  />
                            <label for="test8">ผู้อื่นให้</label>
                        </p>
                    </div>
                    <div class="col m2 s12">
                        <div class="input-field">
                            <input id="specify" type="text" class="validate" name="specify">
                            <label for="specify">(ระบุ)</label>
                        </div>
                    </div>                          
                </div>

                <div class="row">
                    <div class="col m10 offset-m1 s12">
                        <div class="input-field">
                            <input id="career" type="text" class="validate" name="v_situation" value="{{$victim->v_situation}}">
                            <label for="career">สถานะ</label>
                        </div>
                    </div>                
                </div>
            </div>

            <div class="card card-define col m12 s12">
                <div class="row">
                    <div class="layout-title col m10 offset-m1 s12">สถานที่ที่พบเจอผู้ประสบปัญหาทางสังคม</div>
                </div>
                <div class="row">
                    <div class="col m3 offset-m1 s12">
                        <div class="input-field">
                            <input id="housenumber" type="text" class="validate" name="v_housenumber" value="{{$victim->v_housenumber}}">
                            <label for="housenumber">บ้านเลขที่ :</label>
                        </div>
                    </div>
                    <div class="col m2 s12">
                        <div class="input-field">
                            <input id="villageno" type="text" class="validate" name="v_villageno" value="{{$victim->v_villageno}}">
                            <label for="villageno">หมู่ที่ :</label>
                        </div>
                    </div>
                    <div class="col m2 s12">
                        <div class="input-field">
                            <input id="alley" type="text" class="validate" name="v_alley" value="{{$victim->v_alley}}">
                            <label for="alley">ตรอก :</label>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="input-field">
                            <input id="alleyway" type="text" class="validate" name="v_alleyway" value="{{$victim->v_alleyway}}">
                            <label for="alleyway">ซอย :</label>
                        </div>
                    </div>                          
                </div>

                <div class="row">
                    <div class="col m4 offset-m1 s12">
                        <div class="input-field">
                            <input id="road" type="text" class="validate" name="v_road" value="{{$victim->v_road}}">
                            <label for="road">ถนน :</label>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="input-field">
                            <input id="canton" type="text" class="validate" name="v_canton" value="{{$victim->v_canton}}">
                            <label for="canton">ตำบล/แขวง :</label>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="input-field">
                            <input id="district" type="text" class="validate" name="v_district" value="{{$victim->v_district}}">
                            <label for="district">อำเภอ/เขต :</label>
                        </div>
                    </div>           
                </div>

                <div class="row">
                    <div class="col m5 offset-m1 s12">
                        <div class="input-field">
                            <input id="province" type="text" class="validate" name="v_province" value="{{$victim->v_province}}">
                            <label for="province">จังหวัด :</label>
                        </div>
                    </div>
                    <div class="col m5 s12">
                        <div class="input-field">
                            <input id="postcode" type="text" class="validate" name="v_postcode" value="{{$victim->v_postcode}}">
                            <label for="postcode">รหัสไปรษณีย์ :</label>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="card card-define col m12 s12">
                <div class="row">
                    <div class="layout-title col m10 offset-m1 s12">ผู้พบเจอผู้ประสบปัญหาทางสังคม</div>
                </div>

                <div class="row">
                    <div class="col m5 offset-m1 s12">
                        <div class="input-field">
                            <input id="name1" type="text" class="validate" name="h_name" value="{{$helper->h_name}}">
                            <label for="name1">ชื่อ :</label>
                        </div>
                    </div>
                    <div class="col m5 s12">
                        <div class="input-field">
                            <input id="surname1" type="text" class="validate" name="h_surname" value="{{$helper->h_surname}}">
                            <label for="surname1">นามสกุล :</label>
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col m5 offset-m1 s12">
                        <div class="input-field">
                            <input id="tel" type="number" class="validate" name="h_tel" value="{{$helper->h_tel}}">
                            <label for="tel">เบอร์โทรศัพท์ :</label>
                        </div>
                    </div>
                    <div class="col m5 s12">
                        <div class="input-field">
                            <input id="email" type="email" class="validate" name="h_email" value="{{$helper->h_email}}">
                            <label for="email">อีเมล์ :</label>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="row">
                <div class="col s6 right-align">
                    <input type="hidden" name="_method" value="PUT" />
                    <button type="submit" class="add waves-effect waves-light btn-large">ตกลง</button>
                </div>
                <div class="col s6">
                    <a href="../../problems" class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
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