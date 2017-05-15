@extends('elderly.template')
@section('title')
@endsection

@section('link')
 <link href="{{ URL::asset('elderly/css/editComment.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
<form action="../../comments/{{$comment->id}}" method="POST" role="form">
    <div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="input-field col s12 m12">
                            <textarea id="textarea1" class="materialize-textarea" name="comment">{{$comment->comment}}</textarea>
                            <label for="textarea1">กล่องแสดงความคิดเห็น</label>
                        </div>
                    </div>
                    <div class="row "></div>
                    <input type="hidden" name="_method" value="PUT" />
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