@extends('elderly/template')
@section('title')
เกี่ยวกับ
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/about.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m12">
            <div class="card-panel">
                <div class="container">
	            <div class="row">
		            <div class="col m2 layout-title">ประวัติ</div>
	            </div>
    
	            @foreach ($historys as $history)
	               <p class="flow-text">{{$history->content}}</p>
	            @endforeach

                @if (Auth::guest())
                @else    
                    <div class="row">
                        <a class="right" href="editAbout/{{ $history->id }}"><h5>แก้ไขประวัติ</h5></a>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
<div class="container">
	<div class="row">
		<div class="tab-title col s12">
        <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#goal"><h4>เป้าหมาย</h4></a></li>
            <li class="tab col s3"><a  href="#obligation"><h4>พันธกิจ</h4></a></li>
            <li class="tab col s3"><a href="#role"><h4>ภารกิจ</h4></a></li>
            <li class="tab col s3"><a href="#vision"><h4>วิสัยทัศน์</h4></a></li>
        </ul>
        </div>

        <div id="goal">
        {{--*/$i = 1/*--}}
        @foreach ($goals as $goal)
            <div class="row">  
    		    <div class="col m1 offset-m1 col s2">
    			    <p class="layout-number center-align">{{ $i }}</p>
    	        </div>
    		    <div class="col m9 col s10">
    			    <p class="layout-text">{{ $goal->content }}</p>
    		   </div>
    	    </div>
            @if (Auth::guest())
            @else
            <div class="row">
                <a class="right" href="editAbout/{{$goal->id}}"><p>แก้ไข</p></a>
            </div>
            @endif
        {{--*/$i++/*--}}
        @endforeach
        </div>

        <div id="obligation">
        {{--*/$i = 1/*--}}
        @foreach ($obligations as $obligation)
            <div class="row">
                <div class="col m1 offset-m1 col s02">
                    <p class="layout-number center-align">{{ $i }}</p>
                </div>
                <div class="col m9 col s10">
                    <p class="layout-text">{{ $obligation->content }}</p>
                </div>
            </div>
            @if (Auth::guest())
            @else
            <div class="row">
                <a class="right" href="editAbout/{{$obligation->id}}"><p>แก้ไข</p></a>
            </div>
            @endif
        {{--*/$i++/*--}}
        @endforeach
        </div>

        <div id="role">
        {{--*/$i = 1/*--}}
        @foreach ($roles as $role)
            <div class="row">
                <div class="col m1 offset-m1 col s2">
                    <p class="layout-number center-align">{{ $i }}</p>
                </div>
                <div class="col m9 col s10">
                    <p class="layout-text">{{ $role->content }}</p>
                </div>
            </div>
            @if (Auth::guest())
            @else
            <div class="row">
                <a class="right" href="editAbout/{{$role->id}}"><p>แก้ไข</p></a>
            </div>
            @endif
        {{--*/$i++/*--}}
        @endforeach 
        </div>

        <div id="vision">
        {{--*/$i = 1/*--}}
        @foreach ($visions as $vision)
            <div class="row">
                <div class="col m1 offset-m1 col s2">
                    <p class="layout-number center-align">{{ $i }}</p>
                </div>
                <div class="col m9 col s10">
                    <p class="layout-text">{{ $vision->content }}</p>
                </div>
            </div>
            @if (Auth::guest())
            @else
            <div class="row">
                <a class="right" href="editAbout/{{$vision->id}}"><p>แก้ไข</p></a>
            </div>
            @endif
        {{--*/$i++/*--}}
        @endforeach
        </div>

    </div>
    
</div>
   
@endsection

@section('script')
 <script src="{{ asset('/elderly/js/about.js') }}"></script> 
@endsection