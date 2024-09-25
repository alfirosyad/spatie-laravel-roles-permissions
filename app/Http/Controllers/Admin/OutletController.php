<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function index()
    {
//        if (!auth()->user()->can('all access')) {
//            abort(403, 'Unauthorized');
//        }

        $outlets = Outlet::all();
        return view('admin.outlets.index', compact('outlets'));
    }
}
