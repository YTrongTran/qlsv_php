@extends('layouts.trangchu')

@section('content')
<div style="text-align:right;background-color:#f3ecec;padding: 4px;">
    <a class="btn btn-primary btn-sm" href="#" onclick="$('#searcharea').toggle();return false;">
        <i class="glyphicon glyphicon-search"></i></a>
        <a class="btn btn-success btn-sm" href="<?= route("qlsv_diemthi.create") ?>">
        <i class="glyphicon glyphicon-plus"></i></a>

</div>
<div id="searcharea" style="display:none">
    <form action="{{route('qlsv_diemthi.index')}}" method="get" class="form-inline pull-right">
        <div class="form-group">
            <input id="" class="form-control" type="text" value="{{$search}}" name="search" placeholder="Tìm kiếm">
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </div>
    </form>
</div>
<form action="">
    <table>
    <thead class="andi">
            <tr>
                <th>STT</th>
                <th>ĐIỂM LÝ THUYẾT</th>
                <th>ĐIỂM THỰC HÀNH</th>
                <th>NGÀY CHỜ ĐIỂM</th>
                <th>GHI CHÚ</th>
                <th>ID_KIỂU THI</th>
                <th>ID_SINH VIÊN LỚP HỌC</th>
                <th>Hành động</th>
            </tr>
            <?php $stt = 1 ?>
        </thead>
        <tbody>
            @foreach($qlsv_diemthi as $value)
            <tr>
                <td><?= $stt++ ?></td>
                <td>{{$value->diemlythuyet}}</td>
                <td>{{$value->diemthuchanh}}</td>
                <td>{{$value->ngaychodiem}}</td>
                <td>{{$value->ghichu}}</td>
                <td>{{$qlsv_kieuthi[$value->id_kieuthi] ?? " "}}</td>
               
                <td>{{$qlsv_sinhvienlophoc[$value->id_sinhvienlophoc] ?? " "}}</td>
                <td style="padding-left:0;line-height: 33px;">
                    <a class="btn-default btn-xs" href="{{route('qlsv_diemthi.edit',$value->id)}}">
                        <i class="glyphicon glyphicon-pencil"></i></a>
                    <a class="btn-default btn-xs" href="{{route('qlsv_diemthi.delete',$value->id)}}">
                        <i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <div class="text-center">
            {{ $qlsv_diemthi->appends(['sort' => 'id'])->links() }}
        </div>
    </table>
</form>

@endsection