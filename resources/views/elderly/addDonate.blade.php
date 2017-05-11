@extends('elderly.template')
@section('title')
การบริจาค
@endsection

@section('link')
<link href="{{URL::asset('elderly/css/adddonates.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="donate-buttom tab col s3 "><a class="font" href="#t1">สถานสงเคราะห์ประสงค์</a></li>
                <li class="donate-buttom tab col s3 offset-s1"><a class="font"  href="#t2">ผู้บริจาคประสงค์</a></li>
                <li class="donate-buttom tab col s3 offset-s1"><a class="font" href="#test3">บริจาคเงิน</a></li>
            </ul>
        </div>
    </div>

    <div id="t1" class="col s12">
        <div class="card card-define col m12">
            <form action="../donates" method="post" accept-charset="utf-8">
                <div class="row">
                    <div class="col m6"> 
                        <div class="card-image waves-effect  waves-light">
                            <img class="activator" src="{{url('images/donate1.jpg')}}">
                        </div>
                    </div>
                    <div class="col m6">
                        <h5>สิ่งของที่ต้องการรับบริจาค</h5>
                        <p>
                            <input name="object1" type="checkbox" value="กระดาษชำระ" class="filled-in" id="test5" />
                            <label class="label-check" for="test5">กระดาษชำระ</label>
                        </p>
                        <p>
                            <input name="object2" type="checkbox" value="เตียงนอน" class="filled-in" id="test6" checked="checked" />
                            <label class="label-check" for="test6">เตียงนอน</label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col m12">
                        <div class="col m3">
                            <div class="layout-title"><h5>ข้อมูลของผู้บริจาค</h5></div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                          <i class="material-icons prefix">account_circle</i>
                          <input id="icon_prefix" name="name" type="text" class="validate">
                          <label for="icon_prefix">ชื่อ :</label>
                        </div>
                    </div>
                
                    <div class="col m5 ">
                        <div class="input-field">
                            <input id="icon_prefix" name="surname" type="text" class="validate">
                            <label for="icon_prefix">นามสกุล :</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col m11 ">
                        <div class="col m5 offset-m1">
                            <div class="input-field">
                                <i class="material-icons prefix">phone</i>
                                <input id="icon_telephone" name="tel" type="tel" class="validate">
                                <label for="icon_telephone">เบอร์โทรติดต่อ :</label>
                            </div>
                        </div>
                        <div class="col m6 ">
                            <div class="input-field">
                                <i class="material-icons prefix">email</i>
                                <input id="icon_telephone" name="email" type="text" class="validate">
                                <label for="icon_telephone">อีเมล์ :</label>
                            </div>
                        </div>                    
                    </div>
                </div>
            
                <div class="row">
                    <div class="col m10 offset-m1">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">comment</i>
                            <textarea id="textarea1" class="materialize-textarea" name="detail"></textarea>
                            <label for="textarea1">รายละเอียดเพิ่มเติม :</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col m12">
                        <div class="col m3">
                            <div class="layout-title"><h5>ที่อยู่ของผู้ที่บริจาค</h5></div>
                        </div>
                    </div>
                </div> 

                <div class="row">
                    <div class="col m11 ">
                        <div class="col m3 offset-m1">
                            <div class="input-field">
                                <input  name="number" type="text" class="validate">
                                <label>บ้านเลขที่ :</label>
                            </div>
                        </div>
                        <div class="col m2 ">
                            <div class="input-field">
                                <input name="village" type="text" class="validate">
                                <label >หมู่ที่ :</label>
                            </div>
                        </div>
                        <div class="col m3 ">
                            <div class="input-field">
                                <input name="alley" type="text" class="validate">
                                <label>ตรอก :</label>
                            </div>
                        </div>
                        <div class="col m3 ">
                            <div class="input-field">
                                <input name="lane" type="text" class="validate">
                                <label>ซอย :</label>
                            </div>
                        </div>                          
                    </div>
                </div>

                <div class="row">
                    <div class="col m11 ">
                        <div class="col m4 offset-m1">
                            <div class="input-field">
                                <input name="road" type="text" class="validate">
                                <label>ถนน :</label>
                            </div>
                        </div>
                        <div class="col m4 ">
                            <div class="input-field">
                                <input name="subDistrict" type="text" class="validate">
                                <label>ตำบล/แขวง :</label>
                            </div>
                        </div>
                        <div class="col m3 ">
                            <div class="input-field">
                                <input name="district" type="text" class="validate">
                                <label>อำเภอ/เขต :</label>
                            </div>
                        </div>           
                    </div>
                </div>

                <div class="row">
                    <div class="col m11 ">
                        <div class="col m5 offset-m1">
                            <div class="input-field">
                                <input name="province" type="text" class="validate">
                                <label>จังหวัด :</label>
                            </div>
                        </div>
                        <div class="col m6 ">
                            <div class="input-field">
                                <input name="postal" type="text" class="validate">
                                <label>รหัสไปรษณีย์ :</label>
                            </div>
                        </div>                    
                    </div>
                </div>

                <input disabled value="noImage" id="disabled" type="text" class="noimage" name="type">

            </form>
        </div>
        <div class="row">
            <div class="col s6 right-align">
                <button type="submit" class="addto waves-effect waves-light btn-large">แจ้งความประสงค์บริจาค</button>
            </div>
            <div class="col s6">
                <a class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
            </div>
        </div>        
    </div>


    <div id="t2" class="col s12">
        <div class="card card-define col m12">
            <form action="../donates" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col m6">
                        <div class="card-image waves-effect  waves-light">
                            <img class="activator" src="{{url('images/donate2.jpg')}}">
                        </div>
                    </div>
                    <div class="col m6"> 
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" name="object1" class="validate">
                                <label for="textarea1">สิ่งของที่ต้องการบริจาค :</label>
                            </div>
                        </div> 
                    
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn">
                                    <span>รูปภาพ</span>
                                    <input name="photo" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col m12">
                        <div class="col m3">
                            <div class="layout-title"><h5>ข้อมูลของผู้บริจาค</h5></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" name="name" type="text" class="validate">
                            <label for="icon_prefix">ชื่อ :</label>
                        </div>
                    </div>
            
                    <div class="col m5 ">
                        <div class="input-field">
                            <input id="icon_prefix" name="surname" type="text" class="validate">
                            <label for="icon_prefix">นามสกุล :</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col m11 ">
                        <div class="col m5 offset-m1">
                            <div class="input-field">
                                <i class="material-icons prefix">phone</i>
                                <input id="icon_telephone" name="tel" type="tel" class="validate">
                                <label for="icon_telephone">เบอร์โทรติดต่อ :</label>
                            </div>
                        </div>
                        <div class="col m6 ">
                            <div class="input-field">
                                <i class="material-icons prefix">email</i>
                                <input id="icon_telephone" name="email" type="text" class="validate">
                                <label for="icon_telephone">อีเมล์ :</label>
                            </div>
                        </div>                    
                    </div>
                </div>
                <div class="row">
                    <div class="col m10 offset-m1">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">comment</i>
                            <textarea id="textarea1" class="materialize-textarea" name="detail"></textarea>
                            <label for="textarea1">รายละเอียดเพิ่มเติม :</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col m12">
                        <div class="col m3">
                            <div class="layout-title"><h5>ที่อยู่ของผู้ที่บริจาค</h5></div>
                        </div>
                    </div>
                </div> 

                <div class="row">
                    <div class="col m11 ">
                        <div class="col m3 offset-m1">
                            <div class="input-field">
                                <input  name="number" type="text" class="validate">
                                <label>บ้านเลขที่ :</label>
                            </div>
                        </div>
                        <div class="col m2 ">
                            <div class="input-field">
                                <input name="village" type="text" class="validate">
                                <label >หมู่ที่ :</label>
                            </div>
                        </div>
                        <div class="col m3 ">
                            <div class="input-field">
                                <input name="alley" type="text" class="validate">
                                <label>ตรอก :</label>
                            </div>
                        </div>
                        <div class="col m3 ">
                            <div class="input-field">
                                <input name="lane" type="text" class="validate">
                                <label>ซอย :</label>
                            </div>
                        </div>                          
                    </div>
                </div>

                <div class="row">
                    <div class="col m11 ">
                        <div class="col m4 offset-m1">
                            <div class="input-field">
                                <input name="road" type="text" class="validate">
                                <label>ถนน :</label>
                            </div>
                        </div>
                        <div class="col m4 ">
                            <div class="input-field">
                                <input name="subDistrict" type="text" class="validate">
                                <label>ตำบล/แขวง :</label>
                            </div>
                        </div>
                        <div class="col m3 ">
                            <div class="input-field">
                                <input name="district" type="text" class="validate">
                                <label>อำเภอ/เขต :</label>
                            </div>
                        </div>           
                    </div>
                </div>

                <div class="row">
                    <div class="col m11 ">
                        <div class="col m5 offset-m1">
                            <div class="input-field">
                                <input name="province" type="text" class="validate">
                                <label>จังหวัด :</label>
                            </div>
                        </div>
                        <div class="col m6 ">
                            <div class="input-field">
                                <input name="postal" type="text" class="validate">
                                <label>รหัสไปรษณีย์ :</label>
                            </div>
                        </div>                    
                    </div>
                </div>
                
                <input disabled value="image" id="disabled" type="text" class="image" name="type">
            </form>
        </div>
        <div class="row">
            <div class="col s6 right-align">
                <button type="submit" class="addto waves-effect waves-light btn-large">แจ้งความประสงค์บริจาค</button>
            </div>
            <div class="col s6">
                <a class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@endsection

@section('script')
<script src="{{ asset('/elderly/js/donate.js') }}"></script>      
@endsection