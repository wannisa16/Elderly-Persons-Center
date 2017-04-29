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
                <div class="col m11 ">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">ชื่อ</label>
                        </div>
                    </div>
                    <div class="col m6 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">นามสกุล</label>
                        </div>
                    </div>                    
                </div>
                </div>
                <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                            <input id="icon_telephone" type="number" class="validate">
                            <label for="icon_telephone">เลขที่บัตรประชาชน</label>
                        </div>
                    </div>
                    <div class="col m6 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">กรณีไม่มีเนื่องจาก</label>
                        </div>
                    </div>                    
                </div>
                </div>
                <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                            <input type="date" class="datepicker">
                            <label>วัน/เดือน/ปีเกิด</label>
                        </div>
                    </div>
                    <div class="col m6 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="number" class="validate">
                            <label for="icon_telephone">อายุ</label>
                        </div>
                    </div>                    
                </div>
                </div>

                <div class="row">
                <div class="col m11 ">
                    <div class="col m2 offset-m1">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">เพศ</label>
                        </div>
                    </div>
                    <div class="col m3 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">เชื้อชาติ</label>
                        </div>
                    </div>
                    <div class="col m3 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">สัญชาติ</label>
                        </div>
                    </div>
                    <div class="col m3 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">ศาสนา</label>
                        </div>
                    </div>                          
                </div>
                </div>

                <form action="#">
                <div class="row">
                <div class="col m11 ">
                    <div class="col m2 offset-m1">
                        <h5>สถานภาพ</h5>
                    </div>
                    <div class="col m3 ">
                        <p>
                            <input type="checkbox" class="filled-in" id="test1" />
                            <label class="label-check" for="test1">โสด</label>
                        </p>
                    </div>
                    <div class="col m3 ">
                        <p>
                            <input type="checkbox" class="filled-in" id="test2" />
                            <label class="label-check" for="test2">สมรสอยู่ด้วยกัน</label>
                        </p>
                    </div>
                    <div class="col m3 ">
                        <p>
                            <input type="checkbox" class="filled-in" id="test3" />
                            <label class="label-check" for="test3">สมรสแยกกันอยู่</label>
                        </p>
                    </div>                          
                </div>
                </div>
                <form>

                <form action="#">
                <div class="row">
                <div class="col m11 ">
                    <div class="col m3 offset-m3">
                        <p>
                            <input type="checkbox" class="filled-in" id="test4" />
                            <label class="label-check" for="test4">หย่าร้าง</label>
                        </p>
                    </div>
                    <div class="col m3 ">
                        <p>
                            <input type="checkbox" class="filled-in" id="test5" />
                            <label class="label-check" for="test5">ไม่ได้สมรสแต่อยู่ด้วยกัน</label>
                        </p>
                    </div>
                    <div class="col m3 ">
                        <p>
                            <input type="checkbox" class="filled-in" id="test6" />
                            <label class="label-check" for="test6">หม้าย(คู่สมรสเสียชีวิต)</label>
                        </p>
                    </div>                      
                </div>
                </div>
                <form>

                <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">อาชีพ</label>
                        </div>
                    </div>
                    <div class="col m6 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="number" class="validate">
                            <label for="icon_telephone">รายได้เฉลี่ยต่อเดือน</label>
                        </div>
                    </div>                    
                </div>
                </div>

                <form action="#">
                <div class="row">
                <div class="col m11 ">
                    <div class="col m3 offset-m1">
                        <h5>ที่มาของรายได้</h5>
                    </div>
                    <div class="col m3 ">
                        <p>
                            <input type="checkbox" class="filled-in" id="test7" />
                            <label class="label-check" for="test7">ด้วยตัวเอง</label>
                        </p>
                    </div>
                    <div class="col m2 ">
                        <p>
                            <input type="checkbox" class="filled-in" id="test8" />
                            <label class="label-check" for="test8">ผู้อื่นให้</label>
                        </p>
                    </div>
                    <div class="col m2 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">(ระบุ)</label>
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
                    <div class="col m3 offset-m1">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">บ้านเลขที่</label>
                        </div>
                    </div>
                    <div class="col m2 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">หมู่ที่</label>
                        </div>
                    </div>
                    <div class="col m3 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">ตรอก</label>
                        </div>
                    </div>
                    <div class="col m3 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">ซอย</label>
                        </div>
                    </div>                          
                </div>
                </div>

                <div class="row">
                <div class="col m11 ">
                    <div class="col m4 offset-m1">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">ถนน</label>
                        </div>
                    </div>
                    <div class="col m4 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">ตำบล/แขวง</label>
                        </div>
                    </div>
                    <div class="col m3 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">อำเภอ/เขต</label>
                        </div>
                    </div>           
                </div>
                </div>

                <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">จังหวัด</label>
                        </div>
                    </div>
                    <div class="col m6 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">รหัสไปรษณีย์</label>
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
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">ชื่อ</label>
                        </div>
                    </div>
                    <div class="col m6 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">นามสกุล</label>
                        </div>
                    </div>                    
                </div>
                </div>

                <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                            <input id="icon_telephone" type="number" class="validate">
                            <label for="icon_telephone">เบอร์โทรศัพท์</label>
                        </div>
                    </div>
                    <div class="col m6 ">
                        <div class="input-field">
                            <input id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">อีเมล์</label>
                        </div>
                    </div>                    
                </div>
                </div>
            </div>
    </div>


@endsection

@section('footer')
@endsection

@section('script')
@endsection