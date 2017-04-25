@extends('elderly.template')

@section('title') 
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/addboard.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card green lighten-5">
                <div class="card-content z-depth-5">
                    <p class="layout-text">ตั้งกระทู้</p>
                    <div class="progress"><div class="determinate" style="width: 100%"></div></div>
                    <div class="row">
                        <div class="input-field col m6 s12">
                            <div class="card-content">
                                <input value="" id="first_name2" type="text" maxlength="50" class="validate">
                                <label class="active" for="first_name2">หัวข้อ</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col m12 s12">
                                    <div class="card-content">
                                        <textarea id="textarea1"  class="materialize-textarea "></textarea>
                                            <label  for="textarea1">รายละเอียด</label>
                                                <div class="row">
                                                    <div class="input-field col m6 s12 ">
                                                        <i class="material-icons prefix">account_circle</i>
                                                        <input id="icon_prefix" type="text" class="validate">
                                                        <label for="icon_prefix">ชื่อผู้ตั้งกระทู้</label></div>
                                                </div>
                                            <div class="row right">
                                            <a class="waves-effect waves-light btn">ตกลง</a>
                                            <a class="waves-effect waves-light btn">ยกเลิก</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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