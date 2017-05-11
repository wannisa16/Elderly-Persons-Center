@extends('elderly.template')
@section('title')
เพิ่มข้อมูลผู้สูงอายุ
@endsection

@section('link')
<link href="{{URL::asset('elderly/css/addElderly.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
	<form>
		<div class="addelderly z-depth-2 center-align"><h4>เพิ่มข้อมูลผู้สูงอายุ</h4></div>
			<div class="card card-define col m12">
				<div class="row">
        			<div class="input-field col m5 offset-m1 s12">
          				<input id="name" type="text" class="validate">
          				<label for="name">ชื่อ :</label>
        			</div>
        			<div class="input-field col m5 s12">
          				<input id="surname" type="text" class="validate">
          				<label for="surname">นามสกุล :</label>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col m5 offset-m1 s12">
          				<input type="date" class="datepicker">
        			</div>
        			<div class="file-field input-field col m5 s12">
      					<div class="btn">
        					<span>แนบเอกสาร</span>
        					<input type="file" multiple class="file"> 
      					</div>
      					<div class="file-path-wrapper">
        					<input class="file-path validate" type="text" placeholder="แนบเอกสาร">
      					</div>
    				</div>
        		</div>
      			<div class="row">
        			<div class="input-field col m10 offset-m1 s12">
          				<textarea id="add" class="materialize-textarea"></textarea>
          				<label for="add">ที่อยู่ :</label>
        			</div>
      			</div>
        		<div class="row">
                    <div class="col m2 offset-m1 s12">
                        <h5>เพศ</h5>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="sex" type="radio" id="male"  />
                            <label for="male">ชาย</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="sex" type="radio" id="female"  />
                            <label for="female">หญิง</label>
                        </p>
                    </div>                        
                </div>
      			<div class="row">
        			<div class="input-field col m5 offset-m1 s12">
          				<input id="first_name" type="text" class="validate">
          				<label for="first_name">การศึกษา :</label>
        			</div>
        			<div class="input-field col m5 s12">
          				<input id="first_name" type="text" class="validate">
          				<label for="first_name">อาชีพ :</label>
        			</div>
        		</div>
      			<div class="row">
                    <div class="col m2 offset-m1 s12">
                        <h5>สถานภาพ</h5>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="single"  />
                            <label for="single">โสด</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="marrytogether"  />
                            <label for="marrytogether">สมรสอยู่ด้วยกัน</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="marryseparately" />
                            <label for="marryseparately">สมรสแยกกันอยู่</label>
                        </p>
                    </div>                          
                </div>
                
                <div class="row">
                    <div class="col m3 offset-m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="divorce" />
                            <label for="divorce">หย่าร้าง</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="unmarriedtogether" />
                            <label for="unmarriedtogether">ไม่ได้สมรสแต่อยู่ด้วยกัน</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="widow" />
                            <label for="widow">หม้าย(คู่สมรสเสียชีวิต)</label>
                        </p>
                    </div>                      
                </div>
                <div class="row">
        			<div class="input-field col m5 offset-m1 s12">
          				<input id="first_name" type="text" class="validate">
          				<label for="first_name">บุตร :</label>
        			</div>
        			<div class="input-field col m5 s12">
          				<input id="first_name" type="text" class="validate">
          				<label for="first_name">จังหวัด :</label>
        			</div>
        		</div>
      			<div class="row">
        			<div class="input-field col m10 offset-m1 s12">
          				<textarea id="textarea1" class="materialize-textarea"></textarea>
          				<label for="textarea1">รายละเอียดเพิ่มเติม :</label>
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