@extends('elderly.template')
@section('title')
เพิ่มประชาสัมพันธ์
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/addpublicizes.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="add z-depth-2"><h4>เพิ่มประชาสัมพันธ์</h4></div>

    {!! Form::open(['url' => 'addPublicize', 'files' => true]) !!}

        <div class="title row">
            <div class="input-field col s6">
                <input id="input_text" type="text" name="title">
                <label for="input_text"><h5>เรื่อง</h5></label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" name="content"></textarea>
                <label for="textarea1"><h5>ข้อความ</h5></label>
            </div>
        </div>

        
        <div class="form-group">
            {!! Form::label('เลือกรูปภาพ') !!}
            {!! Form::file('image', null) !!}
        </div>
        

        <div class="row">
            <div class="col s6 right-align">
                <button type="submit" class="addto waves-effect waves-light btn-large">เพิ่มประชาสัมพันธ์</button>
            </div>
            <div class="col s6">
                <a class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
            </div>
        </div>

    {!! Form::close() !!}
</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection