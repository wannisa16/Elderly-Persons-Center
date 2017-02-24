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
            <label class="layout-title col m12 s12 z-depth-3 "><center><p class="font-title ">รายชื่อ</p></center>
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
        @foreach ($elderlies as $elderly)
        <tbody>
          <tr>
            <td>{{$elderly->id}}</td>
            <td>{{$elderly->name}}</td>
            <td>{{$elderly->surname}}</td>
            <td>{{$elderly->age}}</td>
          </tr>
        </tbody>
        @endforeach
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