@extends('layouts.trangchu')

@section('content')
    <div class="container"><br>
        <h2 style="text-align: center;">Sửa giảng viên</h2>
        <hr>
        <form method="post" action="{{ route('qlsv_giangvien.update',[$giangVien->id])}} ">
            @csrf
            <div iv class="form-group">

                <input type="hidden" class="form-control" value="{{$giangVien->id}}" name="id">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Họ và Tên:</label>
                <input type="text" class="form-control" name="hovaten" value="{{$giangVien->hovaten}}" placeholder="nhập họ và tên">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">ngay sinh:</label>
                <input type="date" class="form-control" name="ngáyinh" value="{{$giangVien->ngaysinh}}" placeholder="nhập họ và tên">
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Địa chỉ:</label>
                <input type="text" class="form-control" name="diachi" value="{{$giangVien->diachi}}" placeholder="nhập địa chỉ">
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Giới tính:</label>
                <label class="radio-inline"><input type="radio" value="0" {{$giangVien->gioitinh == 0 ? 'checked' : ''}} name="gioitinh">Nam</label>
                <label class="radio-inline"><input type="radio" value="1" {{$giangVien->gioitinh == 1 ? 'checked' : ''}} name="gioitinh">Nữ</label>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Số điện thoại cá nhân:</label>
                <input type="number" class="form-control" value="{{$giangVien->sodienthoaicanhan}}" name="sodienthoaicanhan" placeholder="nhập số điện thoại liên hệ cá nhân">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Số điện thoại công khai:</label>
                <input type="number" class="form-control" value="{{$giangVien->sodienthoaicongkhai}}" name="sodienthoaicongkhai" placeholder="nhập số điện thoại liên hệ công khai">
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">gioithieu:</label>
                <input type="text" class="form-control" value="{{$giangVien->gioithieu}}" name="gioithieu" placeholder="nhập số id của user">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">ghi chú:</label>
                <input type="text" class="form-control" value="{{$giangVien->ghichu}}" name="ghichu" placeholder="nhập số id của user">
            </div>
            <input class="btn btn-primary" type="submit" value="Sửa" />
        </form>
    </div>
</body>
@endsection