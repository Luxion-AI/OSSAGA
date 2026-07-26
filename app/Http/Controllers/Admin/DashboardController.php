<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\WorkProgram;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBerita = Content::where('type', 'berita')->count();
        $totalProgram = WorkProgram::count();
        
        return view('pages.admin.dashboard', compact('totalBerita', 'totalProgram'));
    }
}
