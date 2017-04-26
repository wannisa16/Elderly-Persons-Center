@extends('elderly.template')
@section('title')
บอร์ดสนทนา
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/indexBorad.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="indexborad z-depth-2 center-align"><h4>บอร์ดสนทนา ศูนย์พัฒนาการจัดสวัสดิการสังคม ผู้สูงอายุภูเก็ต</h4></div>
        <div class="row">
            <div class="col m12 s12 ">
                <table class="striped centered">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>หัวข้อเรื่อง</th>
                            <th>เจ้าของกะทู้</th>
                        </tr>
                    </thead>

                
                    <tbody>   

                        <tr>
                            <td>1</td>
                            <td>ต้องการทราบว่าวันที่23พฤษภาคมว่างไหมคะ</td>
                            <td>สมชาย สวางจัง</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>ต้องการทราบว่าวันที่26พฤษภาคมว่างไหมคะ</td>
                            <td>สวยใส สุดสุด</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection