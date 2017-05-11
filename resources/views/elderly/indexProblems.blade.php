@extends('elderly.template')

@section('title')
รายชื่อการแจ้งผู้ประสบปัญหาทางสังคม 
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/indexProblems.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">

    <div class="row">
        <div class="indexproblems z-depth-2 center-align"><h4>รายชื่อการแจ้งผู้ประสบปัญหาทางสังคม</h4></div>
    </div>

    <div class="row">
        <div class="col m12 s12 ">

              <table class="striped centered">
                <thead>
                  <tr>
                    <th data-field="id">รหัส</th>
                    <th data-field="name">ชื่อ</th>
                    <th data-field="surname">สกุล</th>
                    <th data-field="status">สถานะการช่วยเหลือ</th>
                  </tr>
                </thead>
        
                <tbody>
                    @foreach ($problems as $problem)
                    <tr>
                   
                        <td>{{$problem->victim_id}}</td>
                        <td><a href="problems/{{$problem->victim_id}}">{{$problem->v_name}}</a></td>
                        <td><a href="problems/{{$problem->victim_id}}">{{$problem->v_surname}}</a></td>
                        <td>{{$problem->v_situation}}</td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        
            <div align="center">{{$problems->render()}}</div>    
        </div>
    
    </div>
</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection