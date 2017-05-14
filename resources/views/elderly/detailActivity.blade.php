@extends('elderly.template')
@section('title')
กิจกรรมในศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/detailActivityy.css') }}" rel="stylesheet" type="text/css" media="all" />  
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <form action="../indexActivity" method="post" role="form">
        <div class="detailactivity center z-depth-2"><h4>กิจกรรมในศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต</h4></div>

    <div class="row">
        <div class="col m12 s12">
            <div class="card horizontal ">
                <div class="card-stacked">
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
    
    <div class="row">
        <div class="col s6 right-align">
            <a href="../editactivity/{{$activity->publicizeID}}" type="submit" class="edit waves-effect waves-light btn-large">แก้ไข</a>
        </div>
        <div class="col s6">
            <input type="hidden" name="_method" value="DELETE" />
            <button class="cancel waves-effect waves-light btn-large">ลบ</button>
        </div>
    </div>
    </div>
    </form>
</div>



@endsection

@section('footer')
@endsection

@section('script')
<script src="{{ asset('/elderly/js/detailActivity.js') }}"></script>
@endsection