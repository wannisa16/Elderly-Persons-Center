@extends('elderly.template')
@section('title')
@endsection

@section('link')
 <link href="{{ URL::asset('elderly/css/detailboard.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
<form action="../../borads/{{$borad->id}}" method="POST" role="form">

    <div class="col s12 m12">

            <div class="card green lighten-5">
                <div class="card-content z-depth-5">
                    <p class="layout-text">แก้ไขกระทู้</p>
                    <div class="progress">
                        <div class="determinate" style="width: 100%"></div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 s12">
                            <input value="{{$borad->subject}}" name="subject" id="first_name2" type="text" maxlength="50" class="validate">
                            <label class="active" for="first_name2">หัวข้อ</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m12 s12">                            
                        <textarea  id="textarea1" name="detail" class="materialize-textarea "  >{{$borad->subject}}</textarea>
                        <label   for="textarea1">รายละเอียด</label>
                        </div>
                        <div class="row">
                            <div class="input-field col m6 s12 ">
                                <i class="material-icons prefix">account_circle</i>
                                <input value="{{$questioner->name}}"  id="icon_prefix" type="text" name="name" class="validate">
                                <label for="icon_prefix">ชื่อผู้ตั้งกระทู้</label>
                            </div>
                        </div>
                        <div class="row right">
                            <div class="col s6 m6">
                                <input type="hidden" name="_method" value="PUT" />
                                <button type="submit" class="addto waves-effect waves-light btn-large">แก้ไข</button>
                            </div>
                             <div class="col s6 m6">
                                 <a href="{{url('borads')}}" class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
                             </div>
                        </div> 

                    </div>
                </div>
            </div>

    </div>

    </form>

</div>

@endsection

@section('footer')
@endsection

@section('script')

@endsection