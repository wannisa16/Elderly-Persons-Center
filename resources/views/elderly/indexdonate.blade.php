@extends('elderly.template')
@section('title')
รายชื่อผู้บริจาค
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/indexdonate.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
  <div class="indexdonate z-depth-2 center-align"><h4>รายชื่อผู้บริจาค สถานสงเคราะห์ผู้สูงอายุ จังหวัดภูเก็ต</h4></div>
    <div class="row">
      <div class="col m12 s12 ">
        <table class="striped centered">
          <thead>
            <tr>
              <th>ลำดับ</th>
              <th>ชื่อ-นามสกุล</th>
              <th>สิ่งของที่บริจาค</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1</td>
              <td>Eclair</td>
              <td>เตียงนอน</td>
            </tr>

            <tr>
              <td>2</td>
              <td>Jellybean</td>
              <td>เสื้อผ้า</td>
            </tr>

            <tr>
              <td>3</td>
              <td>Lollipop</td>
              <td>คอมพิวเตอร์</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  <ul class="pagination" align="center">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection