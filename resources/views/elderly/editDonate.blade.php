@extends('elderly.template')

@section('title')
รายละเอียดการบริจาค
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/editDonate.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
    <div class="container">
        <form action="../../donates/{{$donor->id}}" enctype="multipart/form-data" method="POST" role="form">
            <div class="editdonate z-depth-2 center-align"><h4>แก้ไขผู้บริจาค</h4></div>

            <div class="card card-define col m12">
            
            <div class="row">
                <div class="layout-title col m10 offset-m1"><h5>ข้อมูลผู้บริจาค</h5></div>
            </div>
            
            <div class="row">
                <div class="col m5 offset-m1">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="name" name="name" type="text" class="validate" value="{{$donor->d_name}}">
                        <label for="name">ชื่อ</label>
                    </div>
                </div>
            
                <div class="col m5 ">
                    <div class="input-field">
                        <input id="surname" name="surname" type="text" class="validate" value="{{$donor->d_surname}}">
                        <label for="surname">สกุล</label>
                    </div>
                </div>
            </div>

            <div class="row col m11">
                <div class="col m5 offset-m1">
                    <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input id="tel" name="tel" type="tel" class="validate" value="{{$donor->d_tel}}">
                        <label for="tel">เบอร์โทรติดต่อ</label>
                    </div>
                </div>
                <div class="col m5 ">
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="text" class="validate" value="{{$donor->d_email}}">
                        <label for="email">อีเมล์</label>
                    </div>
                </div>                    
            </div>
               
            <div class="row">
                <div class="col m10 offset-m1">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">comment</i>
                        <textarea id="detail" class="materialize-textarea" name="detail">{{$donor->d_detail}}</textarea>
                        <label for="detail">รายละเอียดเพิ่มเติม</label>
                    </div>
                </div>
            </div>

            <div class="row col m12">
                <div class="input-field col m5 offset-m1">
                    <input type="text" name="object" class="validate" value="{{$donor->d_object}}">
                    <label for="object">สิ่งของที่ต้องการบริจาค</label>
                </div>
                    
                <div class="file-field input-field col m5">
                    <div class="btn">
                        <span>รูปภาพ</span>
                            <input name="photo" type="file">
                    </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" value="{{$donor->d_picture}}" >
                        </div>
                </div>    
            </div> 

            <div class="row">
                    <div class="layout-title col m10 offset-m1"><h5>ที่อยู่ของผู้ที่บริจาค</h5></div>
            </div> 

            <div class="row col m11">
                <div class="col m3 offset-m1">
                    <div class="input-field">
                        <input  name="number" type="text" class="validate" value="{{$donor->d_number}}">
                        <label>บ้านเลขที่</label>
                    </div>
                </div>
                <div class="col m2 ">
                    <div class="input-field">
                        <input name="village" type="text" class="validate" value="{{$donor->d_village}}">
                        <label >หมู่ที่</label>
                    </div>
                </div>
                <div class="col m3 ">
                    <div class="input-field">
                        <input name="alley" type="text" class="validate" value="{{$donor->d_alley}}">
                        <label>ตรอก</label>
                    </div>
                </div>
                <div class="col m2 ">
                    <div class="input-field">
                        <input name="lane" type="text" class="validate" value="{{$donor->d_lane}}">
                        <label>ซอย</label>
                    </div>
                </div>                          
            </div>

            <div class="row col m11">
                <div class="col m4 offset-m1">
                    <div class="input-field">
                        <input name="road" type="text" class="validate" value="{{$donor->d_road}}">
                        <label>ถนน</label>
                    </div>
                </div>
                <div class="col m3 ">
                    <div class="input-field">
                        <input name="subDistrict" type="text" class="validate" value="{{$donor->d_subdistrict}}">
                        <label>ตำบล/แขวง</label>
                    </div>
                </div>
                <div class="col m3 ">
                    <div class="input-field">
                        <input name="district" type="text" class="validate" value="{{$donor->d_district}}">
                        <label>อำเภอ/เขต</label>
                    </div>
                </div>                  
            </div>

            <div class="row col m11">
                <div class="col m5 offset-m1">
                    <div class="input-field">
                        <input name="province" type="text" class="validate" value="{{$donor->d_province}}">
                        <label>จังหวัด</label>
                    </div>
                </div>
                <div class="col m5 ">
                    <div class="input-field">
                        <input name="postal" type="text" class="validate" value="{{$donor->d_postal}}">
                        <label>รหัสไปรษณีย์</label>
                    </div>
                </div>                    
            </div>
            </div>

            <div class="row">
                <div class="col s6 right-align">
                    <input type="hidden" name="_method" value="PUT" />
                    <button type="submit" class="agree waves-effect waves-light btn-large">ตกลง</button>
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
@endsection