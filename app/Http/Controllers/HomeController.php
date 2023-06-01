<?php

namespace App\Http\Controllers;

use App\Models\CheckOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        $checkouts = CheckOut::with('Camp')->whereUserId(Auth::id())->get();
        return view('user.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
