@extends('elderly.template')
@section('title')
บอร์ดสนทนา
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/indexBorad.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="indexborad z-depth-2 center-align"><h4>บอร์ดสนทนา ศูนย์พัฒนาการจัดสวัสดิการสังคม ผู้สูงอายุภูเก็ต</h4>
    </div>
    <div class="row">
        <a href="{{url('/borads/create')}}" class="btn-floating btn-large waves-effect waves-light red right"><i class="material-icons">add</i></a>
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
                        @foreach ($questions as $question)
                        <tr>
                            <td>{{$question->id}}</td>
                            <td><a HREF = " ">{{$question->subject}}</a></td>
                        </tr>
                        @endforeach
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