@extends('elderly.template')
@section('title')
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/activity.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
	<div class="container">
        <div class="activity center z-depth-2"><h4>กิจกรรมในสถานสงเคราะห์ผู้สูงอายุ จังหวัดภูเก็ต</h4></div>
    </div>

    <div class="container">
        @foreach ($activities as $activity)
        <div class="row">
        <div class="col s14 m12">
            <div class="card horizontal">
                <div class="card-image">
                    <img src="images/2.png" alt="LOGO" class="img-responsive" width="200" height="200" >
                </div>
                
                <div class="card-stacked">
                    <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{$activity->title}}</span>

                        <p>{{$activity->content}}</p>
                    </div>

                    <div class="card-action">
                         <!-- Modal Trigger -->
                        <right><a data-target="modal1" class="modal-trigger waves-effect waves-light btn right" href="#modal1" >รูปภาพ</a></right>

                        <!-- Modal Structure -->
                        <div id="modal1" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <h5>รูปภาพทั้งหมด</h5>
                                <img class="materialboxed" src="images/2.png" alt="LOGO" class="img-responsive" width="200" height="200">                            
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
        @endforeach

        <div align="center">{{$activities->render()}}</div>
    </div>
@endsection

@section('footer')
@endsection

@section('script')
    <script src="{{ asset('/elderly/js/activity.js') }}"></script>
@endsection