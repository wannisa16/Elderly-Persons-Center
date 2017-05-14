@extends('elderly.template')

@section('title')
รายละเอียดผู้สูงอายุ 
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/detailelderly.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('band')
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <label class="layout-title col m12 s12 z-depth-3 "><p class="font-title "><i class="material-icons">perm_identity</i> ข้อมูลทั่วไปผู้สูงอายุ </p></label>
            <div class="card card-define col m12 s12">
                <div class="row">
                    <div class="col m6 s12">
                        <p class="font-detail ">รหัส : {{$elderly->id}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col m6 s6">
                        <p class="font-detail ">ชื่อ : {{$elderly->name}}</p>
                    </div>
                    <div class="col m4 s4">
                        <p class="font-detail ">สกุล : {{$elderly->surname}}</p>
                    </div>
                </div>
 
                <div class="row">
                <div class="col m6 s6">
                    <div class="col m4 s4" class="font-detail ">
                        <p class="font-detail ">เพศ :</p>
                    </div>
                    <div class="col m5 s5" class="font-detail ">
                    <p class="font-detail ">{{$elderly->sex}}</p>
                    </div>
                </div>
                <div class="col m6 s6">
                    <div class="col m4 s4" class="font-detail ">
                        <p class="font-detail ">อายุ :</p>
                    </div>
                    <div class="col m5 s4" class="font-detail ">
                        <p class="font-detail ">{{$elderly->age}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m6 s6">
                    <div class="col m4 s4" class="font-detail ">
                        <p class="font-detail ">เกิด :</p>
                    </div>
                    <div class="col m5 s5" class="font-detail ">
                        <p class="font-detail ">{{$elderly->brithday}}</p>
                    </div>
                </div>
                <div class="col m6 s6">
                    <div class="col m4 s4" class="font-detail ">
                        <p class="font-detail ">สถานะ :</p>
                    </div>
                    <div class="col m5 s5" class="font-detail ">
                        <p class="font-detail ">{{$elderly->status}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m12 s12">
                    <div class="col m2 s2" class="font-detail "><p class="font-detail ">ที่อยู :</p></div>
                    <div class="col m10 s10" class="font-detail "><p class="font-detail "></p></div>
                </div> 
            </div>       
            <div class="row">
                <div class="col m6 s6">
                    <div class="col m4 s4" class="font-detail "><p class="font-detail ">อาชีพ :</p></div>
                    <div class="col m5 s5" class="font-detail "><p class="font-detail ">{{$elderly->occupation}}</p></div>
                </div>
                <div class="col m6 s6">
                    <div class="col m4 s4" class="font-detail "><p class="font-detail ">ระดับการศึกษา :</p></div>
                    <div class="col m5 s5" class="font-detail "><p class="font-detail ">{{$elderly->education}}</p></div>
                </div>
            </div>
            <div class="row">
                <div class="col m6 s6">
                    <div class="col m4 s4" class="font-detail "><p class="font-detail ">บุตร :</p></div>
                    <div class="col m5 s5" class="font-detail "><p class="font-detail ">{{$elderly->child}}</p></div>
                </div>
                <div class="col m6 s6">
                    <div class="col m4 s4" class="font-detail "><p class="font-detail ">เหตุผล :</p></div>
                    <div class="col m5 s5" class="font-detail "><p class="font-detail ">{{$elderly->reason}}</p></div>
                </div>
            </div>
            <div class="row">
                <div class="col m6 s6">
                    <div class="col m4 s4" class="font-detail "><p class="font-detail ">ไฟล์เกี่ยวข้องกับผู้สูงอายุ :</p></div>
                    <div class="col m5 s5" class="font-detail "><p class="font-detail ">{{$elderly->flie}}</p></div>
                </div>
            </div>
            </div>
            <div class="card card-define col m12 s12">
                <div class="row">
                    <div class="layout-title col m10 offset-m1 s12">ที่อยู่ของผู้สูงอายุ</div>
                </div>
                <div class="row">
                    <div class="col m3 offset-m1 s12">
                        <div class="input-field">
                            <input id="housenumber" type="text" class="validate" name="v_housenumber" value="">
                            <label for="housenumber">บ้านเลขที่ :</label>
                        </div>
                    </div>
                    <div class="col m2 s12">
                        <div class="input-field">
                            <input id="villageno" type="text" class="validate" name="v_villageno" value="">
                            <label for="villageno">หมู่ที่ :</label>
                        </div>
                    </div>
                    <div class="col m2 s12">
                        <div class="input-field">
                            <input id="alley" type="text" class="validate" name="v_alley" value="">
                            <label for="alley">ตรอก :</label>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="input-field">
                            <input id="alleyway" type="text" class="validate" name="v_alleyway" value="">
                            <label for="alleyway">ซอย :</label>
                        </div>
                    </div>                          
                </div>

                <div class="row">
                    <div class="col m4 offset-m1 s12">
                        <div class="input-field">
                            <input id="road" type="text" class="validate" name="v_road" value="">
                            <label for="road">ถนน :</label>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="input-field">
                            <input id="canton" type="text" class="validate" name="v_canton" value="">
                            <label for="canton">ตำบล/แขวง :</label>
                        </div>
                    </div>
                    <div class="col m3 s12">
                        <div class="input-field">
                            <input id="district" type="text" class="validate" name="v_district" value="">
                            <label for="district">อำเภอ/เขต :</label>
                        </div>
                    </div>           
                </div>

                <div class="row">
                    <div class="col m5 offset-m1 s12">
                        <div class="input-field">
                            <input id="province" type="text" class="validate" name="v_province" value="">
                            <label for="province">จังหวัด :</label>
                        </div>
                    </div>
                    <div class="col m5 s12">
                        <div class="input-field">
                            <input id="postcode" type="text" class="validate" name="v_postcode" value="">
                            <label for="postcode">รหัสไปรษณีย์ :</label>
                        </div>
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