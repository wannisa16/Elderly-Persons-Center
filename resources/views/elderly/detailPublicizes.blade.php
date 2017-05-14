@extends('elderly.template')
@section('title')
กิจกรรมในศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต
@endsection

@section('link')
 
@endsection

@section('band')
@endsection

@section('content')
<div class="container">

    <div class="row">
        <label class="layout-title col m12 z-depth-3"><p class="font-title " align="center">{{$publicize->title}}</p></label>
    </div>
    @foreach($images as $image)
    <div class="card">
        <div class="card-image">
            <img src="{{url($image->imagename) }}" alt="">
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col s12 m12">
            <div class="card horizontal">
                <div class="card-content">
                    <p>{{$publicize->content}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s6 right-align">
            <a href="../editFormPublicizes/{{$publicize->publicizeID}}" type="submit" class="edit waves-effect waves-light btn-large">แก้ไข</a>
        </div>
        <div class="col s6">
            <input type="hidden" name="_method" value="DELETE" />
            <button class="cancel waves-effect waves-light btn-large">ลบ</button>
        </div>
    </div>
</div>

@endsection

@section('footer')
@endsection

@section('script')
<script src="{{ asset('/elderly/js/detailActivity.js') }}"></script>
@endsection