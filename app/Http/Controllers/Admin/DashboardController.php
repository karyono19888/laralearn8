<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $checkouts = Checkout::with('Camp')->get();
        return view('admin.index', [
            'checkouts' => $checkouts
        ]);
    }
}