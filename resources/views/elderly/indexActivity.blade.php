@extends('elderly.template')
@section('title')
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/indexActivity.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="activity center z-depth-4"><h4>กิจกรรมในสถานสงเคราะห์ผู้สูงอายุ จังหวัดภูเก็ต</h4></div>
</div>

<div class="container">
    @if (!Auth::guest())
    <div class="row">
        <a href="{{url('/addActivity')}}" class="btn-floating btn-large waves-effect waves-light red right"><i class="material-icons">add</i></a>
    </div>
    @endif
    @foreach ($activities as $activity)   
    <div class="row">
        <div class="col s14 m12">
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><p class="font-title">{{$activity->title}}</p></span>

                        <p class="font-content">{{$activity->content}}</p>
                    </div>

                    <div class="card-action">
                       <right><a class=" waves-effect waves-light btn right" href="detailActivity/{{ $activity->publicizeID }}" >ดูรายละเอียด</a></right>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>



<div align="center">{{$activities->render()}}</div>
</div>
@endsection

@section('footer')
@endsection

@section('script')
<script src="{{ asset('/elderly/js/activity.js') }}"></script>
@endsection