@extends('elderly.template')
@section('title')
เพิ่มประชาสัมพันธ์
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/addPublicize.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="add z-depth-2 center">
        <h4>เพิ่มประชาสัมพันธ์</h4>
    </div>
    @if ( count($errors) > 0 )
        <div class="card-panel yellow lighten-3">
          <ul>
          @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
          @endforeach
          </ul>
        </div>
    @endif
    <form enctype="multipart/form-data" action="{{ url('/addPublicize') }}" method="post" >
        <div class="title row">
            <div class="input-field col s6">
                <input id="input_text" type="text" name="title" class="story">
                <label for="input_text"><h5>เรื่อง</h5></label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" name="content"></textarea>
                <label for="textarea1"><h5>ข้อความ</h5></label>
            </div>
        </div>

        
        <div class="row">
            <div class="file-field input-field col m12 s12">
                <div class="btn">
                    <span>เลือกรูปภาพ</span>
                    <input type="file" class="file" name="image"> 
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="รูปภาพ">
                </div>
            </div>                   
        </div>
        

        <div class="row">
            <div class="col s6 right-align">
                <button type="submit" class="addto waves-effect waves-light btn-large">เพิ่มประชาสัมพันธ์</button>
            </div>
            <div class="col s6">
                <a href="publicizes" class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
            </div>
        </div>
    </form>
</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection