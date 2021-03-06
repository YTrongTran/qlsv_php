@extends('layouts.trangchu')
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
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
                        <label for="">Họ và tên:</label>
                        <input type="text" class="form-control" value="{{ old('hovaten') }}" id="hovaten" name="hovaten"
                            placeholder="nhập họ và tên" />

                    </div>
                    <div class="col-sm-6" style="margin-top: 28px;">
                        <label>Giới tính:</label>
                        <select name="gioitinh" class="form-control">
                            <option value="0" id="gioitinh1" name="gioitinh"> Nam </option>
                            <option value="1" id="gioitinh2" name="gioitinh">Nữ</option>
                            <option value="2" id="gioitinh3" name="gioitinh">Khác</option>
                        </select>
                        <!-- <label class="checkbox-inline"> <input type="radio" name="gioitinh" checked="checked" value="0"
                                id="gioitinh1" />Nam
                        </label> <label class="checkbox-inline"> <input type="radio" name="gioitinh" value="1"
                                id="gioitinh2" /> Nữ
                        </label>
                        </label> <label class="checkbox-inline"> <input type="radio" name="gioitinh" value="2"
                                id="gioitinh3" /> Khác
                        </label> -->

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="">Ngày sinh:</label>
                        <input type="date" value="2020-12-12" class="form-control" name="ngaysinh"
                            placeholder="nhập ngày sinh" />

                    </div>
                    <div class="col-sm-6">
                        <label for="">Địa chỉ:</label>
                        <input type="text" class="form-control" id="" name="diachi" placeholder="nhập địa chỉ" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="">Số điện thoại Cá nhân:</label>
                        <input type="text" class="form-control" id="" name="sodienthoaicanhan"
                            placeholder="nhập số điện thoại cá nhân" />
                    </div>
                    <div class="col-sm-6">
                        <label for="">Số điện thoại Công khai: </label>
                        <input type="text" class="form-control" id="" name="sodienthoaicongkhai"
                            placeholder="nhập số điện thoại công khai" />
                    </div>

                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="">Ghi chú:</label>
                        <input type="text" class="form-control" id="" name="ghichu" placeholder="nhập ghi chú" />
                    </div>

                    <div class="col-sm-6">
                        <label for="">Giới thiệu:</label>
                        <input type="text" class="form-control" name="gioithieu" placeholder="nhập giới thiệu" />
                    </div>

                </div>
                <div class="form-group row">


                    <div class="col-sm-6">
                        <label for="">Email:</label>
                        <input type="text" value="{{ old('email') }}" class="form-control" id="email" name="email"
                            placeholder="nhập email" />
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label for="">Mật khẩu: </label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="nhập password" />
                    </div>
                </div>
                <button type="submit" name="register" id="register" class="btn btn-success px-4 float-right"><i
                        class="glyphicon glyphicon-plus"></i> Thêm mới</button>

            </form>

        </div>
    </div>
</div>
@endsection