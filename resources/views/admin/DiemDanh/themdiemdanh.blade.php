@extends('layouts.trangchu')

@section('content')
<div style="text-align:right;background-color:#ddd;padding: 4px;">
    <a class="btn btn-primary btn-sm" href="<?= route("qlsv_diemdanh.index") ?>">
        <i class="glyphicon glyphicon-list-alt"></i></a>
</div>
<div class="container-fluid py-5">
    <div class="row" style="background-color:#ddd; padding: 20px; padding-bottom: 50px;">
        <div class="col-md-10 mx-auto">
            <form method="post" action="{{route('qlsv_diemdanh.store')}}">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label>Ngày học:</label>
                        <select name="id_thoikhoabieu" class="form-control">
                            @foreach($thoiKhoaBieu as $nd => $value)
                            <option value="{{$nd}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label>Tên sinh viên:</label>
                        <select name="id_sinhvien" class="form-control">
                            @foreach($sinhVien as $nd => $value)
                            <option value="{{$nd}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="">Đến lớp</label>
                        <label class="checkbox-inline"> <input type="radio" name="denlop" checked="checked" value="1" id="" />Có
                        </label> <label class="checkbox-inline"> <input type="radio" name="denlop" value="2" id="" /> Không
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="">Kiến thức</label>
                        <label class="checkbox-inline"> <input type="radio" name="kienthuc" checked="checked" value="1" id="" />Có
                        </label> <label class="checkbox-inline"> <input type="radio" name="kienthuc" value="2" id="" /> Không
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="">Thực hành</label>
                        <label class="checkbox-inline"> <input type="radio" name="thuchanh" checked="checked" value="1" id="" />Có
                        </label> <label class="checkbox-inline"> <input type="radio" name="thuchanh" value="2" id="" /> Không
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="">Ghi chú</label>
                        <input type="text" class="form-control" name="ghichu" value="" placeholder="Nhập ghi chú">
                    </div>
                </div>
                <button type="submit" class="btn btn-success px-4 float-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</button>

            </form>
        </div>
    </div>
</div>
@endsection