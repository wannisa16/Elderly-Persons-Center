@extends('elderly.template')
@section('title')
เพิ่มข้อมูลผู้สูงอายุศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต
@endsection

@section('link')
<link href="{{URL::asset('elderly/css/addElderly.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="addelderly z-depth-2 center-align"><h4>เพิ่มข้อมูลผู้สูงอายุศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต</h4></div>
	<form enctype="multipart/form-data" action="{{ url('/addElderly') }}" method="post" >
		<div class="card card-define col m12">
			<div class="row">
        		<div class="input-field col m5 offset-m1 s12">
          			<input id="name" type="text" class="validate" name="name">
          			<label for="name">ชื่อ :</label>
        		</div>
        		<div class="input-field col m5 s12">
          			<input id="surname" type="text" class="validate" name="surname">
          			<label for="surname">นามสกุล :</label>
        		</div>
        	</div>

            <div class="row">
                <div class="col m2 offset-m1 s12">
                    <h5>วัน/เดือน/ปีเกิด</h5>
                </div>
                <div class="col m8 s12">
                    <input type="date" id="myDate" name="brithday">
                </div>                   
            </div>
        		
            <div class="row">
                <div class="file-field input-field col m10 offset-m1 s12">
                    <div class="btn">
                        <span>แนบเอกสาร</span>
                        <input type="file" class="file" name="pdf"> 
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="แนบเอกสาร">
                    </div>
                </div>                   
            </div>

        	<div class="row">
                <div class="col m2 offset-m1 s12">
                    <h5>เพศ</h5>
                </div>
            
                <div class="col m3 s12">
                    <p>
                        <input class="with-gap" value="ผู้ชาย"  name="sex" type="radio" id="male" />
                        <label for="male">ผู้ชาย</label>
                    </p>
                </div>
                <div class="col m3 s12">
                    <p>
                        <input class="with-gap" value="ผู้หญิง" name="sex" type="radio" id="female"  />
                        <label for="female">ผู้หญิง</label>
                    </p>
                </div>                        
            </div>
      		<div class="row">
        		<div class="input-field col m5 offset-m1 s12">
          			<input id="first_name" type="text" class="validate" name="education">
          			<label for="first_name">การศึกษา :</label>
        		</div>
        		<div class="input-field col m5 s12">
          			<input id="first_name" type="text" class="validate" name="occupation">
          			<label for="first_name">อาชีพ :</label>
        		</div>
        	</div>
      		<div class="row">
                <div class="col m2 offset-m1 s12">
                    <h5>สถานภาพ</h5>
                </div>
                <div class="col m3 s12">
                    <p>
                        <input class="with-gap" value="โสด" name="status" type="radio" id="single"  />
                        <label for="single">โสด</label>
                    </p>
                </div>
                <div class="col m3 s12">
                    <p>
                        <input class="with-gap" value="สมรสอยู่ด้วยกัน" name="status" type="radio" id="marrytogether"  />
                        <label for="marrytogether">สมรสอยู่ด้วยกัน</label>
                    </p>
                </div>
                <div class="col m3 s12">
                    <p>
                        <input class="with-gap" value="สมรสแยกกันอยู่" name="status" type="radio" id="marryseparately" />
                        <label for="marryseparately">สมรสแยกกันอยู่</label>
                    </p>
                </div>                          
            </div>
                
            <div class="row">
                <div class="col m3 offset-m3 s12">
                    <p>
                        <input class="with-gap" value="หย่าร้าง" name="status" type="radio" id="divorce" />
                        <label for="divorce">หย่าร้าง</label>
                    </p>
                </div>
                <div class="col m3 s12">
                    <p>
                        <input class="with-gap" value="ไม่ได้สมรสแต่อยู่ด้วยกัน" name="status" type="radio" id="unmarriedtogether" />
                        <label for="unmarriedtogether">ไม่ได้สมรสแต่อยู่ด้วยกัน</label>
                    </p>
                </div>
                <div class="col m3 s12">
                    <p>
                        <input class="with-gap" value="หม้าย(คู่สมรสเสียชีวิต" name="status" type="radio" id="widow" />
                        <label for="widow">หม้าย(คู่สมรสเสียชีวิต)</label>
                    </p>
                </div>                      
            </div>
            <div class="row">
        		<div class="input-field col m5 offset-m1 s12">
          			<input id="first_name" type="number" class="validate" name="  child">
          			<label for="first_name">บุตร :</label>
        		</div>
        		<div class="input-field col m5 s12">
          			<input id="first_name" type="text" class="validate" name="county">
          			<label for="first_name">จังหวัดที่อยู่ปัจจุบัน :</label>
        		</div>
        	</div>
            <div class="row">
                <div class="col m2 offset-m1 s12">
                    <h5>เกณฑ์</h5>
                </div>
                <div class="col m3 s12">
                    <p>
                        <input class="with-gap" value="A (ช่วยเหลือตัวเองได้)" name="grade" type="radio" id="a"  />
                        <label for="a">A (ช่วยเหลือตัวเองได้)</label>
                    </p>
                </div>
                <div class="col m3 s12">
                    <p>
                        <input class="with-gap" value="B (พึ่งพาอุปกรณ์ในการดำเนินชีวิต)" name="grade" type="radio" id="b"  />
                        <label for="b">B (พึ่งพาอุปกรณ์ในการดำเนินชีวิต)</label>
                    </p>
                </div>
                <div class="col m3 s12">
                    <p>
                        <input class="with-gap" value="C (ผู้สูงอายุที่ต้องการการดูแล)" name="grade" type="radio" id="c" />
                        <label for="c">C (ผู้สูงอายุที่ต้องการการดูแล)</label>
                    </p>
                </div>                          
            </div>
      		<div class="row">
        		<div class="input-field col m10 offset-m1 s12">
          			<textarea id="textarea1" class="materialize-textarea" name="  reason"></textarea>
          			<label for="textarea1">รายละเอียดเพิ่มเติม :</label>
        		</div>
      		</div>
		</div>

            <div class="card card-define col m12">
                <div class="row">
                    <div class="layout-title col m10 offset-m1 s12">ที่อยู่ของผู้สูงอายุ</div>
                </div>

                <div class="row">
                    <div class="col m11 ">
                        <div class="col m3 offset-m1 s12">
                            <div class="input-field">
                                <input  name="housenumber" type="text" class="validate" name="housenumber">
                                <label>บ้านเลขที่ :</label>
                            </div>
                        </div>
                        <div class="col m2 s12">
                            <div class="input-field">
                                <input  type="number" class="validate" name="villageno">
                                <label >หมู่ที่ :</label>
                            </div>
                        </div>
                        <div class="col m3 s12">
                            <div class="input-field">
                                <input name="alley" type="text" class="validate" >
                                <label>ตรอก :</label>
                            </div>
                        </div>
                        <div class="col m3 s12">
                            <div class="input-field">
                                <input name="alleyway" type="text" class="validate" >
                                <label>ซอย :</label>
                            </div>
                        </div>                          
                    </div>
                </div>

                <div class="row">
                    <div class="col m11 s12">
                        <div class="col m4 offset-m1 s12">
                            <div class="input-field">
                                <input name="road" type="text" class="validate" >
                                <label>ถนน :</label>
                            </div>
                        </div>
                        <div class="col m4 s12">
                            <div class="input-field">
                                <input name="canton" type="text" class="validate" >
                                <label>ตำบล/แขวง :</label>
                            </div>
                        </div>
                        <div class="col m3 s12">
                            <div class="input-field">
                                <input name="district" type="text" class="validate" >
                                <label>อำเภอ/เขต :</label>
                            </div>
                        </div>           
                    </div>
                </div>

                <div class="row">
                    <div class="col m11 s12">
                        <div class="col m5 offset-m1 s12">
                            <div class="input-field">
                                <input name="province" type="text" class="validate" >
                                <label>จังหวัด :</label>
                            </div>
                        </div>
                        <div class="col m6 s12">
                            <div class="input-field">
                                <input name="postcode" type="number" class="validate" >
                                <label>รหัสไปรษณีย์ :</label>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>

		<div class="row">
            <div class="col s6 right-align">
                <button type="submit" class="add waves-effect waves-light btn-large">ตกลง</button>
            </div>
            <div class="col s6">
                <a class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
            </div>
        </div>
	</form>
</div>
@endsection

@section('footer')
@endsection

@section('script')
<script src="{{ URL::asset('/elderly/js/addElderly.js') }}"> </script>
@endsection