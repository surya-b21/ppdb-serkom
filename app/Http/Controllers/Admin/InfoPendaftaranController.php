<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hasil;
use App\Models\User;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class InfoPendaftaranController extends Controller
{
    //show index view
    public function index()
    {
        return view('admin.info-pendaftaran.index');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.info-pendaftaran.show', compact('user'));
    }

    //get json informasi pendaftaran
    public function getpendf()
    {
        $sekolah = Sekolah::find(1);
        $query = Hasil::select(['id', 'user_id', 'sekolah_id', 'rata_rata'])->whereRaw("sekolah_id = " . $sekolah->id . " AND rata_rata >= 85")->limit($sekolah->limit)->get();

        return DataTables::of($query)
            ->addIndexColumn()
            ->editColumn('sekolah_id', function ($data) {
                $sekolah = DB::table('sekolah')->where('id', $data->sekolah_id)->first();
                return $sekolah->nama;
            })
            ->editColumn('user_id', function ($data) {
                $user = DB::table('users')->where('id', $data->user_id)->first();
                $a = '<a href=' . route('admin.show', $user->id) . '>' . $user->nama . '</a>';
                return $a;
            })
            ->rawColumns(['sekolah_id', 'user_id'])
            ->toJson();
    }
}
