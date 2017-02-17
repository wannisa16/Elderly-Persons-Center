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
        <div class="col s12 ">

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
          <tr>
            <td>1</td>
            <td>นางวันเพ็ญ</td>
            <td>เดือนสิบสอง</td>
            <td>90</td>
          </tr>
          <tr>
            <td>2</td>
            <td>นายมาแล้ว</td>
            <td>ระวังนะ</td>
            <td>99</td>
          </tr>
          <tr>
            <td>3</td>
            <td>นางสาวเอาแต่ใจ</td>
            <td>จริงนะ</td>
            <td>108</td>
          </tr>
        </tbody>
      </table>
        
    </div>
</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection