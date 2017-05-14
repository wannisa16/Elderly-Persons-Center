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
    <div class="row"></div>
    <div class="row">
        <div class="col s12 m12">
          <div class="card ">
            <div class="card-content ">
                <span class="card-title ">{{$booard->subject}}</span>
                    <hr width="100%" />
                <p class="l-question">{{$booard->detail}}</p>
            </div>
            <div class="card-action ">
              <a>{{$questioner->name}}</a>
            </div>
          </div>
        </div>
    </div>
    <div class="row ">
        <div class="col s12 m1">
        <div class="col s12 m1"></div>
            <div class="progress line">
                <div class="determinate" ></div>
            </div>
        </div>
        <div class="col s12 m2">
            <p><i class="small material-icons">question_answer</i>   ความคิดเห็น</p>
        </div>
        <div class="col s12 m9">
            <div class="progress line">
                <div class="determinate" ></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12">
            <div class="card ">
                <div class="card-content ">
                    <span class="display-post-number" id="comment11">ความคิดเห็นที่ 11</span>
                    <div class="row"></div>
                    <p class="l-text">ฟหฟหฟห</p>
                </div>
                <div class="card-action">
                    <a>ฟหฟหฟ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col s12 m1">
            <div class="progress line">
                <div class="determinate" ></div>
            </div>
        </div>
        <div class="col s12 m2">
            <p><i class="small material-icons">comment</i>   แสดงความคิดเห็น</p>
        </div>
        <div class="col s12 m9">
            <div class="progress line">
                <div class="determinate" ></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="input-field col s12 m12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">กล่องแสดงความคิดเห็น</label>
                        </div>
                    </div>
                    <div class="card-action">
                        <a class="waves-effect waves-light btn ">ส่งข้อความ</a>
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

@endsection