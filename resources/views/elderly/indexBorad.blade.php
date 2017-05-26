@extends('elderly.template')
@section('title')
กระทู้สนทนา
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/indexBorad.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="indexborad z-depth-2 center-align"><h4>กระทู้สนทนา ศูนย์พัฒนาการจัดสวัสดิการสังคม ผู้สูงอายุภูเก็ต</h4>
    </div>
    <div class="row">
        <a href="{{url('/borads/create')}}" class="btn btn-large waves-effect waves-light red right"><i class="material-icons left">add</i>ตั้งกระทู้</a>
    </div>   
        <div class="row">
            <div class="col m12 s12 ">
                <table class="striped centered">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>หัวข้อเรื่อง</th>
                        </tr>
                    </thead>

                
                    <tbody>
                    {!!Form::hidden($i=1)!!}   
                        @foreach ($questions as $question)
                        <tr>
                            <td><a HREF = "borads/{{$question->id}}">{{$i}}</a></td>
                            <td><a HREF = "borads/{{$question->id}}">{{$question->subject}}</a></td>
                        {!!Form::hidden($i++)!!}
                        @endforeach
                        </tr>
                    
                    </tbody>
                </table>
                <div align="center">{{$questions->render()}}</div>
            </div>
        </div>
</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection