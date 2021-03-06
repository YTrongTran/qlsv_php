@extends('layouts.trangchu')

@section('content')
<div style="text-align:right;background-color:#ddd;padding: 4px;">
    <a class="btn btn-primary btn-sm" href="<?= route("qlsvlophoc.index") ?>">
        <i class="glyphicon glyphicon-list-alt"></i></a>
</div>
<div class="container-fluid py-5">
        <div class="row" style="background-color:#ddd; padding: 20px; padding-bottom: 50px;">
            <div class="col-md-10 mx-auto">
                <form method="post" action="{{route('qlsvlophoc.store')}}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">Tên lớp học</label>
                            <input type="text" class="form-control" id="" name="tenlophoc" placeholder="nhập tên lớp học" />
                        </div>
                        <div class="col-sm-6">
                            <label>Tên giảng viên:</label>
                            <select name="id_giangvien" class="form-control">
                                @foreach($giangVien as $nd => $value)
                                <option value="{{$nd}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Tên khoá học:</label>
                            <select name="id_khoahoc" class="form-control">
                                @foreach($khoaHoc as $nd => $value)
                                <option value="{{$nd}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>Tên môn học:</label>
                            <select name="id_monhoc" class="form-control">
                                @foreach($monHoc as $nd => $value)
                                <option value="{{$nd}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">Thời lượng</label>
                            <input type="text" class="form-control" id="" name="thoiluong" placeholder="nhập thời lượng" />
                        </div>
                       
                    </div>

                    <button type="submit" class="btn btn-success px-4 float-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</button>
                   
                </form>
            </div>
        </div>
    </div>
    @endsection