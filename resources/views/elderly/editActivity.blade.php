@extends('elderly.template')
@section('title')
แก้ไขกิจกรรม ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/editActivity.css') }}" rel="stylesheet" type="text/css" media="all" />  
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="editActivity z-depth-2 center-align">
    <h4>แก้ไขกิจกรรม ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต</h4>
    </div>
    <form action="../editActivity/{{$activity->publicizeID}}" method="post" enctype="multipart/form-data"> 
        <div class="card card-define col m12">
            <div class="row">
                <div class="row">
                    <div class="input-field col m6 s12">
                        <input id="input_text" type="text" name="title" value="{{$activity->title}}">
                        <label for="input_text">กิจกรรมเรื่อง</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m12 s12">
                        <textarea id="textarea1" class="materialize-textarea" name="content">{{$activity->content}}</textarea>
                        <label for="textarea1">รายละเอียดของกิจกรรม</label>
                    </div>
                </div>
            </div>

            <div class="file-field input-field">
                <div class="btn waves-effect waves-light">
                  <span>เลือกรูปภาพ</span>
                  <input name="photo[]" type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                @foreach($images as $image)
                  <input class="file-path validate" type="text" placeholder="Upload one or more files" value="{{$image->imagename}}">
                @endforeach
                </div>
            </div>
           
        </div>

        <div class="row">
            <div class="col s6 right-align">
                <input type="hidden" name="_method" value="PUT" />
                <button type="submit" class="agree waves-effect waves-light btn-large">ตกลง</button>
            </div>
            <div class="col s6">
                <a href="../indexActivity" class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
            </div>
        </div>
    </form>
</div>


@endsection

@section('footer')
@endsection

@section('script')
@endsection