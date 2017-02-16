@extends('elderly.template')
@section('title')
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/addpublicizes.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
  <div class="container">
        <div class="add z-depth-2"><h4>เพิ่มประชาสัมพันธ์</h4></div>
    </div>
    
    <div class="container">
        <div class="title row">
         <div class="input-field col s6">
                <input id="input_text" type="text">
                    <label for="input_text"><h5>เรื่อง</h5></label>
            </div>
        </div>

        <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1"><h5>ข้อความ</h5></label>
                </div>
            </div>
        </form>

        <form action="#">
         <div class="file-field input-field">
                <div class="btn">
        <span class="photo">เลือกรูปภาพ</span>
        <input type="file" multiple>
      </div>
              
             <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder=" เพิ่มรูปภาพได้มากกว่าหนึ่งรูป">
          </div>
         </div>
         </form><br><br>

        
        <div class="row">
            <div class="col s6 right-align">
                <a class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
            </div>
            <div class="col s6">
                <a class="addto waves-effect waves-light btn-large">เพิ่มประชาสัมพันธ์</a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection