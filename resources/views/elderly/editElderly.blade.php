@extends('elderly.template')
@section('title')
แก้ไขข้อมูลผู้สูงอายุ
@endsection

@section('link')
<link href="{{URL::asset('elderly/css/editElderly.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
	<form enctype="multipart/form-data" action="../editElderly/{{$elderly->id}}" method="POST" role="form" >
		<div class="addelderly z-depth-2 center-align s12"><h4>แก้ไขข้อมูลผู้สูงอายุ</h4></div>
			<div class="card card-define col m12 s12">
				<div class="row">
        			<div class="input-field col m5 offset-m1 s12">
          				<input id="name" type="text" class="validate" name="name" value="{{ $elderly->name }}">
          				<label for="name">ชื่อ :</label>
        			</div>
        			<div class="input-field col m5 s12">
          				<input id="surname" type="text" class="validate" name="surname" value="{{ $elderly->surname }}">
          				<label for="surname">นามสกุล :</label>
        			</div>
        		</div>

                <div class="row">
                    <div class="col m2 offset-m1 s12">
                        <h5>วัน/เดือน/ปีเกิด</h5>
                    </div>
                    <div class="col m8 s12">
                        <input type="date" id="myDate" name="brithday" value="{{ $elderly->brithday }}">
                    </div>                   
                </div>
        		
                <div class="row">
                    <div class="file-field input-field col m10 offset-m1 s12">
                        <div class="btn">
                            <span>แนบเอกสาร</span>
                            <input type="file" name="pdf" value="{{ $elderly->file }}" class="file"> 
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="แนบเอกสาร" value="">
                        </div>
                    </div>                   
                </div>

        		<div class="row">
                    <div class="col m2 offset-m1 s12">
                        <h5>เพศ</h5>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="sex" type="radio" id="male" value="ผู้ชาย" {{ ($elderly->sex) == "ผู้ชาย" ? 'checked':'' }} />
                            <label for="male">ผู้ชาย</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="sex" type="radio" id="female" value="ผู้หญิง" {{ ($elderly->sex) == "ผู้หญิง" ? 'checked':'' }}  />
                            <label for="female">ผู้หญิง</label>
                        </p>
                    </div>                        
                </div>
      			<div class="row">
        			<div class="input-field col m5 offset-m1 s12">
          				<input id="first_name" type="text" class="validate" name="education" value="{{ $elderly->education }}">
          				<label for="first_name">การศึกษา :</label>
        			</div>
        			<div class="input-field col m5 s12">
          				<input id="occupation" type="text" class="validate" name="occupation" value="{{ $elderly->occupation }}">
          				<label for="occupation">อาชีพ :</label>
        			</div>
        		</div>
      			<div class="row">
                    <div class="col m2 offset-m1 s12">
                        <h5>สถานภาพ</h5>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="single" value="โสด" {{ ($elderly->status) == "โสด" ? 'checked':'' }}   />
                            <label for="single">โสด</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="marrytogether" value="สมรสอยู่ด้วยกัน" {{ ($elderly->status) == "สมรสอยู่ด้วยกัน" ? 'checked':'' }} />
                            <label for="marrytogether">สมรสอยู่ด้วยกัน</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="marryseparately" value="สมรสแยกกันอยู่" {{ ($elderly->status) == "สมรสแยกกันอยู่" ? 'checked':'' }} />
                            <label for="marryseparately">สมรสแยกกันอยู่</label>
                        </p>
                    </div>                          
                </div>
                
                <div class="row">
                    <div class="col m3 offset-m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="divorce" value="หย่าร้าง" {{ ($elderly->status) == "หย่าร้าง" ? 'checked':'' }} />
                            <label for="divorce">หย่าร้าง</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="unmarriedtogether" value="ไม่ได้สมรสแต่อยู่ด้วยกัน" {{ ($elderly->status) == "ไม่ได้สมรสแต่อยู่ด้วยกัน" ? 'checked':'' }}/>
                            <label for="unmarriedtogether">ไม่ได้สมรสแต่อยู่ด้วยกัน</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" name="status" type="radio" id="widow" value="หม้าย(คู่สมรสเสียชีวิต)" {{ ($elderly->status) == "หม้าย(คู่สมรสเสียชีวิต)" ? 'checked':'' }} />
                            <label for="widow">หม้าย(คู่สมรสเสียชีวิต)</label>
                        </p>
                    </div>                      
                </div>
                <div class="row">
        			<div class="input-field col m5 offset-m1 s12">
          				<input id="first_name" type="number" class="validate" name="child" value="{{ $elderly->child }}">
          				<label for="first_name">บุตร :</label>
        			</div>
        			<div class="input-field col m5 s12">
          				<input id="first_name" type="text" class="validate" name="county" value="{{ $elderly->county }}">
          				<label for="first_name">จังหวัดที่อยู่ปัจจุบัน :</label>
        			</div>
        		</div>
                <div class="row">
                    <div class="col m2 offset-m1 s12">
                        <h5>เกณฑ์</h5>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="A (ช่วยเหลือตัวเองได้)" name="grade" type="radio" id="a" {{ ($elderly->grade) == "A (ช่วยเหลือตัวเองได้)" ? 'checked':'' }}  />
                            <label for="a">A (ช่วยเหลือตัวเองได้)</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="B (พึ่งพาอุปกรณ์ในการดำเนินชีวิต)" name="grade" type="radio" id="b" {{ ($elderly->grade) == "B (พึ่งพาอุปกรณ์ในการดำเนินชีวิต)" ? 'checked':'' }} />
                            <label for="b">B (พึ่งพาอุปกรณ์ในการดำเนินชีวิต)</label>
                        </p>
                    </div>
                    <div class="col m3 s12">
                        <p>
                            <input class="with-gap" value="C (ผู้สูงอายุที่ต้องการการดูแล)" name="grade" type="radio" id="c" {{ ($elderly->grade) == "C (ผู้สูงอายุที่ต้องการการดูแล)" ? 'checked':'' }} />
                            <label for="c">C (ผู้สูงอายุที่ต้องการการดูแล)</label>
                        </p>
                    </div>                          
                </div>
      			<div class="row">
        			<div class="input-field col m10 offset-m1 s12">
          				<textarea id="textarea1" class="materialize-textarea" name="reason">{{ $elderly->reason }}</textarea>
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
                                <input  name="housenumber" type="text" class="validate"  value="{{ $elderly->housenumber }}">
                                <label>บ้านเลขที่ :</label>
                            </div>
                        </div>
                        <div class="col m2 s12">
                            <div class="input-field">
                                <input name="villageno" type="number" class="validate"  value="{{ $elderly->villageno }}">
                                <label >หมู่ที่ :</label>
                            </div>
                        </div>
                        <div class="col m3 s12">
                            <div class="input-field">
                                <input name="alley" type="text" class="validate"  value="{{ $elderly->alley }}">
                                <label>ตรอก :</label>
                            </div>
                        </div>
                        <div class="col m3 s12">
                            <div class="input-field">
                                <input name="alleyway" type="text" class="validate" value="{{ $elderly->alleyway }}">
                                <label>ซอย :</label>
                            </div>
                        </div>                          
                    </div>
                </div>

                <div class="row">
                    <div class="col m11 s12">
                        <div class="col m4 offset-m1 s12">
                            <div class="input-field">
                                <input name="road" type="text" class="validate"  value="{{ $elderly->road }}">
                                <label>ถนน :</label>
                            </div>
                        </div>
                        <div class="col m4 s12">
                            <div class="input-field">
                                <input name="canton" type="text" class="validate"  value="{{ $elderly->canton }}">
                                <label>ตำบล/แขวง :</label>
                            </div>
                        </div>
                        <div class="col m3 s12">
                            <div class="input-field">
                                <input name="district" type="text" class="validate"  value="{{ $elderly->district }}">
                                <label>อำเภอ/เขต :</label>
                            </div>
                        </div>           
                    </div>
                </div>

                <div class="row">
                    <div class="col m11 s12">
                        <div class="col m5 offset-m1 s12">
                            <div class="input-field">
                                <input name="province" type="text" class="validate" value="{{ $elderly->province }}">
                                <label>จังหวัด :</label>
                            </div>
                        </div>
                        <div class="col m6 s12">
                            <div class="input-field">
                                <input name="postcode" type="number" class="validate" value="{{ $elderly->postcode }}">
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