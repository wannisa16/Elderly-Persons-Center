@extends('elderly.template')
@section('title')
รายชื่อผู้บริจาค
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/indexdonates.css') }}" rel="stylesheet" type="text/css" media="all" /> 
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
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>สิ่งของที่บริจาค</th>
                        </tr>
                    </thead>

                
                    <tbody>
                    @foreach ($donors as $donor)   

                        <tr>
                            <td>{{$donor->id}}</td>
                            <td><a href="donates/{{$donor->id}}">{{$donor->d_name}}</a></td>
                            <td><a href="donates/{{$donor->id}}">{{$donor->d_surname}}</a></td>
                            <td>{{$donor->d_object}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div align="center">{{$donors->render()}}</div>
        </div>
</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection