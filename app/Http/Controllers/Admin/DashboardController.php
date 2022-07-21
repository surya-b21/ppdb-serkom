<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{

    // show dashboard view
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // get user data
    public function getuser()
    {
        $user = User::select(['id', 'nama', 'email'])->where('is_admin', 0);

        return DataTables::of($user)
            ->addIndexColumn()
            ->toJson();
    }
}
