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
          <div class="card col s12 m12">
            <div class="card-content ">
                <div class="col s9 m9">
                 <span class="card-title ">{{$booard->subject}} </span>   
                </div>
                <div class="col s3 m3">
                @if (!Auth::guest())
                <form action="../borads/{{$booard->id}}" method="POST" role="form">
                <div class="col s9 m9"></div>
                    <div class="col s3 m3">
                    <a href="{{$booard->id}}/edit" type="submit" ><i class="tiny material-icons right">mode_edit</i></a>
                    </div>
                </form>
                @endif
                </div>
                    <hr width="100%" />
                <p class="l-question">{{$booard->detail}}</p>
            </div>
            <div class="card-action col s12 m12">
            <div class="col s8 m8">
              <a>{{$questioner->name}}</a>
            </div>
                    <div class="col s4 m4">
                    @if (!Auth::guest())
                    <form action="../borads/{{$booard->id}}" method="POST" role="form">
                    <div class="col s7 m7"></div>
                        <div class="col s3 m3"></div>
                    
                        <div class="col s1 m1">
                            <input type="hidden" name="_method" value="DELETE" />
                            <button class="cancel waves-effect waves-light small"><i class=" tiny material-icons ">delete</i></button>
                        </div>
                    </form>
                    @endif
                    </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row col s12 m12 ">
        <div class="col s12 m1">
        <div class="col s12 m1"></div>
            <div class="progress line">
                <div class="determinate" ></div>
            </div>
        </div>

        <div class="col s12 m2">
            <p><i class="small material-icons">question_answer</i>  {{$comments_count}}   ความคิดเห็น</p>
        </div>
        <div class="col s12 m9">
            <div class="progress line">
                <div class="determinate" ></div>
            </div>
        </div>
        </div>
    
    {!!Form::hidden($i=1)!!}
    @foreach($comments as $comment)
    @if ($comment->level == 'user')
    <div class="row">
        <div class="col s12 m12">
            <div class="card indigo lighten-5 col s12 m12">
                <div class="card-content ">
                    <span class="display-post-number col s9 m9" id="comment11">ความคิดเห็นที่ {{$i}}</span>
                    <div class="row"></div>
                    <p class="l-text">{{$comment->comment}}</p>
                </div>
                <div class="card-action col s12 m12">
                <div class="col s8 m8">
                   <a>{{$comment->name}}</a> <a>{{$comment->ip}}</a>
                </div>
                <div class="col s4 m4">
                    @if (!Auth::guest())
                    <form action="../comments/{{$comment->id}}" method="POST" role="form">
                    <div class="col s7 m7"></div>
                        <div class="col s3 m3"></div>
                    
                        <div class="col s1 m1">
                            <input type="hidden" name="_method" value="DELETE" />
                            <button class="cancel waves-effect waves-light small"><i class=" tiny material-icons ">delete</i></button>
                        </div>
                    </form>
                    @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
    @else
        <div class="row">
        <div class="col s12 m12">
            <div class="card yellow lighten-4 col s12 m12">
                <div class="card-content ">
                    <span class="display-post-number col s9 m9" id="comment11">ความคิดเห็นที่ {{$i}}</span>
                    <div class="col s3 m3">
                    @if (!Auth::guest())
                    <form action="../comments/{{$comment->id}}" method="POST" role="form">
                    <div class="col s9 m9"></div>
                        <div class="col s3 m3">
                            <a href="../comments/{{$comment->id}}/edit" type="submit" class="edit waves-effect waves-light btn-small" ><i class="tiny material-icons right">mode_edit</i></a>
                        </div>
                    </form>
                    @endif
                    </div>
                    <div class="row"></div>
                    <p class="l-text">{{$comment->comment}}</p>
                </div>
                <div class="card-action col s12 m12">
                <div class="col s8 m8">
                   <a>{{$comment->name}}</a> <a>{{$comment->ip}}</a>
                </div>
                   <div class="col s4 m4">
                    @if (!Auth::guest())
                    <form action="../comments/{{$comment->id}}" method="POST" role="form">
                    <div class="col s7 m7"></div>
                        <div class="col s3 m3"></div>
                    
                        <div class="col s1 m1">
                            <input type="hidden" name="_method" value="DELETE" />
                            <button class="cancel waves-effect waves-light small"><i class=" tiny material-icons ">delete</i></button>
                        </div>
                    </form>
                    @endif
                    </div>
                </div>
                </div>
            </div>
        </div>
    
    @endif
    {!!Form::hidden($i++)!!}
    @endforeach
    <div class="row col s12 m12 ">
        <div class="col s12 m1">
        <div class="col s12 m1"></div>
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

    <form action="{{url('comments')}}" method="post" accept-charset="utf-8">
    <div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="input-field col s12 m12">
                            <textarea id="textarea1" class="materialize-textarea" name="comment"></textarea>
                            <label for="textarea1">กล่องแสดงความคิดเห็น</label>
                        </div>
                    </div>
                    <div class="row ">
                    @if (Auth::guest())
                        <input name="level" type="hidden" value="user">
                        <div class="input-field col s6 m6">
                          <i class="material-icons prefix">account_circle</i>
                          <input id="icon_prefix" name="name" type="text" class="validate">
                          <label for="icon_prefix">ชื่อ</label>
                        </div>
                    @else
                        <input name="level" type="hidden" value="admin">
                        <div class="input-field col s6 m6">
                          <i class="material-icons prefix">account_circle</i>
                          <input id="icon_prefix" name="name" type="text" value="{{ Auth::user()->name }}" class="validate" >
                          <label for="icon_prefix">ชื่อ</label>
                        </div>
                    @endif  

                    </div>
                    <input name="id" type="hidden" value="{{$booard->id}}">
                    <div class="card-action">
                        <button type="submit" class="addto waves-effect waves-light btn-large">ส่งข้อความ</button>
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