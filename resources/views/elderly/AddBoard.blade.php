@extends('elderly.template')

@section('title')
ตั้งกระทู้ 
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/addBoard.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="addboard z-depth-2 center-align">
        <h4>กะทู้สนทนา</h4>
    </div>
        <form action="../borads" method="post" accept-charset="utf-8">
            <div class="card-content z-depth-2">
                <div class="row">
                    <div class="input-field col m6 offset-m1 s12">
                        <input value="" name="subject" id="first_name2" type="text" maxlength="50" class="validate">
                        <label class="active" for="first_name2">หัวข้อ</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m10 offset-m1 s12">                            
                        <textarea id="textarea1" name="detail" class="materialize-textarea "></textarea>
                        <label  for="textarea1">รายละเอียด</label>
                    </div>
                </div>
                <div class="row">
                    @if (Auth::guest())
                    {{--*/$level = "user"/*--}}
                        <div class="input-field col m6 offset-m1 s12 ">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" name="name" class="validate">
                            <label for="icon_prefix">ชื่อผู้ตั้งกระทู้</label>
                        </div>
                    @else
                    {{--*/$level = "admin"/*--}}
                        <div class="input-field col m6 offset-m1 s12 ">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" name="name" value="{{ Auth::user()->name }}" class="validate">
                            <label for="icon_prefix"></label>
                        </div>

                    @endif
                </div>
                <input type="hidden" name="level" value="{{ $level }}">
            </div>

            <div class="row">
                <div class="col s6 right-align">
                <div class="row"></div>
                    <button type="submit" class="add waves-effect waves-light btn-large">ตกลง</button>
                </div> 
                <div class=" col s6 ">
                <div class="row"></div>
                        <a href="../borads" class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
                </div>
                <input type="hidden" name="level" value="{{ $level }}">
            </div>
            </div>
        </form>
</div>
            

@endsection

@section('footer')
@endsection

@section('script')
@endsection