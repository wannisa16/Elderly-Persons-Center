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
            <div class="card ">
                <label class="layout-title col m12 s12 z-depth-3 " -><p class="font-title "><i class="material-icons">perm_identity</i> ข้อมูลทั่วไปผู้สูงอายุ </p></label>
        
            <div class="row">
                <div class="col m6 s12">
                    <div class="col m4 s4">
                        <p class="font-detail ">รหัส :</p>
                    </div>
                    <div class="col m8 s8">
                        <p class="font-detail ">{{$elderly->id}}</p>
                    </div>
                </div>
            <div class="col m6 s6"></div>
            </div>
            <div class="row">
                <div class="col m6 s6">
                    <div class="col m4 s4"><p class="font-detail ">ชื่อ :</p></div>
                    <div class="col m5 s5"><p class="font-detail ">{{$elderly->name}}</p></div>
                </div>
                <div class="col m6 s6">
                    <div class="col m4 s4">
                        <p class="font-detail ">สกุล :</p>
                    </div>
                    <div class="col m5 s5">
                        <p class="font-detail ">{{$elderly->surname}}</p>
                    </div>
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
        </div>
    </div>
</div>


@endsection

@section('footer')
@endsection

@section('script')
@endsection