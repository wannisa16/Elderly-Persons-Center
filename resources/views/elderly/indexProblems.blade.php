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
                    <th data-field="id">วัน/เดือน/ปี</th>
                    <th data-field="sname">เรื่อง</th>
                    <th data-field="lname">สถานะการช่วยเหลือ</th>
                  </tr>
                </thead>
        
                <tbody>
                  <tr>
                    <td>123</td>
                    <td>asdfdddddddddddddddddddddddddddddddddddddddddddddddddddd</td>
                    <td>แล้ว</td>
                  </tr>
                  <tr>
                    <td>123</td>
                    <td>asdfdddddddddddddddddddddddddddddddddddddddddddddddddddd</td>
                    <td>แล้ว</td>
                  </tr>
                </tbody>
        
              </table>
                
        </div>
    
    </div>
</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection