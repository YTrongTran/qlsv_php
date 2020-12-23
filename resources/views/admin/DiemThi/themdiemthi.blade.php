@extends('layouts.trangchu')

@section('content')
    <div class="container-fuild py-5" style="margin-top: 50px; margin-bottom: 1px;">
        <div class="row" style="background-color:#ddd; padding: 40px; padding-bottom: 80px;">

            <div class="col-md-10 mx-auto">
            <form action="{{route('qlsv_diemthi.store')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="inputFirstname">Điểm lý thuyết:</label>
                            <input type="text" class="form-control" name="diemlythuyet" id="inputFirstname" placeholder="nhập điểm lý thuyết" />
                        </div>
                        <div class="col-sm-6">
                            <label for="inputFirstname">Điểm thực hành:</label>
                            <input type="text" class="form-control" name="diemthuchanh" placeholder="nhập điểm thưc hành" id="inputFirstname" />
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="recipient-name">Ngày cho điểm:</label>
                            <input type="date" class="form-control" name="ngaychodiem" placeholder="nhập ngày chờ điểm">
                        </div>
                        <div class="col-sm-6">
                            <label for="recipient-name">Ghi chú:</label>
                            <input type="text" class="form-control" name="ghichu" placeholder="nhập ghi chú">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">ID_KIỂU THI:</label>
                            <select name="id_kieuthi">
                                <label for="id_kieuthi">ID_KIEUTHI:</label>
                                <option value="0">------Chọn------</option>
                                @foreach($qlsv_kieuthi as $key=>$value)
                                <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="">ID_SINH VIÊN:</label>
                            <select name="id_sinhvienlophoc">
                                <label for="id_sinhvienlophoc">ID_SINH VIÊN LỚP HỌC:</label>
                                <option value="0">------Chọn------</option>
                                @foreach($qlsv_sinhvienlophoc as $key=>$value)
                                <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="form-group row">
                    <div class="col-sm-6">
                            <label for="">ID_LỚP HỌC:</label>
                            <select name="id_sinhvienlophoc">
                                <label for="id_sinhvienlophoc">ID_SINH VIÊN LỚP HỌC:</label>
                                <option value="0">------Chọn------</option>
                                @foreach($qlsv_sinhvienlophoc as $key=>$value)
                                <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success px-4 float-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</button>
                   
            </div>
        </div>
    </div>
    @endsection