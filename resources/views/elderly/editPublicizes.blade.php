@extends('elderly.template')
@section('title')
แก้ไขประชาสัมพันธ์
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/editpublicizess.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="editpublicizes z-depth-2 center-align">
        <h4>แก้ไขประชาสัมพันธ์</h4>
    </div>
    <form action="" method="post" enctype="multipart/form-data" class="col s12"> 
        <div class="card card-define col m12">
            <div class="row">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="input_text" type="text" value="" name="title" class="story">
                        <label for="input_text">เรื่อง</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" name="content"></textarea>
                        <label for="textarea1">รายละเอียดของประชาสัมพันธ์</label>
                    </div>
                </div>
            </div>
        
            <div class="file-field input-field">
            
                <div class="btn waves-effect waves-light">
                  <span>เลือกรูปภาพ</span>
                  <input name="photo[]" type="file"  multiple>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" value="" type="text" placeholder="Upload one or more files">
                </div>
            
            </div>
        </div>
        <div class="row">
            <div class="col s6 right-align">
                <button type="submit" class="agree waves-effect waves-light btn-large">ตกลง</button>
            </div>
            <div class="col s6">
                <a href="" class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
            </div>
        </div>
    </form>
</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection