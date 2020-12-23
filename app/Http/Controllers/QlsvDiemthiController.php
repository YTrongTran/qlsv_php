<?php

namespace App\Http\Controllers;

use App\qlsv_diemthi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QlsvDiemthiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "Danh sách điểm thi";
        $search = $request->get('search') ?? "";
        $qlsv_diemthi = DB::table('qlsv_diemthis')
            ->where('diemlythuyet', 'like', '%' . $search . '%')
            ->where("deleted_at", 0)->paginate(10);
        $qlsv_sinhvienlophoc = DB::table('qlsv_sinhvienlophocs')->pluck('id_sinhvien','id_lophoc','id');
        $qlsv_kieuthi = DB::table('qlsv_kieuthis')->pluck('kieuthi', 'id');
        return view('admin/diemthi/viewdiemthi', compact(['qlsv_diemthi','qlsv_sinhvienlophoc','qlsv_kieuthi', 'title', 'search']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Thêm điểm thi";
        $qlsv_sinhvienlophoc = DB::table('qlsv_sinhvienlophocs')->pluck('id_sinhvien','id_lophoc', 'id');
        $qlsv_kieuthi = DB::table('qlsv_kieuthis')->pluck('kieuthi', 'id');
        return view('admin/diemthi/themdiemthi', compact(['qlsv_sinhvienlophoc', 'qlsv_kieuthi', 'title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new qlsv_diemthi();
        $data->diemlythuyet = $request->diemlythuyet;
        $data->diemthuchanh = $request->diemthuchanh;
        $data->ngaychodiem = $request->ngaychodiem;
        $data->ghichu = $request->ghichu;
        $data->id_kieuthi = $request->id_kieuthi;
        $data->id_sinhvienlophoc = $request->id_sinhvienlophoc;
        $data->deleted_at = "0";
        $data->created_at = Carbon::now();
        $data->save();
        return redirect('diemthi/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\qlsv_diemthi  $qlsv_diemthi
     * @return \Illuminate\Http\Response
     */
    public function show(qlsv_diemthi $qlsv_diemthi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\qlsv_diemthi  $qlsv_diemthi
     * @return \Illuminate\Http\Response
     */
    public function edit(qlsv_diemthi $qlsv_diemthi, $id)
    {
        $title = "Sửa điểm thi";
        $qlsv_diemthi = DB::table('qlsv_diemthis')->find($id);
        $qlsv_kieuthi = DB::table('qlsv_kieuthis')->pluck('kieuthi','id');
        $qlsv_sinhvienlophoc = DB::table('qlsv_sinhvienlophocs')->pluck('id_sinhvien','id_lophoc', 'id');
        return view ('admin/diemthi/editdiemthi',[
            'qlsv_diemthi'=> $qlsv_diemthi,
            'qlsv_kieuthi'=> $qlsv_kieuthi,
            'qlsv_sinhvienlophoc'=>$qlsv_sinhvienlophoc,
            'title'=>$title
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\qlsv_diemthi  $qlsv_diemthi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, qlsv_diemthi $qlsv_diemthi)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $data = qlsv_diemthi::find($request->id);
        $data->diemlythuyet = $request->diemlythuyet;
        $data->diemthuchanh = $request->diemthuchanh;
        $data->ngaychodiem = $request->ngaychodiem;
        $data->ghichu = $request->ghichu;
        $data->id_kieuthi = $request->id_kieuthi;
        $data->id_sinhvienlophoc = $request->id_sinhvienlophoc;
        $data->update(["updated_at" => Carbon::now()]);
        $data->save();
        return redirect('diemthi/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\qlsv_diemthi  $qlsv_diemthi
     * @return \Illuminate\Http\Response
     */
    public function destroy(qlsv_diemthi $qlsv_diemthi,$id)
    {
        
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $qlsv_diemthi = DB::table('qlsv_diemthis')->where('id', $id)->update(["deleted_at" => "1", "updated_at" => Carbon::now()]);
        return redirect('diemthi/index');
    }
}
