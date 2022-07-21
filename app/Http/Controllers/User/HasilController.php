<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hasil;
use Illuminate\Support\Facades\Auth;

class HasilController extends Controller
{
    public function hasil()
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
        return view('user.hasil', compact(['hasil', 'status']));
    }
}
