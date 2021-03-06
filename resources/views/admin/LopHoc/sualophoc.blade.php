@extends('layouts.trangchu')

@section('content')
<div style="text-align:right;background-color:#ddd;padding: 4px;">
    <a class="btn btn-primary btn-sm" href="<?= route("qlsvlophoc.index") ?>">
        <i class="glyphicon glyphicon-list-alt"></i></a>
</div>
  <div class="container">
  <form method="post" action="{{ route('qlsvlophoc.update',[$lopHoc->id])}} ">
      @csrf
      <div class="form-group">
        <input class="form-control" type="hidden" name="id" value="{{$lopHoc->id}}" /><br>
      </div>

      <div class="form-group">
        <label>Tên lop hoc :</label>
        <input class="form-control" type="text" name="tenlophoc" value="{{$lopHoc->tenlophoc}}" /><br>
      </div>

      <div class="form-group">
        <label>Tên giang vien :</label>
        <select name="id_giangvien" class="form-control">
          @foreach($giangVien as $nd => $value)
          <option value="{{$nd}}" {{($nd == $lopHoc->id_giangvien) ? 'selected' : ''}}>{{$value}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>Tên khoa hoc :</label>
        <select name="id_khoahoc" class="form-control">
          @foreach($khoaHoc as $nd => $value)
          <option value="{{$nd}}" {{($nd == $lopHoc->id_khoahoc) ? 'selected' : ''}}>{{$value}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>Tên môn học :</label>
        <select name="id_monhoc" class="form-control">
          @foreach($monHoc as $nd => $value)
          <option value="{{$nd}}" {{($nd == $lopHoc->id_monhoc) ? 'selected' : ''}}>{{$value}}</option>
          @endforeach
        </select>
      </div>
      <input class="btn btn-primary" type="submit" value="Sửa" />
    </form>
  </div>
</body>
@endsection