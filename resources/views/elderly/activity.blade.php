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
        <div class="col s12 m7">
            <div class="card horizontal">
                <div class="card-image">
                    <img src="images/2.png" alt="LOGO" class="img-responsive" height="400">
                </div>
                
                <div class="card-stacked">
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                    </div>

                    <div class="card-action">
                         <!-- Modal Trigger -->
                        <a data-target="modal1" class="modal-trigger waves-effect waves-light btn" href="#modal1">Modal</a>

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
@endsection

@section('footer')
@endsection

@section('script')
    <script src="{{ asset('/elderly/js/activity.js') }}"></script>
@endsection