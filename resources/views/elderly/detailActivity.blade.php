@extends('elderly.template')
@section('title')
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/detailActivity.css') }}" rel="stylesheet" type="text/css" media="all" />  
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="detailactivity center z-depth-2"><h4>กิจกรรมในศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต</h4></div>
</div>
<div class="container">
    <div class="row">
        <div class="col s14 m12">
            <div class="card horizontal ">
                <div class="card-stacked green lighten-5">
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4 font">{{$activity->title}}</span>
                        <div class="progress">
                            <div class="determinate" ></div>
                         </div>

                        <p class="layout-text">{{$activity->content}}</p>
                    </div>

                    <div class="card-action grey lighten-5">
                       <!-- Modal Trigger -->
                       <right><a data-target="modal1" class="modal-trigger waves-effect waves-light btn right" href="#modal1" >รูปภาพ</a></right>

                       <!-- Modal Structure -->

                       <div id="modal1" class="modal modal-fixed-footer">

                        <div class="modal-content">
                        <h5>รูปภาพทั้งหมด</h5>
                        @foreach($images as $image)
                            
                            
                            <img class="materialboxed" src="{{url($image->imagename)}}" alt="NO IMAGE"  width="200" height="200"> 
                        @endforeach
                        </div>
                            <div class="modal-footer">
                               <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">ยกเลิก</a>
                            </div>
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
<script src="{{ asset('/elderly/js/detailActivity.js') }}"></script>
@endsection