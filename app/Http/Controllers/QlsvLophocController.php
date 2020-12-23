<?php

namespace App\Http\Controllers;

use App\qlsv_giangvien;
use App\qlsv_khoahoc;
use App\qlsv_lophoc;
use App\qlsv_monhoc;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QlsvLophocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "Danh sách lớp học";
        $search = $request->get('search')??"";
        $lopHoc = DB::table('qlsv_lophocs')->where('tenlophoc','like','%'.$search.'%')->where('deleted_at',0)->paginate(10);
        return view('admin.LopHoc.dslophoc', compact(['lopHoc','title','search']));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Thêm lớp học";
        $giangVien = DB::table('qlsv_giangviens')->pluck('hovaten', 'id');
        $khoaHoc = DB::table('qlsv_khoahocs')->pluck('tenkhoahoc', 'id');
        $monHoc = DB::table('qlsv_monhocs')->pluck('tenmonhoc', 'id');
        return view('admin.LopHoc.themlophoc',compact(['giangVien','khoaHoc','monHoc','title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $lopHoc = new qlsv_lophoc();
        $lopHoc->tenlophoc = $request->tenlophoc;
        $lopHoc->id_giangvien = $request->id_giangvien;
        $lopHoc->id_khoahoc = $request->id_khoahoc;
        $lopHoc->id_monhoc = $request->id_monhoc;
        $lopHoc->thoiluong = $request->thoiluong;
        $lopHoc->deleted_at = "0";
        $lopHoc->created_at = Carbon::now();
        $lopHoc->save();
        return redirect()->route('qlsvlophoc.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\qlsv_lophoc  $qlsv_lophoc
     * @return \Illuminate\Http\Response
     */
    public function show(qlsv_lophoc $qlsv_lophoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\qlsv_lophoc  $qlsv_lophoc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Sửa lớp học";
        $lopHoc = qlsv_lophoc::find($id);
        $giangVien = qlsv_giangvien::pluck('hovaten', 'id');
        $khoaHoc = qlsv_khoahoc::pluck('tenkhoahoc', 'id');
        $monHoc = qlsv_monhoc::pluck('tenmonhoc', 'id');
        return view('admin.LopHoc.sualophoc', compact(['lopHoc', 'giangVien','khoaHoc','monHoc','title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\qlsv_lophoc  $qlsv_lophoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $lopHoc = qlsv_lophoc::find($id);
        $lopHocEdit = $request->all();
        $lopHoc->update(["updated_at" => Carbon::now()]);
        $lopHoc->update($lopHocEdit);
        return redirect()->route('qlsvlophoc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\qlsv_lophoc  $qlsv_lophoc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $lopHoc = DB::table('qlsv_lophocs')->where('id',$id)->update(["deleted_at" => "1","updated_at" => Carbon::now()]);
        return redirect()->route('qlsvlophoc.index');
    }
}
