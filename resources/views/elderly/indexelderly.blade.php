@extends('elderly.template')

@section('title') 
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/homee.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">

    <div class="row">
            <label class="layout-title col m12 s12 z-depth-3 "><center><p class="font-title ">รายชื่อผู้สูงอายุ</p></center>
            </label>
    </div>
    <div class="row">
        <div class="col m12 s12 ">

            <table class="striped">
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
                        <td>{{$elderly->name}}</td>
                        <td>{{$elderly->surname}}</td>
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