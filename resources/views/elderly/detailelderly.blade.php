@extends('elderly.template')

@section('title')
รายละเอียดข้อมูลผู้สูงอายุ 
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/detailelderlyy.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="detailelderly z-depth-2 center-align"><h4>รายละเอียดข้อมูลผู้สูงอายุ</h4></div>
        
    <div class="card card-define col m12 s12">
        <div class="layout-text row">
            <div class="col m12 offset-m1 s12">รหัส : {{$elderly->id}}</div>
        </div>
        
        <div class="layout-text row">
            <div class="col m5 offset-m1 s12">ชื่อ : {{$elderly->name}}</div>
            <div class="col m5 s12">สกุล : {{$elderly->surname}}</div>
        </div>

        <div class="layout-text row">
            <div class="col m5 offset-m1 s12">วัน/เดือน/ปีเกิด : {{$elderly->brithday}}</div>
            <div class="col m5 s12">อายุ : {{$elderly->age}} ปี</div>
        </div>

        <div class="layout-text row">
            <div class="col m5 offset-m1 s12">เพศ : {{$elderly->sex}}</div>
            <div class="col m5 s12">สถานภาพ : {{$elderly->status}}</div>
        </div>

        <div class="layout-text row">
            <div class="col m5 offset-m1 s12">อาชีพ : {{$elderly->occupation}}</div>
            <div class="col m5 s12">ระดับการศึกษา : {{$elderly->education}}</div>
        </div>

        <div class="layout-text row">
            <div class="col m5 offset-m1 s12">บุตร : {{$elderly->child}} คน</div>
            <div class="col m5 s12">จังหวัดที่อยู่ปัจจบัน : {{$elderly->county}}</div>
        </div>

        <div class="layout-text row">
            <div class="col m12 offset-m1 s12">สถานะ : {{$elderly->grade}}</div>
        </div>
        
        <div class="layout-text row">
            <div class="col m12 offset-m1 s12">เอกสารที่เกี่ยวข้องกับผู้สูงอายุ : {{$elderly->flie}}
                <a href="" type="submit" class="see waves-effect waves-light btn">ดูเอกสาร</a>
            </div>
        </div>

        <div class="layout-text row">
            <div class="col m12 offset-m1 s12">รายละเอียดเพิ่มเติม : {{$elderly->reason}}</div>
        </div>

        <div class="layout-text row">
            <div class="col m10 offset-m1 s12">ที่อยู่ของผู้สูงอายุ : บ้านเลขที่ {{$elderly->housenumber}} หมู่ {{$elderly->villageno}} ตรอก {{$elderly->alley}} ซอย {{$elderly->alleyway}} ถนน {{$elderly->road}} ตำบล/แขวง {{$elderly->canton}} อำเภอ/เขต {{$elderly->district}} จังหวัด {{$elderly->province}} รหัสไปรษณีย์ {{$elderly->postcode}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s6 right-align">
            <a href="../editElderly/{{$elderly->id}}" type="submit" class="edit waves-effect waves-light btn-large">แก้ไข</a>
        </div>
        <div class="col s6">
            <input type="hidden" name="_method" value="DELETE" />
            <a href="../elderly/delete/{{$elderly->id}}" class="cancel waves-effect waves-light btn-large">ลบ</a>
        </div>
    </div>
</div>


@endsection

@section('footer')
@endsection

@section('script')
@endsection