@extends('elderly.template')

@section('title') 
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/home.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('band')
@endsection

@section('content')
<div class="container">

    <div class="row">
            <label class="layout-title col m12 s12 z-depth-3 "><p class="font-title "><i class="material-icons">perm_identity</i> ข้อมูลทั่วไป</p>
            </label>
    </div>

    <div class="row">
    
<ul class="collection">
      

        <div class="col m1 s12 ">
        <p >รหัส</p>
        </div>
        
        <div class="col m11 s12 ">
        <p>123456</p>
        </div>
        
        <div class="col m1 s12 ">
        <p>ชื่อ</p>
        </div>
        
        <div class="col m2 s12 ">
        <p>นายสมหมาย</p>
        </div>
        
        <div class="col m1 s12 ">
        <p>สกุล</p>
        </div>
        
        <div class="col m8 s12 ">
        <p>อยู่นาน</p>
        </div>

        <div class="col m1 s12 ">
        <p>วันเกิด</p>
        </div>
        
        <div class="col m2 s12 ">
        <p>1/2/2520</p>
        </div>
        
        <div class="col m1 s12 ">
        <p>อายุ</p>
        </div>
        <div class="col m8 s12 ">
        <p>50</p>
        </div>
        
        <div class="col m1 s12 ">
        <p>เพศ</p>
        </div>
        
        <div class="col m2 s12 ">
        <p>ชาย</p>
        </div>

        <div class="col m1 s12 ">
        <p>สถาณะ</p>
        </div>
        
        <div class="col m8 s12 ">
        <p>โสด</p>
        </div>
        
        <!-- <div class="col m6 s12 ">
        <p>child</p>
        </div>

        <div class="col m6 s12 ">
        <p>ppp</p>
        </div>

        <div class="col m6 s12 ">
        <p>อาชีพ</p>
        </div>

        <div class="col m6 s12 ">
        <p>ppp</p>
        </div>

        <div class="col m6 s12 ">
        <p>ระดับการศึกษา</p>
        </div>

        <div class="col m6 s12 ">
        <p>ppp</p>
        </div>

        <div class="col m6 s12 ">
        <p>address</p>
        </div>

        <div class="col m6 s12 ">
        <p>ppp</p>
        </div>

        <div class="col m6 s12 ">
        <p>เขต</p>
        </div>

        <div class="col m6 s12 ">
        <p>ppp</p>
        </div>

        <div class="col m6 s12 ">
        <p>เหตุผล</p>
        </div>

        <div class="col m6 s12 ">
        <p>ppp</p>
        </div> -->

        </ul>
</div>
</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection