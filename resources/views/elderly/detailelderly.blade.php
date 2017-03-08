@extends('elderly.template')

@section('title') 
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
      <div class="card ">
      <div class="card-image waves-effect waves-block waves-light">
        <label class="layout-title col m12 s12 z-depth-3 " style="margin-top: auto"><p class="font-title "><i class="material-icons">perm_identity</i> ข้อมูลทั่วไป</p></label>
        
        <div class="row">
            <div class="col m6">
                <div class="col m4"><p class="font-detail ">รหัส :</p></div>
                <div class="col m8"><p class="font-detail ">123456</p></div>
            </div>
            <div class="col m6"></div>
        </div>
        <div class="row">
            <div class="col m6">
                <div class="col m4"><p class="font-detail ">ชื่อ :</p></div>
                <div class="col m5"><p class="font-detail ">นายสมแล้ว</p></div>
            </div>
            <div class="col m6">
                <div class="col m4"><p class="font-detail ">สกุล :</p></div>
                <div class="col m5"><p class="font-detail ">ที่เป็น</p></div>
            </div>
        </div> 
        <div class="row">
            <div class="col m6">
                <div class="col m4" class="font-detail "><p class="font-detail ">เพศ :</p></div>
                <div class="col m5" class="font-detail "><p class="font-detail ">ชาย</p></div>
            </div>
            <div class="col m6">
                <div class="col m4" class="font-detail "><p class="font-detail ">อายุ :</p></div>
                <div class="col m5" class="font-detail "><p class="font-detail ">50</p></div>
            </div>
        </div>
        <div class="row">
            <div class="col m6">
                <div class="col m4" class="font-detail "><p class="font-detail ">เกิด :</p></div>
                <div class="col m5" class="font-detail "><p class="font-detail ">12/7/30</p></div>
            </div>
            <div class="col m6">
                <div class="col m4" class="font-detail "><p class="font-detail ">สถาณะ :</p></div>
                <div class="col m5" class="font-detail "><p class="font-detail ">แต่งงาน</p></div>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                <div class="col m2" class="font-detail "><p class="font-detail ">ที่อยู :</p></div>
                <div class="col m10" class="font-detail "><p class="font-detail ">บ้านเลขที่ 17/18 หมู่ 1 ต.ห้วยนาง อ.ห้วยยอด จ.ตรัง</p></div>

        </div>        
        <div class="row">
            <div class="col m6">
                <div class="col m4" class="font-detail "><p class="font-detail ">อาชีพ :</p></div>
                <div class="col m5" class="font-detail "><p class="font-detail ">รับจ้าง</p></div>
            </div>
            <div class="col m6">
                <div class="col m4" class="font-detail "><p class="font-detail ">ระดับการศึกษา :</p></div>
                <div class="col m5" class="font-detail "><p class="font-detail ">ม4</p></div>
            </div>
        </div>
        <div class="row">
            <div class="col m6">
                <div class="col m4" class="font-detail "><p class="font-detail ">บุตร :</p></div>
                <div class="col m5" class="font-detail "><p class="font-detail ">0</p></div>
            </div>
            <div class="col m6">
                <div class="col m4" class="font-detail "><p class="font-detail ">เหตุผล :</p></div>
                <div class="col m5" class="font-detail "><p class="font-detail ">ไม่ทราบ</p></div>
            </div>
        </div>
        <div class="row">
            <div class="col m6">
                <div class="col m4" class="font-detail "><p class="font-detail ">flie :</p></div>
                <div class="col m5" class="font-detail "><p class="font-detail ">0</p></div>
            </div>
            <div class="col m6">
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