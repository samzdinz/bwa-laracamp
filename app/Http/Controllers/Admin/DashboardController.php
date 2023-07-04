<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CheckOut;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = CheckOut::with('Camp')->get();
        return view('admin.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
