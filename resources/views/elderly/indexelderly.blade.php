@extends('elderly.template')

@section('title') 
รายชื่อผู้สูงอายุ ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/indexelderly.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="indexelderly z-depth-2 center-align"><h4>รายชื่อผู้สูงอายุ ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต</h4></div>
    <div class="row">
        <a href="{{url('/elderlyForm')}}" class="btn-floating btn-large waves-effect waves-light red right"><i class="material-icons">add</i></a>
    </div>    
    <div class="row">
        <div class="col m12 s12 ">
            <table class="striped centered">
                <thead>
                    <tr>
                        <th data-field="id">รหัส</th>
                        <th data-field="sname">ชื่อ</th>
                        <th data-field="lname">สกุล</th>
                        <th data-field="age">อายุ</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($elderlies as $elderly)
                    <tr>
                        <td>{{$elderly->id}}</td>
                        <td><a href="detailElderly/{{$elderly->id}}">{{$elderly->name}}</a></td>
                        <td><a href="detailElderly/{{$elderly->id}}">{{$elderly->surname}}</a></td>
                        <td>{{$elderly->age}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        
            <div align="center">{{$elderlies->render()}}</div>    
        </div>
    
    </div>
</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection