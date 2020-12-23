@extends('layouts.trangchu')

@section('content')

<body>
    <div class="container-fuild py-5" style="margin-top: 0px; margin-bottom: 1px;">
        <div class="row" style="background-color:#ddd; padding: 40px; padding-bottom: 80px;">
            <div class="col-md-10 mx-auto">
                <form method="post" action="{{ route('qlsv_sinhvien.store') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">Họ và tên</label>
                            <input type="text" class="form-control" id="" name="hovaten" placeholder="nhập họ và tên" />
                        </div>
                        <div class="col-sm-6" style="margin-top: 28px;">
                            <label for="">Giới tính</label>
                            <label class="checkbox-inline"> <input type="radio" name="gioitinh" value="0" checked="checked" id="gioitinh1" />Nam
                            </label> <label class="checkbox-inline"> <input type="radio" name="gioitinh" value="1" id="gioitinh2" /> Nữ
                            </label>
                            </label> <label class="checkbox-inline"> <input type="radio" name="gioitinh" value="2" id="gioitinh3" /> Khác
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Địa chỉ</label>
                            <input type="text" class="form-control" id="" name="diachi" placeholder="nhập địa chỉ" />
                        </div>
                        <div class="col-sm-6">
                            <label for="">Số điện thoại sinh viên</label>
                            <input type="text" class="form-control" id="" name="sodienthoaisinhvien" placeholder="nhập số điện thoại sinh viên" />
                        </div>
                        <div class="col-sm-6">
                            <label for="">Số điện thoại gia đình</label>
                            <input type="text" class="form-control" id="" name="sodienthoaigiadinh" placeholder="nhập số điện thoại gia đình" />
                        </div>
                        <div class="col-sm-6">
                            <label for="">ghichu</label>
                            <input type="text" class="form-control" id="" name="ghichu" placeholder="nhập ghi chú" />
                        </div>
                        <div class="col-sm-6">
                            <label for="">email</label>
                            <input type="text" class="form-control" id="" name="email" placeholder="nhập email" />
                        </div>
                        <div class="col-sm-6">
                            <label for="">password</label>
                            <input type="password" class="form-control" id="" name="password" placeholder="nhập password" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success px-4 float-right"><i class="glyphicon glyphicon-plus"></i> Thêm
                        mới</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    @endsection