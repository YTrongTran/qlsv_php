@extends('layouts.trangchu')

@section('content')
<div style="text-align:right;background-color:#ddd;padding: 4px;">
    <a class="btn btn-primary btn-sm" href="<?= route("qlsv_thoikhoabieu.index") ?>">
        <i class="glyphicon glyphicon-list-alt"></i></a>
</div>
    <div class="container-fluid py-5">
        <div class="row" style="background-color:#ddd; padding: 20px; padding-bottom: 50px;">
            <div class="col-md-10 mx-auto">
                <form method="post" action="{{route('qlsv_thoikhoabieu.store')}}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">Buổi thứ</label>
                            <input type="number" class="form-control" id="" name="buoithu" placeholder="nhập buổi thứ" />
                        </div>
                        <div class="col-sm-6">
                            <label for="">Ngày học</label>
                            <input type="date" class="form-control" id="" name="ngayhoc" placeholder="nhập ngày học" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6" >
                            <label>Ca học:</label>
                            <label class="checkbox-inline"> <input type="radio" name="cahoc" checked="checked" value="1" id="" />Sáng
                            </label> <label class="checkbox-inline"> <input type="radio" name="cahoc" value="2" id="" /> Chiều
                            </label> <label class="checkbox-inline"> <input type="radio" name="cahoc" value="3" id="" /> Tối
                            </label>
                        </div>
                        <div class="col-sm-6" >
                            <label for="">Địa điểm học</label>
                            <label class="checkbox-inline"> <input type="radio" name="diadiemhoc" checked="checked" value="1" id="" />Trường
                            </label> <label class="checkbox-inline"> <input type="radio" name="diadiemhoc" value="2" id="" /> Xưởng Ô tô
                            </label> <label class="checkbox-inline"> <input type="radio" name="diadiemhoc" value="3" id="" /> Khác
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6" >
                            <label>Giờ vào:</label>
                            <input class="form-control" type="time" id="appt" name="giovao">
                        </div>
                        <div class="col-sm-6" >
                            <label>Giờ bắt đầu:</label>
                            <input class="form-control" type="time" id="appt" name="giobatdau">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6" >
                            <label>Đánh giá giờ vào:</label>
                            <label class="checkbox-inline"> <input type="radio" name="danhgiagiovao" checked="checked" value="1" id="" />Đúng
                            </label> <label class="checkbox-inline"> <input type="radio" name="danhgiagiovao" value="2" id="" /> Trễ
                            </label>
                        </div>
                        <div class="col-sm-6" >
                            <label for="">Lý do giờ vào</label>
                            <label class="checkbox-inline"> <input type="radio" name="lydogiovao" checked="checked" value="1" id="" />Xong bài
                            </label> <label class="checkbox-inline"> <input type="radio" name="lydogiovao" value="2" id="" /> Lớp đề nghị
                            </label> <label class="checkbox-inline"> <input type="radio" name="lydogiovao" value="3" id="" /> Khác
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6" >
                            <label>Giờ ra:</label>
                            <input class="form-control" type="time" id="appt" name="giora">
                        </div>
                        <div class="col-sm-6" >
                            <label for="">Đánh giá giờ ra</label>
                            <label class="checkbox-inline"> <input type="radio" name="danhgiagiora" checked="checked" value="1" id="" />Sớm
                            </label> <label class="checkbox-inline"> <input type="radio" name="danhgiagiora" value="2" id="" /> Đúng
                            </label> <label class="checkbox-inline"> <input type="radio" name="danhgiagiora" value="3" id="" /> Trễ
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6" >
                            <label for="">Lý do giờ ra</label>
                            <label class="checkbox-inline"> <input type="radio" name="lydogiora" checked="checked" value="1" id="" />Xong bài
                            </label> <label class="checkbox-inline"> <input type="radio" name="lydogiora" value="2" id="" /> Lớp đề nghị
                            </label> <label class="checkbox-inline"> <input type="radio" name="lydogiora" value="3" id="" /> Khác
                            </label>
                        </div>
                        <div class="col-sm-6" >
                            <label for="">Sĩ số</label>
                            <input type="number" class="form-control" id="" name="siso" placeholder="nhập sĩ số" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6" >
                            <label for="">Kết quả thực hiện</label>
                            <label class="checkbox-inline"> <input type="radio" name="ketquathuchien" checked="checked" value="1" id="" />Thực hiện tốt/hiểu bài
                            </label> <label class="checkbox-inline"> <input type="radio" name="ketquathuchien" value="2" id="" /> Không làm được/không hiểu
                            </label>
                        </div>
                        <div class="col-sm-6" >
                            <label for="">Lời nhắn Phòng Đào tạo(GV ghi lại tên xe thực hành-NẾU CÓ)</label>
                            <input type="text" class="form-control" id="" name="loinhanphongdaotao" placeholder="nhập lời nhắn" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6" >
                            <label for="">Đánh giá của giảng viên</label></label>
                            <input type="text" class="form-control" id="" name="danhgiacuagiangvien" placeholder="nhập đánh giá" />
                        </div>
                        <div class="col-sm-6" >
                            <label for="">Chữ ký của giảng viên</label>
                            <input type="text" class="form-control" id="" name="chukicuagiangvien" placeholder="nhập chữ kí" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6" >
                            <label for="">Lời nhắn của giảng viên</label></label>
                            <input type="text" class="form-control" id="" name="loinhancuagiangvien" placeholder="nhập lời nhắn" />
                        </div>
                        <div class="col-sm-6" >
                            <label for="">Ghi chú</label></label>
                            <input type="text" class="form-control" id="" name="ghichu" placeholder="nhập ghi chú" />
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">Tên worktask</label></label>
                            <select name="id_worktask" class="form-control">
                                @foreach($workTask as $nd => $value)
                                <option value="{{$nd}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Tên phòng học</label>
                            <select name="id_phonghoc" class="form-control">
                                @foreach($phongHoc as $nd => $value)
                                <option value="{{$nd}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success px-4 float-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
    @endsection