@extends('layouts.trangchu')

@section('content')
<div style="text-align:right;background-color:#ddd;padding: 4px;">
    <a class="btn btn-primary btn-sm" href="<?= route("qlsv_giangvien.index") ?>">
        <i class="glyphicon glyphicon-list-alt"></i></a>
</div>
    <div class="container-fluid py-5">
        <div class="row" style="background-color:#ddd; padding: 20px; padding-bottom: 50px;">
            <div class="col-md-10 mx-auto">
                <form method="post" action="{{route('qlsv_giangvien.store')}}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">Họ và tên</label>
                            <input type="text" class="form-control" id="" name="hovaten" placeholder="nhập họ và tên" />
                        </div>
                        <div class="col-sm-6" style="margin-top: 28px;">
                            <label>gioitinh:</label>
                            <label class="checkbox-inline"> <input type="radio" name="gioitinh" checked="checked" value="1" id="gioitinh1" />Nam
                            </label> <label class="checkbox-inline"> <input type="radio" name="gioitinh" value="2" id="gioitinh2" /> Nữ
                            </label>
                            </label> <label class="checkbox-inline"> <input type="radio" name="gioitinh" value="0" id="gioitinh3" /> Khác
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">Ngày sinh</label>
                            <input type="date" class="form-control" id="" name="ngaysinh" placeholder="nhập ngày sinh" />
                        </div>
                        <div class="col-sm-6">
                            <label for="">ĐỊA CHỈ</label>
                            <input type="text" class="form-control" id="" name="diachi" placeholder="nhập địa chỉ" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">Số điện thoại cá nhân</label>
                            <input type="number" class="form-control" id="" name="sodienthoaicanhan" placeholder="nhập số điện thoại cá nhân" />
                        </div>
                        <div class="col-sm-6">
                            <label for="">Số điện thoại công khai</label>
                            <input type="number" class="form-control" id="" name="sodienthoaicongkhai" placeholder="nhập số điện thoại công khai" />
                        </div>
                        <div class="col-sm-6">
                            <label for="">Gioi thieu</label>
                            <input type="text" class="form-control" id="" name="gioithieu" placeholder="nhập giới thiệu" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">ghichu</label>
                            <input type="text" class="form-control" id="" name="ghichu" placeholder="nhập ghi chú" />
                        </div>
                        <div class="col-sm-6">
                            <label for="">email</label>
                            <input type="text" class="form-control" id="" name="email" placeholder="nhập email" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">username</label>
                            <input type="text" class="form-control" id="" name="name" placeholder="nhập username" />
                        </div>
                        <div class="col-sm-6">
                            <label for="">password</label>
                            <input type="password" class="form-control" id="" name="password" placeholder="nhập password" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success px-4 float-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</button>

                </form>
            </div>
        </div>
    </div>
    @endsection