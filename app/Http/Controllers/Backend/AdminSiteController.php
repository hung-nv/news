<?php

namespace App\Http\Controllers\Backend;

class AdminSiteController extends Controller
{
    public function index() {
        return view('backend.site.dashboard');
    }
}
