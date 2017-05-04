@extends('elderly.template')

@section('title') 
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/home.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">

    <div class="row">
            <label class="layout-title col m12 s12 z-depth-3 "><center><p class="font-title ">รายชื่อผู้ประสบปัญหาทางสังคม</p></center>
            </label>
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
                        <td>{{$problem->v_name}}</td>
                        <td>{{$problem->v_surname}}</td>
                        <td>{{$problem->v_status}}</td>
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