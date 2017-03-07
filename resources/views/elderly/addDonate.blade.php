@extends('elderly.template')
@section('title')
การบริจาค
@endsection

@section('link')
<link href="{{URL::asset('elderly/css/addDonate.css')}}" rel="stylesheet" type="text/css" media="all" />

@endsection

@section('band')
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="donate-buttom tab col s3 " ><a class="font" href="#t1">สถานสงเคราะห์ประสงค์</a></li>
                <li class="donate-buttom tab col s3 offset-s1"><a class="font"  href="#t2">ผู้บริจาคประสงค์</a></li>
                <li class="donate-buttom tab col s3 offset-s1"><a class="font" href="#test3">บริจาคเงิน</a></li>
            </ul>
        </div>
    </div>

    <div id="t1" class="col s12">
        <div class="card card-define col m12">
            <div class="row">
                <div class="col m6">
                    <div class="card-image waves-effect  waves-light">
                        <img class="activator" src="images/1.jpg">
                    </div>
                </div>
                <div class="col m6">
                    <h5>สิ่งของที่ต้องการรับบริจาค</h5>
                    <p>
                        <input type="checkbox" class="filled-in" id="test5" />
                        <label class="label-check" for="test5">กระดาษชำระ</label>
                    </p>
                    <p>
                        <input type="checkbox" class="filled-in" id="test6" checked="checked" />
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
                <div class="col m10 offset-m1">
                    <div class="input-field">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">First Name</label>
                  </div>
              </div>
            </div>
            <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Telephone</label>
                        </div>
                    </div>
                    <div class="col m6 ">
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Email</label>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="row">
                <div class="col m10 offset-m1">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">comment</i>
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Textarea</label>
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
                <div id="map"></div>
            </div>
        </div>        
    </div>


    <div id="t2" class="col s12">
        <div class="card card-define col m12">
            <div class="row">
                <div class="col m6">
                    <div class="card-image waves-effect  waves-light">
                        <img class="activator" src="images/1.jpg">
                    </div>
                </div>
                <div class="col m6">  
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">สิ่งของที่ต้องการบริจาค</label>
                    </div>
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>รูปภาพ</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
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
                <div class="col m10 offset-m1">
                    <div class="input-field">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">First Name</label>
                  </div>
              </div>
            </div>
            <div class="row">
                <div class="col m11 ">
                    <div class="col m5 offset-m1">
                        <div class="input-field">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Telephone</label>
                        </div>
                    </div>
                    <div class="col m6 ">
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Email</label>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="row">
                <div class="col m10 offset-m1">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">comment</i>
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Textarea</label>
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
                <div id="map"></div>
            </div>
        </div>   
        </div>
</div>



@endsection

@section('script')
<script src="{{ asset('/elderly/js/donate.js') }}"></script> 
@endsection