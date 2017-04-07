@extends('elderly.template')
@section('title')
ติดต่อเรา
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/contact.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
  <div class="contact z-depth-2 center-align"><h4>ติดต่อสถานสงเคราะห์ผู้สูงอายุ จังหวัดภูเก็ต</h4></div><br>
    <div class="row">
    	<div class="col s12 m4">
        <div class="card-panel z-depth-3">   
          <div class="row">
            <div class="add col s12 m12">
              <i class="medium material-icons">location_on</i>
            </div>
          </div>
            <div class="row">
            <div class="padd col s12 m12">
              <p>สถานสงเคราะห์ผู้สูงอายุ จังหวัดภูเก็ต 11/41 หมู่4 ถ.บ้านดอนเชิงทะเล ต.เชิงทะเล อ.ถลาง จังหวัด ภูเก็ต</p> 
            </div>
            </div> 
    		</div>
      </div>
    	<div class="col s12 m4">
        <div class="card-panel z-depth-3">
          <div class="row">
            <div class="call col s12 m12">
              <i class="medium material-icons">phone</i>
            </div>
          </div>
              <div class="row">
              <div class="pcall col s12 m12">
    			    <p>โทรศัพท์: 076-529700</p>
              <p>โทรศัพท์: 076-529699</p>
              </div>
              </div>
    		</div>
      </div>
    
    
    	<div class="col s12 m4">
        <div class="card-panel z-depth-3">
          <div class="row">
            <div class="mail col s12 m12">
              <i class="medium material-icons">person_pin</i>
            </div>
          </div>
              <div class="row">
              <div class="pmail col s12 m12">
              <p>อีเมล์ : nartruthai.nkr@gmail.com</p>
              <p>Facebook : สถานสงเคราะห์ผู้สูงอายุ</p>
              </div>
              </div> 
    		</div>
      </div>
    </div>
</div>
 <div id="map"></div>
  





@endsection

@section('footer')
@endsection

@section('script')
@endsection