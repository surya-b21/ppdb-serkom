<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Hasil;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $sekolah = DB::table('sekolah')->where('id', Auth::user()->nilai->sekolah_id)->first();
        $hasil = Hasil::select(['id', 'user_id', 'sekolah_id', 'rata_rata'])->where('sekolah_id', $sekolah->id)->limit($sekolah->limit)->orderByDesc('rata_rata')->get();

        $arr = array();
        $i = 0;
        foreach ($hasil as $data) {
            $arr[$i] = $data->user_id;
            $i++;
        }
        $status = array_search(Auth::id(), $arr);
        return view('user.dashboard', compact(['hasil', 'status']));
    }
}
